<?php 

//กำหนดเส้นทางไปที่ Home
    $r->addRoute('GET', '/', function() {
        require_once __DIR__ . '/../resources/views/home/home.php';
    });

    //กลุ่มกำหนดเส้นทางไปยังหน้าส่วนการยืนยันตัวตน
    $r->addGroup('/auth', function($auth) {
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
    $r->addGroup('/group', function($group) {        
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