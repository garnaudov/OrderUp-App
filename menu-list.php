
<?php
include 'navigation.php';
require 'dbconfig.php';

$burgersSQL = "SELECT * FROM product WHERE type = 'бургер'";
$pizzaSQL = "SELECT * FROM product WHERE type = 'пица'";
$dessertSQL = "SELECT * FROM product WHERE type = 'десерт'";
$drinksSQL = "SELECT * FROM product WHERE type = 'напитка'";
$saladSQL = "SELECT * FROM product WHERE type = 'салата'";

$burgerResult = $conn->query($burgersSQL);
$burgerResultModal = $conn->query($burgersSQL);
$pizzaResult = $conn->query($pizzaSQL);
$pizzaResultModal = $conn->query($pizzaSQL);
$dessertResult = $conn->query($dessertSQL);
$drinksResult = $conn->query($drinksSQL);
$saladsResult = $conn->query($saladSQL);
?>


    <!-- Content -->
    <div id="content">
<?php 
    include "reducedPopup.php";
?>
        <!-- Page Title -->
        <div class="page-title bg-dark light">
            <!-- BG Image -->
            <div id="menu-tile" class="bg-image bg-parallax"><img src="assets/img/photos/bg-desk.jpg" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 push-lg-4">
                        <h1 class="mb-0">Нашето меню</h1>
                        <h4 class="text-muted mb-0">Лесно можеш да добавяш продукти към своята поръчка.</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div class="page-content">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-3">
                        <!-- Menu Navigation -->
                        <nav id="menu-navigation" class="stick-to-content" data-local-scroll>
                            <ul class="nav nav-menu bg-dark dark">
                                <li><a href="#Drinks">Напитки</a></li>
                                <li><a href="#Salads">Салати</a></li>
                                <li><a href="#Burgers">Бургери</a></li>                                
                                <li><a href="#Pizza">Пица</a></li>                                
                                <li><a href="#Desserts">Десерти</a></li></ul>                             
                        </nav>
                        
                    </div>
                    <div class="col-md-9">
                        <!-- Menu Category / Drinks -->
                        <div id="Drinks" class="menu-category">
                            <div class="menu-category-title">
                                <div class="bg-image"><img src="assets/img/photos/menu-title-drinks.jpg" alt=""></div>
                                <h2 class="title">Напитки</h2>
                            </div>
                            <div class="menu-category-content">
                               <?php
if ($drinksResult->num_rows > 0) {
// output data of each row
while($drink = $drinksResult->fetch_assoc()) 
{
        ?>
		 <div class="menu-item menu-list-item">
           <div class="row align-items-center">
           <div class="col-sm-6 mb-2 mb-sm-0">
               <h3 class="mb-0"><?php echo $drink["name"]?></h3>
               <span class="text-muted text-sm"> <?php echo $drink["description"]?> </span>

              </div>
            <div class="col-sm-6 text-sm-right">  
              <img data-tooltip data-placement="right" title="<?php echo $drink["tooltip"]?>" src="<?php echo $drink["imgsrc"]?>" width="26" height="26">
            <span class="text-md mr-4"><span class="text-muted"></span><?php echo $drink["price"]?> лв. </span>

			<button value="<?php echo $drink["name"] . ";" . $drink["description"] . ";" . $drink["price"] ?>" id="<?php echo $drink["id"] ?>" type="submit" class="btn btn-outline-secondary btn-sm product" data-target="#modalBurgers" data-toggle="modal"><span>Добави</span></button>

           </div>
          </div>
         </div>	 
        <?php
            }
        }
        ?> 
                            </div>
                        </div>
                        
                        <!-- Menu Category / Salads -->
                        <div id="Salads" class="menu-category">
                            <div class="menu-category-title">
                                <div class="bg-image"><img src="assets/img/photos/menu-title-salads.jpg" alt=""></div>
                                <h2 class="title">Салати</h2>
                            </div>
                            <div class="menu-category-content">
                               <?php
                                if ($saladsResult->num_rows > 0) {
                                // output data of each row
                                while($salad = $saladsResult->fetch_assoc()) 
                                {
                                ?>
		 <div class="menu-item menu-list-item">
           <div class="row align-items-center">
           <div class="col-sm-6 mb-2 mb-sm-0">
               <h3 class="mb-0"><?php echo $salad["name"]?></h3>
               <span class="text-muted text-sm"> <?php echo $salad["description"]?> </span>
            </div>
                <div class="col-sm-6 text-sm-right">  
              <img data-tooltip data-placement="right" title="<?php echo $salad["tooltip"]?>" src="<?php echo $salad["imgsrc"]?>" width="26" height="26">
            <span class="text-md mr-4"><span class="text-muted"></span><?php echo $salad["price"]?> лв. </span>
			<button value="<?php echo $salad["name"] . ";" . $salad["description"] . ";" . $salad["price"] ?>" id="<?php echo $salad["id"] ?>" type="submit" class="btn btn-outline-secondary btn-sm product" data-target="#modalBurgers" data-toggle="modal"><span>Добави</span></button>

            </div>
            </div>
         </div>	 
                        <?php
                            }
                        }
                        ?> 
                            </div>
                        </div>
                        <!-- Menu Category / Burgers -->
                        <div id="Burgers" class="menu-category">
                            <div class="menu-category-title">
                                <div class="bg-image"><img src="assets/img/photos/menu-title-burgers.jpg" alt=""></div>
                                <h2 class="title">Бургери</h2>
                            </div>
                            <div class="menu-category-content">
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
                        <!-- Menu Category / Pizza -->
                        <div id="Pizza" class="menu-category">
                            <div class="menu-category-title">
                                <div class="bg-image"><img src="assets/img/photos/menu-title-pizza.jpg" alt=""></div>
                                <h2 class="title">Пица</h2>
                            </div>
                            <div class="menu-category-content">
                            <?php
                            if ($pizzaResult->num_rows > 0) {
                            // output data of each row
                            while($pizza = $pizzaResult->fetch_assoc()) {
                            ?>

		   <div class="menu-item menu-list-item">
           <div class="row align-items-center">
           <div class="col-sm-6 mb-2 mb-sm-0">
               <h3 class="mb-0"><?php echo $pizza["name"]?> </h3>
               <span class="text-muted text-sm"> <?php echo $pizza["description"]?> </span>
           </div>
           <div class="col-sm-6 text-sm-right">
            <img data-tooltip data-placement="right" title="<?php echo $pizza["tooltip"]?>" src="<?php echo $pizza["imgsrc"]?>" width="26" height="26">
           <span class="text-md mr-4"><span class="text-muted"></span><?php echo $pizza["price"]?> лв. </span>
            <button value="<?php echo $pizza["name"] . ";" . $pizza["description"] . ";" . $pizza["price"] ?>" id="<?php echo $pizza["id"] ?>" type="submit" class="btn btn-outline-secondary btn-sm pizza product" data-target="#modalBurgers" data-toggle="modal"><span>Добави</span></button>
           </div>
          </div>
         </div>
                        <?php
                                }
                            }

                            ?>
                            </div>
                        </div>
                        
                        <!-- Menu Category / Desserts -->
                        <div id="Desserts" class="menu-category">
                            <div class="menu-category-title">
                                <div class="bg-image"><img src="assets/img/photos/menu-title-desserts.jpg" alt=""></div>
                                <h2 class="title">Десерти</h2>
                            </div>
                            <div class="menu-category-content">
                        <?php
                        if ($dessertResult->num_rows > 0) {
                        // output data of each row
                        while($dessert = $dessertResult->fetch_assoc()) {
                        ?>
                                <div class="menu-item menu-list-item">
                                <div class="row align-items-center">
                                <div class="col-sm-6 mb-2 mb-sm-0">
                                    <h3 class="mb-0"><?php echo $dessert["name"]?> </h3>
                                    <span class="text-muted text-sm"> <?php echo $dessert["description"]?> </span>
                                </div>
                                <div class="col-sm-6 text-sm-right">
                                <img data-tooltip data-placement="right" title="<?php echo $dessert["tooltip"]?>" src="<?php echo $dessert["imgsrc"]?>" width="26" height="26">
                                <span class="text-md mr-4"><span class="text-muted"></span><?php echo $dessert["price"]?> лв. </span>
                                    <button value="<?php echo $dessert["name"] . ";" . $dessert["description"] . ";" . $dessert["price"] ?>" id="<?php echo $dessert["id"] ?>" type="submit" class="btn btn-outline-secondary btn-sm product drinks-popup" data-target="#modalBurgers" data-toggle="modal"><span>Добави</span></button>
                                </div>
                                </div>
                                </div>
                                <?php
                                    }
                                }

                                ?>
                                
                    </div>
                    </div>
                    <style type="text/css">
                        .hidden-inputs {
                            display: none;
                        }
                    </style>
            <?php 
                    include "cart.php";
                    include "footer.php";
            ?>
                <!-- Footer / End -->

                </div>
    <!-- Content / End -->
            <!-- Panel Mobile -->
    <nav id="panel-mobile">
        <div class="module module-logo bg-dark dark">
                <img src="assets/img/logo-light.svg" alt="" width="88">
            <button class="close" data-toggle="panel-mobile"><i class="ti ti-close"></i></button>
        </div>
        <nav class="module module-navigation"></nav>
        
    </nav>

    <!-- Body Overlay -->
    <div id="body-overlay"></div>
</div>
</body>

</html>
        <?php 
        $conn->close(); 
        ?>