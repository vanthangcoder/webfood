<?php foreach($products as $product) {?>
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="product__item">
            <div
                class="product__item__pic set-bg"
                data-setbg="<?= $product['product_image'];?>"
            >
                <ul class="product__item__pic__hover">
                    <li>
                        <a href="#"
                            ><i class="fa fa-heart"></i
                        ></a>
                    </li>
                    <li>
                        <a href="?act=detail&id=<?= $product['product_id'];?>&loai=<?= $product['category_id'];?>"
                            ><i
                                class="fa fa-retweet"
                            ></i
                        ></a>
                    </li>
                    <li>
                        <a href="?act=cart&xuli=add&id=<?= $product['product_id'];?>"
                            ><i
                                class="
                                    fa fa-shopping-cart
                                "
                            ></i
                        ></a>
                    </li>
                </ul>
            </div>
            <div class="product__item__text">
                <h6>
                    <a href="#"><?= $product['product_name'];?></a>
                </h6>
                <h5><?= number_format($product['product_price']);?> VND</h5>
            </div>
        </div>
    </div>
<?php }?>