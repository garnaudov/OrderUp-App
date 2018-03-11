<?php
include 'navigation.php';
require 'dbconfig.php';

$burgersSQL = "SELECT * FROM product WHERE type = 'бургер'";
$pizzaSQL = "SELECT * FROM product WHERE type = 'пица'";

$burgerResult = $conn->query($burgersSQL);
$pizzaResult = $conn->query($pizzaSQL);
?>
    <!-- Content -->
    <div id="content">

<?php
        include "popup.php";
    ?> 
<div class="page-title bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 push-lg-4">
                        <h2 class="mb-0">Ето ги и нашите свежи бургери :)</h2>
                    </div>
                </div>
            </div>
        </div>

<!-- Menu Category -->
                        <div id="Drinks" class="menu-category">
                            <div class="menu-category-title collapse-toggle" role="tab" data-target="#menuBurgersContent" data-toggle="collapse" aria-expanded="true">
                                <div class="bg-image"><img src="assets/img/photos/menu-title-burgers.jpg" alt=""></div>
                                <h2 class="title">Изберете си бургер</h2>
                            </div>
                            <div id="menuBurgersContent" class="menu-category-content collapse show">
                                
                            <!-- Menu Item -->
							
							<?php
    if ($burgerResult->num_rows > 0) {
    // output data of each row
    while($burger = $burgerResult->fetch_assoc()) 
    {
    ?>
		 <div class="menu-item menu-list-item">
           <div class="row align-items-center">
           <div class="col-sm-6 mb-2 mb-sm-0">
               <h3 class="mb-0"><?php echo $burger["name"]?></h3>
               <span class="text-muted text-sm"> <?php echo $burger["description"]?> </span>
            </div>
            <div class="col-sm-6 text-sm-right">  
            <img data-tooltip data-placement="right" title="<?php echo $burger["tooltip"]?>" src="<?php echo $burger["imgsrc"]?>" width="26" height="26"> 
            <span class="text-md mr-4"><span class="text-muted"></span><?php echo $burger["price"]?> лв. </span>
			<button value="<?php echo $burger["name"] . ";" . $burger["description"] . ";" . $burger["price"] ?>" id="<?php echo $burger["id"] ?>" type="submit" class="btn btn-outline-secondary btn-sm burger product" data-target="#modalBurgers" data-toggle="modal"><span>Добави</span></button>

           </div>
          </div>
         </div>	 
            <?php
                }
            }
            ?>
								
                                
                        </div>
                    </div>
               <span><h3 class="col-lg-8">Нека завършим с някой от изкушаващите ни <a href="order-form-desserts.php"><u>десерти</u></a> ;)</h3> </span>

               
                </div> 
                <div class="module right">
                    <a href="order-form-desserts.php" id="menu-button-next" class="btn btn-outline-danger">
                        <span >Десерти</span></a>
                </div> 
                

                <a href="menu-list.php" id="menu-button" class="btn btn-outline-secondary">
                    <span>Виж цялото меню</span></a></br></br>
                
                <div class="module right">
                    <a href="#" data-toggle="panel-cart" id="menu-button-finish" class="btn btn-outline-warning">
                        <span >Завърши поръчката!</span></a>   

                </div>
                </br></br></br>
                <!-- Content / End -->

            <?php 
                    include "cart.php";
                ?>
            

            <!-- Footer -->
            <?php 
                include "footer.php";
            ?>
                <!-- Footer / End -->

                </footer>
                <!-- Footer / End -->

<!-- Panel Cart -->
    
            <!-- Panel Mobile -->
    <nav id="panel-mobile">
        <div class="module module-logo bg-dark dark">
                <img src="assets/img/logo-light.svg" alt="" width="88">
            <button class="close" data-toggle="panel-mobile"><i class="ti ti-close"></i></button>
        </div>
        <nav class="module module-navigation"></nav>
        
    </nav>

        <!-- Modal / Chikcen Burger -->
        <?php
        if ($burgerResult->num_rows > 0) {
        // output data of each row
        while($burgerInfo = $burgerResult->fetch_assoc()) 
        {?>
            <div class="modal fade" id="modalBurgers" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header modal-header-lg dark bg-dark">
                        <h3 class="modal-title"><?php $burgerInfo["name"] ?></h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>
                    </div>
                    <div class="modal-product-details">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <span class="text-muted"><?php $burgerInfo["description"] ?></span>
                            </div>
                            <div class="col-3 text-lg text-right"><?php $burgerInfo["price"]?> лв</div>
                        </div>
                    </div>
                    <button type="button" onclick="confirmQ()" class="modal-btn btn btn-secondary btn-block btn-lg" data-dismiss="modal"><span>Добави към поръчката</span></button>
                </div>
            </div>
        </div>
        <?php
        $result = $conn->query("SELECT * FROM product;");
        for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row);
        print_r($set);
        ?>
        <?php 
        ;
            }
        }

        ?>
    </body>

</html>
