<?php
include 'navigation.php';
require 'dbconfig.php';
if (isset($_POST["hide-description"]) && isset($_POST["hide-price"]))
{
	$orderDescription=$_POST["hide-description"];
	$orderPrice=$_POST["hide-price"];
	$tableNo = $_POST["tableNo"];
	
	if(strlen($orderDescription) > 0 && strlen($orderPrice))
	{
		mysqli_query($conn,"INSERT INTO 
							all_orders (description,price,tableNo)
							VALUES ('$orderDescription','$orderPrice','$tableNo')");
				
		
	}
}
?>
    <!-- Content -->
    <div id="content">
        <?php
        include "popup.php";
    ?>
<!-- Page Title -->
        <div class="page-title bg-dark light">
            <!-- BG Image -->
            <div class="bg-image bg-parallax"><img src="assets/img/photos/bg-desk.jpg" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 push-lg-4">
                        <a href="order-form.php"><h1 class="btn btn-link" id="OrderNowButton">Поръчай</h1></a>
                        <h4 class="text-muted mb-0">Направи своята поръчка бързо и лесно!</h4>
                    </div>
                </div>
            </div>
        </div>
<!-- Section - Steps -->
        <section class="section section-extended left dark">
            <div class="container bg-dark">
                <div class="row">
                    <div class="col-md-4">
                        <!-- Step -->
                        <div class="feature feature-1 mb-md-0">
                            <div class="feature-icon icon icon-primary"><i class="ti ti-hand-point-up"></i></div>
                            <div class="feature-content">
                                <h4 class="mb-2"><a href="order-form.php">Избери си</a></h4>
                                <p class="text-muted mb-0">Направи своята поръчка удобно посредством <u><a href="order-form.php">страницата за поръчки</a></u>. Разбира се, 
                                можеш да избереш директно от <u><a href="menu-list.php">нашето меню</a></u>.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Step -->
                        <div class="feature feature-1 mb-md-0">
                            <div class="feature-icon icon icon-primary"><i class="ti ti-timer"></i></div>
                            <div class="feature-content">
                                <h4 class="mb-2">Поръчката се изпълнява</h4>
                                <p class="text-muted mb-0">Спестяваш си излишно чакане</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Step -->
                        <div class="feature feature-1 mb-md-0">
                            <div class="feature-icon icon icon-primary"><i class="ti ti-check"></i></div>
                            <div class="feature-content">
                                <h4 class="mb-2">Заповядай! Готови сме!</h4>
                                <p class="text-muted mb-3">Сега остава само да се насладиш!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 <!-- Section - Menu -->
        <section class="section pb-0">
            <div class="container ">
                <h1 class="mb-6">Нашето меню</h1>
            </div>
            <div class="menu-sample-carousel carousel inner-controls " data-slick='{
                "dots": true,
                "slidesToShow": 3,
                "slidesToScroll": 1,
                "infinite": true,
                "responsive": [
                    {
                        "breakpoint": 991,
                        "settings": {
                            "slidesToShow": 2,
                            "slidesToScroll": 1
                        }
                    },
                    {
                        "breakpoint": 690,
                        "settings": {
                            "slidesToShow": 1,
                            "slidesToScroll": 1
                        }
                    }
                ]
            }'>
            <!-- Menu Sample -->
                <div class="menu-sample">
                    <a href="menu-list.php#Drinks">
                        <img src="assets/img/photos/menu-sample-drinks.jpg" alt="" class="image">
                        <h3 class="title">Напитки</h3>
                    </a>
                </div>
                <!-- Menu Sample -->
                <div class="menu-sample">
                    <a href="menu-list.php#Salads">
                        <img src="assets/img/photos/menu-sample-salads.jpg" alt="" class="image">
                        <h3 class="title">Салати</h3>
                    </a>
                </div>
                <!-- Menu Sample -->
                <div class="menu-sample">
                    <a href="menu-list.php#Burgers">
                        <img src="assets/img/photos/menu-sample-burgers.jpg" alt="" class="image">
                        <h3 class="title">Бургери</h3>
                    </a>
                </div>
                <!-- Menu Sample -->
                <div class="menu-sample">
                    <a href="menu-list.php#Pizza">
                        <img src="assets/img/photos/menu-sample-pizza.jpg" alt="" class="image">
                        <h3 class="title">Пици</h3>
                    </a>
                </div>
                               
                <!-- Menu Sample -->
                <div class="menu-sample">
                    <a href="menu-list.php#Desserts">
                        <img src="assets/img/photos/menu-sample-dessert.jpg" alt="" class="image">
                        <h3 class="title">Десерти</h3>
                    </a>
                </div>
                
            </div></br></br>
    <?php 
        include "cart.php";
    ?>  
        <!-- Footer -->
    <?php 
        include "footer.php";
    ?>
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
        </section>
        <!-- JS Plugins -->
</body>
</html>