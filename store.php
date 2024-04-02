

    <!-- header-area -->
    <?php 
        include('includes/header.php');
    ?>
    <!-- header-area-end -->

    <!-- main-area -->
    <main>

        <!-- Top Cover start-->
        <section class="cover-area cover-bg third-cover-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cover-content text-center">
                            <h2>Game <span>Shop</span></h2>
                            <nav aria-label="cover">
                                <ol class="cover">
                                    <li class="cover-item"><a href="index.php">Home</a></li>
                                    <li class="cover-item active" aria-current="page">Store</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Top Cover End -->

        

        <section class="upcoming-games-area pt-120 pb-80 home-four-shop-area">
            <div class="container">
                <div class="row">
                <!-- <div id="product-grid">
                    <div class="txt-heading">Products</div>
                    
                        <div class="product-item">
                            <form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                            <div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
                            <div class="product-tile-footer">
                            <div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
                            <div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
                            <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                            </div>
                            </form>
                        </div>
                        
                </div> -->
                <?php
                        $product_array = $db_handle->runQuery("SELECT * FROM product_details2 ORDER BY id ASC");
                        if (!empty($product_array)) { 
                            foreach($product_array as $key=>$value){
                        ?>
                        
                            <div class="col-md-6 col-lg-4">
                        <form method="post" action="store.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                        <div class="upcoming-game-item mb-40">
                            <div class="upcoming-game-head">
                                <div class="uc-game-head-title">
                                    <span>SEPTEMBER 22, 2020</span>
                                    <h4><a href="#"><?php echo $product_array[$key]["name"]; ?></a></h4>
                                </div>
                                <div class="uc-game-price">
                                    <h6><?php echo "PKR ".$product_array[$key]["price"]; ?></h6>
                                </div>
                            </div>
                            <p>Compete with players remote island winner takes showdown known issue.</p>
                            <div class="cart-action"><h6>Quantity: </h6><input type="text" class="product-quantity" name="quantity" value="1" size="2" /></div>
                            <div class="upcoming-game-thumb">
                                <img src="<?php echo $product_array[$key]["image"]; ?>" alt="">
                                <div class="upcoming-game-cart">
                                
                                    <button type="submit" value="Add to Cart" class="btn transparent-btn"><i class="fas fa-shopping-basket"></i>BUY Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                    
                    <?php
                            }
                        }
                        ?>
                   
                </div>
            </div>
        </section>

        

    </main>
    <!-- main-area-end -->

    <!-- footer-area -->
    <?php 
        include('includes/footer.php');
    ?>
    <!-- footer-area-end -->





    <!-- JS here -->
    <script data-cfasync="false" src="js/besDXp4bTmLM.js"></script>
    <script src="js/t52JvErvSJ94.js"></script>
    <script src="js/vAY16E4UewUR.js"></script>
    <script src="js/iKOXE31uxxTB.js"></script>
    <script src="js/s71phY6CAxhb.js"></script>
    <script src="js/UUXeowpRr3mz.js"></script>
    <script src="js/R9mAooRKf3tp.js"></script>
    <script src="js/c7f6ofuYF9Uy.js"></script>
    <script src="js/6aaUDfen7Aef.js"></script>
    <script src="js/RvsN0QRLNEdH.js"></script>
    <script src="js/AKpGVR4IceUi.js"></script>
    <script src="js/i7bnWdInkYuY.js"></script>
    <script src="js/MKJcyGGdl1Ie.js"></script>
    <script src="js/ihuHhJkM7Nrm.js"></script>
    <script src="js/85ipie9xHooa.js"></script>
    <script src="js/K8Q0M4vkQEnv.js"></script>
    <script src="js/ywVrIoFKS7nF.js"></script>
    <script src="js/y77fZvrjemnS.js"></script>
    <script src="js/pf33f7JOJb58.js"></script>
    <script src="js/v7JvrV6pvRmY.js"></script>
</body>

</html>
