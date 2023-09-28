<?php
    require_once('Models/cart.php');
    class CartController {
        var $cart_model;
        public function __construct() {
            $this->cart_model = new cart();
        }

        function list(){
            $count = 0;
            if (isset($_SESSION['sanpham'])) {
                foreach ($_SESSION['sanpham'] as $value) {
                    $count += $value['ThanhTien'];
                }
            }
            require_once('Views/index.php');
        }

        function add() {
            $id = $_GET['id'];
            $data = $this->cart_model->detail_sp($id);
            $count = 0;
            if (isset($_SESSION['cartb'][$id])) {
                $arr = $_SESSION['cartb'][$id];
                $arr['SoLuong'] = $arr['soluong'] + 1;
                $arr['ThanhTien'] = $arr['soluong'] * $arr["product_price"];
                $_SESSION['cartb'][$id] = $arr;
            } else {
                $arr['product_id'] = $data['product_id'];
                $arr['product_name'] = $data['product_name'];
                $arr['product_price'] = $data['product_price'];
                $arr['SoLuong'] = 1;
                $arr['ThanhTien'] = $data['product_price'];
                $arr['product_image'] = $data['product_image'];
                $_SESSION['cartb'][$id] = $arr;
            }

            foreach ($_SESSION['cartb'] as $value) {
                $count += $value['ThanhTien'];
            }

            header('Location: ?act=cart#dxd');
        }

        function inc() {
            $arr = $_SESSION['cartb'][$_GET['id']];
            $arr['SoLuong'] = $arr['SoLuong'] + 1;
            $arr['ThanhTien'] = $arr['SoLuong'] * $arr["product_price"];
            $_SESSION['cartb'][$_GET['id']] = $arr;
            header('Location: ?act=cart#dxd');
        }

        function dec() {
            $arr = $_SESSION['cartb'][$_GET['id']];
            $arr['SoLuong'] = $arr['SoLuong'] - 1;
            $arr['ThanhTien'] = $arr['SoLuong'] * $arr["product_price"];
            $_SESSION['cartb'][$_GET['id']] = $arr;
            header('Location: ?act=cart#dxd');
        }

        function remove() {
            $cart=$_SESSION['cartb'];
            $id=$_GET['id'];
            if($id == 0) {
                unset($_SESSION['cartb']);
            }
            else {
                unset($_SESSION['cartb'][$id]);
            }
            header('Location: ?act=cart#dxd');
            exit();
        }
    }
?>