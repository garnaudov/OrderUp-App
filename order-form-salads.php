<?php
include 'navigation.php';
require 'dbconfig.php';
$saladSQL = "SELECT * FROM product WHERE type = 'салата'";
$saladsResult = $conn->query($saladSQL);
?>

    <!-- Content -->
    <div id="content">
<?php
        include "reducedPopup.php";
    ?> 

<div class="page-title bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 push-lg-4">
                        <h2 class="mb-0">Ето ги и нашите салати :)</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Menu Category / Drinks -->
                        <div id="Drinks" class="menu-category">
                            <div class="menu-category-title collapse-toggle" role="tab" data-target="#menuDrinksContent" data-toggle="collapse" aria-expanded="true">
                                <div class="bg-image"><img src="assets/img/photos/menu-title-salads.jpg" alt=""></div>
                                <h2 class="title">Изберете си салата</h2>
                            </div>
                            <div id="menuDrinksContent" class="menu-category-content collapse show">
                                <!-- Shopska Salad -->
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
            <span class="text-md mr-4"><span class="text-muted"></span><?php echo $salad["price"]?> лв.</span>
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
               <span><h3 class="col-lg-8">Време е за основно. Предлагаме ви свеж <a href="order-form-burgers.php"><u>бургер</u></a> или току-що изпечена <a href="order-form-pizza.php"><u>пица</u></a></h3> </span>

               
            </div> 
            <div class="module right">
                <a href="order-form-burgers.php" id="menu-button-next" class="btn btn-outline-warning">
                    <span >Бургери</span></a>
            </div> 
            <div class="module right">
                <a href="order-form-pizza.php" id="menu-button-next" class="btn btn-outline-warning">
                    <span >Пици</span></a>
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


            <!-- Panel Mobile -->
    <nav id="panel-mobile">
        <div class="module module-logo bg-dark dark">
                <img src="assets/img/logo-light.svg" alt="" width="88">
            <button class="close" data-toggle="panel-mobile"><i class="ti ti-close"></i></button>
        </div>
        <nav class="module module-navigation"></nav>
        
    </nav>
</body>
</html>
