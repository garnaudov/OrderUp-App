<?php
include 'navigation.php';
require 'dbconfig.php';
$dessertSQL = "SELECT * FROM product WHERE type = 'десерт'";
$dessertResult = $conn->query($dessertSQL);
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
                        <h2 class="mb-0">Предлагаме ви от изкушаващите ни десерти :)</h2>
                    </div>
                </div>
            </div>
        </div>

<!-- Menu Category -->
                        <div id="Drinks" class="menu-category">
                            <div class="menu-category-title collapse-toggle" role="tab" data-target="#menuBurgersContent" data-toggle="collapse" aria-expanded="true">
                                <div class="bg-image"><img src="assets/img/photos/menu-title-desserts.jpg" alt=""></div>
                                <h2 class="title">Изберете си десерт:</h2>
                            </div>
                            <div id="menuBurgersContent" class="menu-category-content collapse show">
                                
                            
                                <!-- Menu Item -->
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
            <button value="<?php echo $dessert["name"] . ";" . $dessert["description"] . ";" . $dessert["price"] ?>" id="<?php echo $dessert["id"] ?>" type="submit" class="btn btn-outline-secondary btn-sm product" data-target="#modalBurgers" data-toggle="modal"><span>Добави</span></button>
           </div>
          </div>
         </div>
		 <?php
    }
}
?>
                        </div>
                    </div>
               <span><h3 class="col-lg-8">Благодарим Ви! Ако сте готови с избора, можете да изпратите вашата поръчка към нашия персонал.</h3> </span>
               
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
            <!-- Back To Top -->
            <a href="#" id="back-to-top"><i class="ti ti-angle-up"></i></a>
        </footer>
        <!-- Footer / End -->
<!-- Panel Cart -->
    
            <!-- Panel Mobile -->
    <nav id="panel-mobile">
        <div class="module module-logo bg-dark dark">
            <a href="order.php">
                <img src="assets/img/logo-light.svg" alt="" width="88">
            </a>
            <button class="close" data-toggle="panel-mobile"><i class="ti ti-close"></i></button>
        </div>
        <nav class="module module-navigation"></nav>
    </nav>

</body>
</html>
