<?php 
    session_start();
    $act = isset($_GET['act']) ? $_GET['act'] : 'admin';
    switch($act) {
        case 'admin':
            require_once('MVC/controller/HomeController.php');
            $controller = new HomeController();
            $controller->home();
            break;
        case 'controller':
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
            require_once('MVC/controller/CustommerController.php');
            $controller = new CustommerController();
            switch($act) {
                case 'join':
                    $controller->list();
                    break;
                case 'see':
                    $controller->see_info();
                default:
                    $controller->controller();
                    break;
                 }
                 break;
        case 'order':
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
            require_once('MVC/controller/OrderController.php');
            $controller = new OrderController(); 
            switch($act) {
                case 'join':
                    $controller->list();
                    break;
                case 'chua':
                    $controller->chuaXuLy();
                    break;
                case 'dangchua':
                    $controller->dangChuaXuLy();
                    break;
                case 'da':
                    $controller->daXuLy();
                    break;
                case 'huy':
                    $controller->huy();
                    break;
                case 'update':
                    $controller->show();
                    break;
                case 'updatesubmit':
                    $controller->update();
                    break;
                default:
                    $controller->list();
                    break;
                }
                break;
        case 'banner':
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
            require_once('MVC/controller/BannerController.php');
            $controller = new BannerController(); 
            switch($act) {
                case 'show':
                    $controller->list();
                    break;
                case 'add':
                    $controller->add();
                    break;
                case 'addsubmit':
                    $controller->submit();
                    break;
                default:
                    $controller->list();
                    break;
                }
                break;
        case 'tk':
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
                 require_once('MVC/controller/ThongkeController.php');
                $controller = new ThongkeController();
                switch($act) {
                    case 'join':
                        $controller->sp();
                        break;
                    default:
                        $controller->show();
                        break;
                    }  
        case 'product':
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
            require_once('MVC/controller/ProductController.php');
            $controller = new ProductController();
            switch($act) {
                case 'join':
                    $controller->list();
                    break;
                case 'add':
                    $controller->add();
                    break;
                case 'store':
                     $controller->store();
                     break;
                case 'update':
                    $controller->edit();
                     break;
                case 'edit':
                    $controller->update();
                    break;
                case 'delete':
                    $controller->delete();
                    break;
                default:
                $controller->home();
                    break;
                }  
        
            break;
        default:
            require_once('MVC/controller/HomeController.php');
                $controller = new HomeController();
                break;
    }
?>