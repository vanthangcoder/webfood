<?php
    session_start();
    $mod = isset($_GET['act']) ? $_GET['act'] : "home";
    switch($mod) {
        case 'home':
            require_once('Controller/HomeController.php');
            $controller = new HomeController();
            $controller->list();
            break;
        case 'about':
            require_once('Controller/AboutController.php');
            $controller = new AboutController();
            $controller->list();
            break;
        case 'detail':
            require_once('Controller/DetailController.php');
            $controller = new DetailController();
            $controller->getDetail();
            break;
        case 'menu':
            require_once('Controller/MenuController.php');
            $controller = new MenuController();
            $controller->getAll();
            break;
        case 'contact':
            require_once('Controller/ContactController.php');
            $controller = new ContactController();
            $controller->contact();
            break;
        case 'service':
            require_once('Controller/ServiceController.php');
            $controller = new ServiceController();
            $controller->service();
            break;
        case 'info':
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
            require_once('Controller/InfoController.php');
            $controller = new InfoController();
            switch($act) {
                case 'join':
                    $controller->info();
                    break;
                case 'update':
                    $controller->update();
                    break;
                default:
                    $controller->show();
                    break;
            }
            break;
        case 'login':
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
            require_once('Controller/LoginController.php');
            $controller = new LoginController();
            switch($act) {
                case 'join':
                    $controller->getUser();
                    break;
                default:
                    $controller->show();
                    break;
            }
            break;
        case 'logout':
            require_once('Controller/LoginController.php');
            $controller = new LoginController();
            $controller->logout();
            break;
        case 'register':
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
            require_once('Controller/RegistationController.php');
            $controller = new RegistationController();
            switch($act) {
                case 'join':
                    $controller->getAccount();
                    break;
                default:
                    $controller->show();
                    break;
            }
            break;
        case 'checkout':
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
            require_once('Controller/CheckoutController.php');
            $controller = new CheckoutController();
            switch($act) {
                case 'show':
                    $controller->show();
                    break;
                case 'save':
                    $controller->save();
                    break;
                case 'done':
                    $controller->done();
                    break;
                default:
                    $controller->show();
                    break;
            }
            break;
        case 'cart':
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
            require_once('Controller/CartController.php');
            $controller = new CartController();
            switch($act) {
                case 'list':
                    $controller->list();
                    break;
                case 'add':
                    $controller->add();
                    break;
                case 'inc':
                    $controller->inc();
                    break;
                case 'dec':
                    $controller->dec();
                    break;
                case 'remove':
                    $controller->remove();
                    break;
                default:
                    $controller->list();
                    break;
            }
            break;
        default:
            require_once('Controller/HomeController.php');
            $controller_obj = new Homecontroller();
            $controller_obj->list();
            break;
    }
?>