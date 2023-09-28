
    <section class="home">
        <div class="home_hinhnen">
            
        </div>
        
    </section>
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Các sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số Lượng</th>
                                    <th>Tổng cộng</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
        
    ?>
                                <?php 
                                
                                    if(isset($_SESSION['cartb'])) { 
                                        if(count($_SESSION['cartb']) == 0) { ?>
                                            <tr>
                                                <td>Giỏ hàng trống
                                            </tr>
                                        <?php }
                                        foreach ($_SESSION['cartb'] as $item) {
                                  ?>
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <img src="<?= $item['product_image'];?>" alt="">
                                            <h5><?= $item['product_name'];?></h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                        <?= number_format($item['product_price']) ;?> đ
                                        </td>
                                        <td class="shoping__cart__quantity">
                                            <form action="" method="post">
                                                    <div class="plus-minus">
                                                        <a href="?act=cart&xuli=dec&id=<?=$item['product_id']?>"
                                                                class="dec qtybutton"
                                                                type="button">-</a>
                                                        <b
                                                                class="plus-minus-box"><?= $item['SoLuong'] ?></b>
                                                        <a href="?act=cart&xuli=inc&id=<?=$item['product_id']?>"
                                                                class="inc qtybutton"
                                                                type="button">+</a>
                                                    </div>
                                            </form>
                                        </td>
                                        <td class="shoping__cart__total">
                                            <?= number_format($item['ThanhTien']) ?>
                                        </td>
                                        <td class="shoping__cart__item__close">
                                            <a href="?act=cart&xuli=remove&id=<?= $item['product_id'];?>"><i class="fas fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <?php }} ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="?act=menu" class="primary-btn cart-btn">TIẾP TỤC MUA SẮM</a>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <?php
                                $count = 0;
                                foreach ($_SESSION['cartb'] as $value) {
                                    $count += $value['ThanhTien'];
                                }
                            ?>
                            <li>Total <span><?= number_format($count) ?> đ</span></li>
                        </ul>
                        <a href="?act=checkout&xuli=show" class="primary-btn">TIẾN HÀNH KIỂM TRA</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    

