<?php
require_once __DIR__ . '/../vendor/autoload.php';

use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

$base_url = '/cpvc-blog';

$dispatcher = simpleDispatcher(function(RouteCollector $r) {
    //กำหนดเส้นทางไปที่ Home
    $r->addRoute('GET', '/', function() {
        require_once __DIR__ . '/../resources/views/home/home.php';
    });

    //กลุ่มกำหนดเส้นทางไปยังหน้าส่วนการยืนยันตัวตน
    $r->addGroup('/auth', function(RouteCollector $auth) {
        //หน้าสมัครสมาชิก
        $auth->addRoute('GET', '/register', function() {
            require_once __DIR__ . '/../resources/views/auth/register.php';
        });

        //หน้าล็อกอิน
        $auth->addRoute('GET', '/login', function() {
            require_once __DIR__ . '/../resources/views/auth/login.php';
        });
    });

    //กลุ่มกำหนดเส้นทางไปยังหน้าของทีมต่างๆ
    $r->addGroup('/group', function(RouteCollector $group) {
        $group->addRoute('GET', '/1', function() {
            require_once __DIR__ . '/../resources/views/group/group1.php';
        });

        $group->addRoute('GET', '/2', function() {
            require_once __DIR__ . '/../resources/views/group/group2.php';
        });

        $group->addRoute('GET', '/3', function() {
            require_once __DIR__ . '/../resources/views/group/group3.php';
        });

        $group->addRoute('GET', '/4', function() {
            require_once __DIR__ . '/../resources/views/group/group4.php';
        });

        $group->addRoute('GET', '/5', function() {
            require_once __DIR__ . '/../resources/views/group/group5.php';
        });
    });
});

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        http_response_code(404);
        echo "404 Not Found";
        break;

    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        http_response_code(405);
        echo "405 Method Not Allowed";
        break;

    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        $handler($vars);
        break;
}

