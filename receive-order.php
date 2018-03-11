<?php
include 'navigation.php';
require 'dbconfig.php';

$allOrders = "SELECT * FROM all_orders where isStarted = 0";
$allOrdersResult = $conn->query($allOrders);
?>

    <!-- Content -->
	<br/><br/><br/><br/><br/><br/><br/><br/>
    <div id="content">
        <!-- Section - Main -->
		<h1 class="text-center">Незапочнати поръчки</h1>
        <section class="section section-lg bg-light">
            <div class="row no-gutters">
                <div class="col-md-10 push-md-1" role="tablist">
					<div class="padded collapse show">
                        <div  class="row menuBurgersContent gutters-sm">
                                     <!-- Received order -->
                                    
                        <?php

                        if ($allOrdersResult->num_rows > 0) {
                        // output data of each row
                        while($order = $allOrdersResult->fetch_assoc()) 
                        {
                        $description = $order["description"];
                        $price = $order["price"];
                        $date = $order["createdDate"];
                        $tableNo = $order["tableNo"];
                        
                        $descriptionProducts = preg_split("/[;]+/", $description);
 /* 
  0 => string 'Шопска салата - 400 гр. - Домат, краставици, зелени чушки, червен лук, сирене, стръкче магданоз' (length=165)
  1 => string ' Цезар с пиле - 350 гр. - Пилешко филе, салата айсберг, рукола, сос цезар с аншоа, крутони' (length=153)
  2 => string ' Бургер с пуешко - 220 гр. - Пуешко филе, чушка, песто, домат, ементал' (length=117)
  3 => string ' ' (length=1)
 */
                            $descrProductsArrayLenght = sizeof($descriptionProducts);
                            $product = [];
                            $productLenght = sizeof($product);
                            ?>
                                <!-- Received order -->
                                    <div class="col-lg-4 col-6 ">                                       
                                        <div class="menu-item menu-grid-item">
                                                <?php 
													for ($i = 0; $i <= $descrProductsArrayLenght-2; $i++) {
													$product[$i] = preg_split("/[-]+/", $descriptionProducts[$i]);
													$productLenght = sizeof($product[$i]); ?>
													 <h3 class="mb-0"><?php echo $product[$i][0]; ?> </h3>
													 <h3 class="text-muted text-sm"><?php echo $product[$i][1]; ?> </h3>
														<?php
														for ($j = 2; $j <= $productLenght-1 ; $j++)
														{
														?>
															<span class="text-muted text-sm"><?php echo $product[$i][$j]; ?></span> 
														<?php
														}
														?>																					
												<?php
												}
												
												?>
												<div><h5 class="mb-0">Маса: <?php echo $tableNo ?></h5></div>
														<span class="text-muted text-sm"><?php echo $date ?></span>   
														<div class="row align-items-center mt-4">
															<div class="col-sm-5">
																<div class="text-md mr-5"><span class="text-muted">Цена:<?php echo $price ?> .лв</span>
																</div>
															</div>
														</div>
										            </div>
                                                 </div>
                                    <?php                                  
                                    }
                                    }
                                    ?>
                         </div>               
                    </div>          
                </div>
            </div>
	</section>
</div>
        
      
         <!-- Footer -->
        <footer id="footer" class="bg-dark dark">
            
           
                <!-- Footer 2nd Row -->
                <div class="footer-second-row">
                    <span class="text-muted">Copyright GArnaudov 2017©. Made with love by Georgi Arnaudov.</span>
                </div>
            </div>

            <!-- Back To Top -->
            <a href="#" id="back-to-top"><i class="ti ti-angle-up"></i></a>

        </footer>
        <!-- Footer / End -->

        
            

            <!-- Panel Mobile -->
    <nav id="panel-mobile">
        <div class="module module-logo bg-dark dark">
                <img src="assets/img/logo-light.svg" alt="" width="88">
            <button class="close" data-toggle="panel-mobile"><i class="ti ti-close"></i></button>
        </div>
        <nav class="module module-navigation"></nav>
        
    </nav>
        </section>

    <!-- JS Plugins -->
<script src="assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="assets/plugins/tether/dist/js/tether.min.js"></script>
<script src="assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/plugins/slick-carousel/slick/slick.min.js"></script>
<script src="assets/plugins/jquery.appear/jquery.appear.js"></script>
<script src="assets/plugins/jquery.scrollto/jquery.scrollTo.min.js"></script>
<script src="assets/plugins/jquery.localscroll/jquery.localScroll.min.js"></script>
<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="assets/plugins/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.min.js"></script>
<script src="assets/plugins/twitter-fetcher/js/twitterFetcher_min.js"></script>
<script src="assets/plugins/skrollr/dist/skrollr.min.js"></script>
<script src="assets/plugins/animsition/dist/js/animsition.min.js"></script>

<!-- JS Core -->
<script src="assets/js/core.js"></script>

</body>

</html>
<?php 
	$conn->close(); 
?>