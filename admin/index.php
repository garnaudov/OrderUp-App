<head>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Title -->
<title>Направете своята поръчка</title>

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


<?php


if(isset($_POST['user']) && isset($_POST['pass']))
{
$user = $_POST['user'];
$pass = $_POST['pass'];

if($user == "admin" && $pass == "orderup")
{
        include "index-admin.php";
}
else
{
echo "Опитайте отново! :)";
            ?>
<!-- Navigation -->
                    <nav class="module module-navigation left mr-4">
                        <ul id="nav-main" class="nav nav-main">
                            <li>
                                <a href="../index.php">&nbsp;&nbsp;&nbsp;&nbsp;Начало</a>                                
                            </li>
                            <li>
                                <a href="../menu-list.php">Меню</a>
                            </li>
                          							
                        </ul>
                    </nav>
            <div class="utility-box">
                            <div class="utility-box-title bg-dark dark">
                                <div>
                                    <span class="icon icon-primary"><i class="ti ti-bookmark-alt"></i></span>
                                    <h4 class="mb-0">Вход за управители</h4>
                                </div>
                            </div>
                            <form action="index.php" id="booking-form" data-validate method="POST">
                                <div class="utility-box-content">
                                    <div class="form-group">
                                        <label>Име</label>
                                        <input type="text" name="user" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Парола</label>
                                        <input type="password" name="pass" class="form-control" required>
                                    </div>
                                    
                                    
                                </div>
                                <button class="utility-box-btn btn btn-secondary btn-block btn-lg btn-submit" name="submit" type="submit">
                                    <span class="description">Влез</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
      <?php
          include "footer.php";

 }
}
else {
      ?>
      <!-- Navigation -->
                    <nav class="module module-navigation left mr-4">
                        <ul id="nav-main" class="nav nav-main">
                            <li>
                                <a href="../index.php">&nbsp;&nbsp;&nbsp;&nbsp;Начало</a>                                
                            </li>
                            <li>
                                <a href="../menu-list.php">Меню</a>                              
                                           
                            </li>
                          							
                        </ul>
                    </nav>
            <div class="utility-box">
                            <div class="utility-box-title bg-dark dark">
                                <div>
                                    <span class="icon icon-primary"><i class="ti ti-bookmark-alt"></i></span>
                                    <h4 class="mb-0">Вход за управители</h4>
                                </div>
                            </div>
                            <form action="index.php"  id="booking-form" data-validate method="POST">
                                <div class="utility-box-content">
                                    <div class="form-group">
                                        <label>Име</label>
                                        <input type="text" name="user" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Парола</label>
                                        <input type="password" name="pass" class="form-control" required>
                                    </div>
                                    
                                    
                                </div>
                                <button class="utility-box-btn btn btn-secondary btn-block btn-lg btn-submit" name="submit" type="submit">
                                    <span class="description">Влез</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
      <?php

}

?>
