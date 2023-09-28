<?php
    require_once('Models/checkout.php');
    class CheckoutController {
        var $checkout_model;
        public function __construct() {
            $this->checkout_model = new checkout();
        }

        function show() {
            require_once('Views/index.php');
        }

        function done() {
            require_once('Views/index.php');
        }

        function save(){
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $ThoiGian =  date('Y-m-d H:i:s');

            $count = 0;
            if (isset($_SESSION['cartb'])) {
                foreach ($_SESSION['cartb'] as $value) {
                    $count += $value['ThanhTien'];
                }
            }

            if(isset($_SESSION['login']['user_id'])) {
                $data = array(
                    'user_id' => $_SESSION['login']['user_id'],
                    'created_at' => $ThoiGian,
                    'NguoiNhan' =>    $_POST['fullname'],
                    'SDT' => $_POST['phone'],
                    'DiaChi' => $_POST['address'],
                    'order_total' => $count,
                );
            } else {
                $data = array(
                    'NguoiNhan' => $_POST['fullname'],
                    'SDT' => $_POST['phone'],
                    'DiaChi' => $_POST['address'],
                    'created_at' => $ThoiGian,
                    'order_total' => $count,
                );
            }
            
            $this->checkout_model->save($data);
        }
    }
?>