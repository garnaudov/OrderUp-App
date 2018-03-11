<?php
include 'navigation.php';
require 'dbconfig.php';
$pizza = "SELECT * FROM product WHERE type = 'пица'";
$pizzaResult = $conn->query($pizza);
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
                        <h2 class="mb-0">Предлагаме ви от нашите току-що изпечени пици :)</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu Category -->
                            <div id="Drinks" class="menu-category">
                            <div class="menu-category-title collapse-toggle" role="tab" data-target="#menuBurgersContent" data-toggle="collapse" aria-expanded="true">
                                <div class="bg-image"><img src="assets/img/photos/menu-title-pizza.jpg" alt=""></div>
                                <h2 class="title">Изберете си пица:</h2>
                            </div>
                            <div id="menuBurgersContent" class="menu-category-content collapse show">
                                
                            <!-- Menu Item -->
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
               <span><h3 class="col-lg-8">Нека завършим с някой от изкушаващите ни <a href="order-form-desserts.php"><u>десерти</u></a> ;)</h3> </span>
               
    </div> 
    <div class="module right">
        <a href="order-form-desserts.php" id="menu-button-next" class="btn btn-outline-danger">
            <span >Десерти</span></a>
    </div> 
    
    <a href="#menu-list.php" id="menu-button" class="btn btn-outline-secondary">
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

</body>
</html>
