<?php
require_once __DIR__ . '/../vendor/autoload.php';

use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

$base_url = '/cpvc-blog';

// Remove base URL from URI for routing
$uri = $_SERVER['REQUEST_URI'];
if (strpos($uri, $base_url) === 0) {
    $uri = substr($uri, strlen($base_url));
}
$uri = rawurldecode($uri);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPVC News</title>
    
    <!-- Bootstrap & CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= $base_url ?>/assets/css/style.css" rel="stylesheet">
    
    <!-- Firebase SDKs -->
    <script defer src="/__/firebase/9.x.x/firebase-app-compat.js"></script>
    <script defer src="/__/firebase/init.js?useEmulator=true"></script>
</head>
<body>
    <?php
    $dispatcher = simpleDispatcher(function(RouteCollector $r) {
        require_once __DIR__ . '/../routes/web.php';
    });

    $httpMethod = $_SERVER['REQUEST_METHOD'];
    $routeInfo = $dispatcher->dispatch($httpMethod, $uri);

    switch ($routeInfo[0]) {
        case FastRoute\Dispatcher::NOT_FOUND:
            require __DIR__ . '/../resources/views/404.php';
            break;
        case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
            require __DIR__ . '/../resources/views/405.php';
            break;
        case FastRoute\Dispatcher::FOUND:
            $handler = $routeInfo[1];
            $vars = $routeInfo[2];
            call_user_func($handler, $vars);
            break;
    }
    ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $base_url ?>/assets/js/app.js"></script>
</body>
</html>
