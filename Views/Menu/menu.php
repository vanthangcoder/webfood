        
        <section class="home">
            <div class="home_hinhnen"></div>
        </section>

        <section class="product spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-5">
                        <div class="sidebar">
                            <div class="sidebar__item">
                                <h4>Department</h4>
                                <ul>
                                    <li><a href="?act=menu">Tất cả</a></li>
                                    <?php require_once('category.php'); ?>
                                </ul>
                            </div>
                            

                            <div class="sidebar__item">
                                <div class="latest-product__text">
                                    <h4>Sản phẩm mới nhất</h4>
                                    <div class="latest-product__slider owl-carousel ">
                                        <div class="latest-prdouct__slider__item">
                                            <?php foreach($latests as $latest) { ?>
                                                <a href="?act=detail&id=<?= $latest['product_id'];?>" class="latest-product__item" >
                                                    <div class="latest-product__item__pic">
                                                        <img
                                                            src="<?= $latest['product_image'] ?>"
                                                            alt=""
                                                            class="latest-img"
                                                        />
                                                    </div>
                                                    <div
                                                        class=" latest-product__item__text" >
                                                        <h6><?= $latest['product_name'] ?></h6>
                                                        <span><?= number_format($latest['product_price']) ?></span>
                                                    </div>
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-7">
                        <div class="filter__item">
                            <div class="row">
                                <div class="col-lg-4 col-md-5">
                                    <div class="filter__sort">
                                        <span>Sắp xếp theo</span>
                                        <select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                            <option value="?act=menu">Mặc định</option>
                                            <option value="?act=menu&sort=asc">Thấp đến cao </option>
                                            <option value="?act=menu&sort=desc">Cao đến thấp</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php require_once('listProduct.php'); ?>
                        </div>
                        <div class="product__pagination">
                            <?php 
                                $btn = ceil(count($allProduct)/15);
                                for($i=1; $i<=$btn; $i++) {
                                    echo '<a href="?act=menu&page='.$i.'">'.$i.'</a>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        