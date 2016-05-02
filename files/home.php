    <?php
    $product = new Product();
    $check = $product->lists();
    ?>
    <div id="all">
        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <div id="main-slider">
                        <div class="item">
                            <img src="assets/img/main-slider1.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="assets/img/main-slider2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="assets/img/main-slider3.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="assets/img/main-slider4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="advantages">
                <div class="container">
                    <div class="same-height-row">
                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-heart"></i>
                                </div>
                                <h3><a href="#">We love our customers</a></h3>
                                <p>We are known to provide best possible service ever</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-tags"></i>
                                </div>
                                <h3><a href="#">Best prices</a></h3>
                                <p>You can get all your products at the most affordable price.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-thumbs-up"></i>
                                </div>
                                <h3><a href="#">100% satisfaction guaranteed</a></h3>
                                <p>Free returns on everything for 3 months.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="hot">
                <div class="box">
                    <div class="container">
                        <div class="col-md-12">
                            <h2>Recently Added Products</h2>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="product-slider">
                        <?php foreach ($check as $chk) :?>
                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="index.php?action=detail&id=<?php echo $chk['id']; ?>">
                                             <img alt="blog" style="height:200px;width:90%;" src="adminpanel/uploads/products/<?php echo $chk['image'];?> ">
                                         </a>
                                     </div>
                                     <div class="back">
                                        <a href="index.php?action=detail&id=<?php echo $chk['id']; ?>">
                                            <img alt="blog" style="height:200px;width:90%;" src="adminpanel/uploads/products/<?php echo $chk['image'];?> ">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img alt="blog" style="height:200px;width:90%;" src="adminpanel/uploads/products/<?php echo $chk['image'];?> ">
                            </a>
                            <div class="text">
                                <h3><a href="index.php?action=detail&id=<?php echo $chk['id']; ?>"><?php echo $chk['productname']; ?></a></h3>
                                <p class="price">NPR.<?php echo $chk['price']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>



