<head>
<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php 
    require '../dbconfig.php'; 
    $allOrders = "SELECT * FROM all_orders";
    $allOrdersResult = $conn->query($allOrders);
    ?>
<!DOCTYPE html>
<html lang="bg">
    <head>
        <style type="text/css">
        .menu-item {
        line-height: 1;
        margin-bottom: 1.5rem;
        margin-left: 1rem;
        padding: 5px;
        border: grey 2px solid;
        }
        </style>
    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Title -->
    <title>Управител - добави продукт</title>
    <!-- CSS Plugins -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/plugins/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" href="../assets/plugins/animate.css/animate.min.css" />
    <link rel="stylesheet" href="../assets/plugins/animsition/dist/css/animsition.min.css" />
    <!-- CSS Icons -->
    <link rel="stylesheet" href="../assets/css/themify-icons.css" />
    <link rel="stylesheet" href="../assets/plugins/font-awesome/css/font-awesome.min.css" />
    <!-- CSS -->
    <link id="theme" rel="stylesheet" href="../assets/css/css/style.css" />
    </head>
    <body>
    <!-- Body Wrapper -->
    <div id="body-wrapper" class="animsition">
        <!-- Header -->
        <header id="header" class="light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!-- Logo -->
                    <div class="module module-logo dark">
                            <img src="../assets/img/logo-light.svg" alt="" width="88">
                    </div>
                </div>
                <div class="col-md-7">
                    <!-- Navigation -->
                    <nav class="module module-navigation left mr-4">
                        <ul id="nav-main" class="nav nav-main">
                            <li>
                                <a href="../index.php">Начало</a>                                
                            </li>
                            <li class="has-dropdown">
                                <a href="../menu-list.php">Меню</a>
                                
                                <div class="dropdown-container">
                                    
                                            <div class="module right">
                                                <a href="../menu-list.php" id="menu-button" class="btn btn-outline-secondary">
                                                    <span >Виж цялото меню</span></a>
                                            </div>                                        
                                    <ul>                                        
                                        <li>
                                            <a href="../menu-list.php#Drinks">Напитки</a>                                            
                                        </li>
                                        <li>
                                            <a href="../menu-list.php#Salads">Салати</a>                                            
                                        </li>
                                        <li>
                                            <a href="../menu-list.php#Burgers">Бургери</a>                                            
                                        </li>
                                        <li>
                                            <a href="../menu-list.php#Pizza">Пици</a>                                            
                                        </li>                                        
                                        
                                        <li>
                                            <a href="../menu-list.php#Desserts">Десерти</a>                                            
                                        </li>
                                        
                                    </ul>
                                    <ul>
                                                
                                            </ul>
                                </div>
                            </li>
                               <li>
                                <a href="../admin/index.php" class="text-right">Поръчки</a>                                
                            </li> 
<li>
                                <a href="add-product.php" class="text-right">Добави продукт</a>                                
                            </li>   							
                        </ul>
                    </nav>
                
                </div>
                
            </div>
        </div>
    </header>
    <!-- Header / End -->
    <!-- Header -->
    <header id="header-mobile" class="light">
        <div class="module module-nav-toggle">
            <a href="#" id="nav-toggle" data-toggle="panel-mobile"><span></span><span></span><span></span><span></span></a>
        </div>    
        <div class="module module-logo">
            <a href="#">
                <img src="../assets/img/logo-horizontal-dark.svg" alt="">
            </a>
        </div>
       
        
    </header>
    <!-- Header / End -->
	
    <!-- Content -->
	<br/><br/><br/><br/>
    <div id="content">
	<h3 class="text-center">Добави продукт</h3>
        <!-- Section - Main -->
                        <div class="bg-white p-4 p-md-5 mb-4">
                            <div class="row mb-5">
                                <div class="form-group col-sm-6">
                                    <form action="add-product.php" method="post">
                                        <label>Продукт:</label>
                                        <input type="text" class="form-control" name="name" placeholder="Име на предложението..." required>
                                        </div>
                                            <div class="form-group col-sm-6">
                                                <label>Вид:</label>
                                                <input type="text" class="form-control" name="type" placeholder="Изберете между напитка, салата бургер, пица или десерт..." required>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label>Цена:</label>
                                                <input type="text" class="form-control" name="price" placeholder="в лева..." required>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label>Описание:</label>
                                                <input type="text" class="form-control" name="description" placeholder="Тук можете да опишете ястието...">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label>Изплуващо облаче - директория (не е задължително):</label>
                                                <input type="text" class="form-control" name="imgsrc" placeholder="Тук укажете директорията на туултип-а...">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label>Наименование на изплуващото облаче:</label>
                                                <input type="text" class="form-control" name="tooltip" placeholder="Тук опишете неговото значение...">
                                            </div>
                                        </div>
                                <button type="submit" class="btn btn-outline-secondary btn-lg"><span>Добави</span></button>
                                </form>
</div>
</div>
        <section class="section section-lg bg-light">
        
      
         <!-- Footer -->
		<footer id="footer" class="bg-dark dark">
        
        <div class="container">
            <!-- Footer 1st Row -->
            <div class="footer-first-row row">
                <div class="col-lg-3 text-center">
                    <a href="index.php"><img src="../assets/img/logo-light.svg" alt="" width="88" class="mt-5 mb-5"></a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-muted">Навигация</h5>
                    <ul class="list-posts">
                        
                        <li>
                            <h6><a href="../menu-list.php" class="title">Меню</a></h5>
                        </li>
                        <li>
                            <h6><a href="documentation.php" class="title">Документация</a></h5>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5 col-md-6">
                    <h5 class="text-muted">Документация</h5>
                    <ul class="list-posts">                        
                        <li>
                            <h6><a href="https://drive.google.com/open?id=1MAaJbCfaFhYkmtxJScaZOw5w70WF811s" class="title">Изтегли презентация</a></h5>
                        </li>
                        <li>
                            <h6><a href="https://drive.google.com/open?id=15h-km635Zhy0JXyAPxrAc7mqWyMlIfEc" class="title">Изтегли брошура</a></h5>
                        </li>
                        
                    </ul>
                    
                </div>
            </div>
            <!-- Footer 2nd Row -->
            <div class="footer-second-row">
                <span class="text-muted">Copyright©. Made with love by Georgi Arnaudov.</span>
            </div>
        </div>
    </footer>
    <!-- Footer / End -->
<!-- Panel Mobile -->
    <nav id="panel-mobile">
        <div class="module module-logo bg-dark dark">
                <img src="../assets/img/logo-light.svg" alt="" width="88">
            <button class="close" data-toggle="panel-mobile"><i class="ti ti-close"></i></button>
        </div>
        <nav class="module module-navigation"></nav>
        
    </nav>
        <script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.2/sweetalert2.all.min.js"></script>
<script src="../assets/plugins/tether/dist/js/tether.min.js"></script>
<script src="../assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../assets/plugins/slick-carousel/slick/slick.min.js"></script>
<script src="../assets/plugins/jquery.appear/jquery.appear.js"></script>
<script src="../assets/plugins/jquery.scrollto/jquery.scrollTo.min.js"></script>
<script src="../assets/plugins/jquery.localscroll/jquery.localScroll.min.js"></script>
<script src="../assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="../assets/plugins/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.min.js"></script>
<script src="../assets/plugins/twitter-fetcher/js/twitterFetcher_min.js"></script>
<script src="../assets/plugins/skrollr/dist/skrollr.min.js"></script>
<script src="../assets/plugins/animsition/dist/js/animsition.min.js"></script>
<script>
    $(function() {
        $('[data-tooltip]').tooltip();
    });
    </script>
<!-- JS Core -->
<script src="../assets/js/core.js"></script>
<script src="js/order.js"></script>
        <!-- Footer / End -->
<script src="../js/order.js"></script>
</body>
</html>
<?php 
	
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
 require '../dbconfig.php';
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 if(ISSET($_POST['name']))
	{
		$name = $_POST["name"];
		$type = $_POST["type"];
		$price = $_POST["price"];
		$description = $_POST["description"];
		$imgsrc = $_POST["imgsrc"];
		$tooltip = $_POST["tooltip"];
	
// Attempt insert query execution
$sql = "INSERT INTO product (name, type, price, description, imgsrc, tooltip) VALUES ('$name', '$type', '$price', '$description', '$imgsrc', '$tooltip')";
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
	}
 
// Close connection
mysqli_close($conn);
?>
		