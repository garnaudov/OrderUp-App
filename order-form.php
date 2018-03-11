<?php
include 'navigation.php';
require 'dbconfig.php';
$drinksSQL = "SELECT * FROM product WHERE type = 'напитка'";
$drinksResult = $conn->query($drinksSQL);
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
                        <h2 class="mb-0">Нека да започнем с нещо за пиене</h2>
                    </div>
                </div>
            </div>
        </div>

<!-- Menu Category / Drinks -->
                        <div id="Drinks" class="menu-category">
                            <div class="menu-category-title collapse-toggle" role="tab" data-target="#menuDrinksContent" data-toggle="collapse" aria-expanded="true">
                                <div class="bg-image"><img src="assets/img/photos/menu-title-drinks.jpg" alt=""></div>
                                <h2 class="title">Изберете напитка</h2>
                            </div>
                            <div id="menuDrinksContent" class="menu-category-content collapse show">
                                <!-- Menu Item -->
                                 <?php
if ($drinksResult->num_rows > 0) {
// output data of each row
while($drink = $drinksResult->fetch_assoc()) 
{
?>
		 <div class="menu-item menu-list-item">
           <div class="row align-items-center">
           <div class="col-sm-6 mb-2 mb-sm-0">
               <h3 class="mb-0 drink-name"><?php echo $drink["name"]?></h3>
               <span class="text-muted text-sm drink-description"> <?php echo $drink["description"]?> </span>
            </div>
            <div class="col-sm-6 text-sm-right">  
              <img data-tooltip data-placement="right" title="<?php echo $drink["tooltip"]?>" src="<?php echo $drink["imgsrc"]?>" width="26" height="26">
            <span value="" class="text-md mr-4 drink-price"><span class="text-muted"></span><?php echo $drink["price"]?> лв. </span>
			<button value="<?php echo $drink["name"] . ";" . $drink["description"] . ";" . $drink["price"] ?>" id="<?php echo $drink["id"] ?>" type="submit" class="btn btn-outline-secondary btn-sm product drinks-popup" data-target="#modalBurgers" data-toggle="modal"><span>Добави</span></button>

           </div>
          </div>
         </div>	 
                <?php
                    }
                }
                ?> 
                                
                        </div>
                    </div>
               <span><h3 class="col-lg-8">Готови ли сте с избора си? :)</h3> </span>

               
                </div> 
                <div class="module right">
                    <a href="order-form-salads.php" id="menu-button-next" class="btn btn-outline-success">
                        <span >Защо не преминем към салатите?</span></a>
                </div> 

                <a href="menu-list.php" id="menu-button" class="btn btn-outline-secondary">
                    <span>Виж цялото меню</span></a></br></br>
                
                <div class="module right">
                    <a href="#"  id="menu-button-finish" data-toggle="panel-cart" class="btn btn-outline-warning">
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
    </body>

</html>
