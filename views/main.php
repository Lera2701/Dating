<!DOCTYPE HTML>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="stylesheet" href="../css/ui.css"/>
    <link rel="stylesheet" id="scheme-source" href="../css/schemes/blue.css" />
    <!-- BEGIN PAGE STYLE -->
    <link href="../zplugins/magnific/magnific-popup.min.css" rel="stylesheet">
    <link href="../zplugins/rateit/rateit.css" rel="stylesheet">
    <!-- END PAGE STYLE -->

</head>


<body>
<header><div class="container>"</div></header>

<?php
include '../models/DB.php';
if(!isset($_SESSION['log'])) {session_start();}
$login = $_SESSION['log'];

$result = $dbs->query("select nick, age from User where email!='$login' and email!='admi'");
$array = array();
while($data = $result->fetchArray(SQLITE3_ASSOC)){
    $array[] = $data;
}
$count = 0;
?>

<!-- Begin Ecommerce Products List -->
<section class="section-ecommerce">
    <aside id="aside">
        <div class="sidebar-inner">
            <div class="categories">

                <div>
                    <div class="panel-group panel-accordion" id="accordion">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>

                                    <a class="collapsed" data-toggle="collapse" href="../views/passws.php">
                                        <?php
                                        if ($_SESSION['log'] == "admi") {
                                            echo "<br>Учетные записи<br><br>";
                                        }
                                        ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">

                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>
                                    <a class="collapsed" data-toggle="collapse" href="main.php">
                                        <h3>Домой</h3>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">

                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>
                                    <a data-toggle="collapse" href="../views/profile.php">
                                        Профиль
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse in">

                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>
                                    <a class="collapsed" data-toggle="collapse" href="../views/chat.php">
                                        Чаты
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">

                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>
                                    <a class="collapsed" data-toggle="collapse" href="../../views/index.php">
                                        Выйти
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </aside>
    <div class="items clearfix">
        <header class="collection-header clearfix">
            <h2>Найти новые знакомства</h2>
        </header>
        <div class="features_items">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-image-wrapper">
                    <div class="single-product text-center">
                        <div class="product-img">
                                <img src="../images/1.jpg" />
                            <div class="product-overlay">
                                <div class="overlay-content">
                                    <div class="row">
                                        <div class="col-md-6 product-quickview" data-mfp-src="../../common-files/images/ecommerce/bikini1.jpg" data-title="Product Title" data-price="59.99" data-description="Directional, exciting and diverse, Collection makes and breaks the fashion rules. Scouring the globe for inspiration, our London based Design Team is inspired by fashion's most covetable trends; providing you with a cutting edge wardrobe season upon season." data-rating="4.6">
                                            <i class="line-icon-eye"></i>
                                            <p>Заблокировать</p>
                                        </div>
                                        <div class="col-md-6 product-wishlist">
                                            <i class="line-icon-heart"></i>
                                            <p>Нравится</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p> <?php if (!empty($array[$count]['nick'])) {echo $array[$count++]['nick'];} ?> </p>
                        <div class="product-detail">
                            <div class="pull-left">
                                <p class="price"><?php if (!empty($array[$count]['age'])) {echo $array[$count++]['age'];} ?></p>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="add-to-cart pull-right">Написать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-image-wrapper">
                    <div class="single-product text-center">
                        <div class="product-img">
                            <a href="ecommerce-product-details.html">
                                <img src="../images/2.jpg" />
                            </a>
                            <div class="product-overlay">
                                <div class="overlay-content">
                                    <div class="row">
                                        <div class="col-md-6 product-quickview" data-mfp-src="../../common-files/images/ecommerce/bikini2.jpg" data-title="Product Title" data-price="46.50" data-description="Directional, exciting and diverse, Collection makes and breaks the fashion rules. Scouring the globe for inspiration, our London based Design Team is inspired by fashion's most covetable trends; providing you with a cutting edge wardrobe season upon season." data-rating="4.2">
                                            <i class="line-icon-eye"></i>
                                            <p>Заблокировать</p>
                                        </div>
<!--                                        <div class="col-md-6 product-wishlist">-->
<!--                                            <i class="line-icon-heart"></i>-->
<!--                                            <p>Комментарии</p>-->
<!--                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p><?php if (!empty($array[$count]['nick'])) {echo $array[$count++]['nick'];} ?></p>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="price"><?php if (!empty($array[$count]['age'])) {echo $array[$count++]['age'];} ?></p>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="add-to-cart pull-right">Написать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-image-wrapper">
                    <div class="single-product text-center">
                        <div class="product-img">
                            <a href="ecommerce-product-details.html">
                                <img src="../images/3.jpg" alt="bikini 3" />

                            </a>
                            <div class="product-overlay">
                                <div class="overlay-content">
                                    <div class="row">
                                        <div class="col-md-6 product-quickview" data-mfp-src="../../common-files/images/ecommerce/bikini3.jpg" data-title="Product Title" data-price="48.89" data-description="Directional, exciting and diverse, Collection makes and breaks the fashion rules. Scouring the globe for inspiration, our London based Design Team is inspired by fashion's most covetable trends; providing you with a cutting edge wardrobe season upon season." data-rating="3.8">
                                            <i class="line-icon-eye"></i>
                                            <p>Заблокировать</p>
                                        </div>
<!--                                        <div class="col-md-6 product-wishlist">-->
<!--                                            <i class="line-icon-heart"></i>-->
<!--                                            <p>Wishlist</p>-->
<!--                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p><?php if (!empty($array[$count]['nick'])) {echo $array[$count++]['nick'];} ?></p>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="price"><?php if (!empty($array[$count]['age'])) {echo $array[$count++]['age'];} ?></p>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="add-to-cart pull-right">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-image-wrapper">
                    <div class="single-product text-center">
                        <div class="product-img">
                            <a href="ecommerce-product-details.html">
                                <img src="../images/4.jpg" alt="bikini 4" />
                            </a>
                            <div class="product-overlay">
                                <div class="overlay-content">
                                    <div class="row">
                                        <div class="col-md-6 product-quickview" data-mfp-src="../../common-files/images/ecommerce/bikini4.jpg" data-title="Product Title" data-price="59.99" data-description="Directional, exciting and diverse, Collection makes and breaks the fashion rules. Scouring the globe for inspiration, our London based Design Team is inspired by fashion's most covetable trends; providing you with a cutting edge wardrobe season upon season." data-rating="4.1">
                                            <i class="line-icon-eye"></i>
                                            <p>Заблокировать</p>
                                        </div>
<!--                                        <div class="col-md-6 product-wishlist">-->
<!--                                            <i class="line-icon-heart"></i>-->
<!--                                            <p>Wishlist</p>-->
<!--                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p><?php if (!empty($array[$count]['nick'])) {echo $array[$count++]['nick'];} ?></p>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="price"><?php if (!empty($array[$count]['age'])) {echo $array[$count++]['age'];} ?></p>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="add-to-cart pull-right">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-image-wrapper">
                    <div class="single-product text-center">
                        <div class="product-img">
                            <a href="ecommerce-product-details.html">
                                <img src="../images/7.jpg" alt="bikini 5" />
                            </a>
                            <div class="product-overlay">
                                <div class="overlay-content">
                                    <div class="row">
                                        <div class="col-md-6 product-quickview" data-mfp-src="../../common-files/images/ecommerce/bikini5.jpg" data-title="Product Title" data-price="39.90" data-description="Directional, exciting and diverse, Collection makes and breaks the fashion rules. Scouring the globe for inspiration, our London based Design Team is inspired by fashion's most covetable trends; providing you with a cutting edge wardrobe season upon season." data-rating="4.8">
                                            <i class="line-icon-eye"></i>
                                            <p>Заблокировать</p>
                                        </div>
<!--                                        <div class="col-md-6 product-wishlist">-->
<!--                                            <i class="line-icon-heart"></i>-->
<!--                                            <p>Wishlist</p>-->
<!--                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p><?php if (!empty($array[$count]['nick'])) {echo $array[$count++]['nick'];} ?></p>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="price"><?php if (!empty($array[$count]['age'])) {echo $array[$count++]['age'];} ?></p>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="add-to-cart pull-right">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-image-wrapper">
                    <div class="single-product text-center">
                        <div class="product-img">
                            <a href="ecommerce-product-details.html">
                                <img src="../images/6.jpg" alt="bikini 6" />

                            </a>
                            <div class="product-overlay">
                                <div class="overlay-content">
                                    <div class="row">
                                        <div class="col-md-6 product-quickview" data-mfp-src="../../common-files/images/ecommerce/bikini6.jpg" data-title="Product Title" data-price="52.25" data-description="Directional, exciting and diverse, Collection makes and breaks the fashion rules. Scouring the globe for inspiration, our London based Design Team is inspired by fashion's most covetable trends; providing you with a cutting edge wardrobe season upon season." data-rating="4.5">
                                            <i class="line-icon-eye"></i>
                                            <p>Заблокировать</p>
                                        </div>
<!--                                        <div class="col-md-6 product-wishlist">-->
<!--                                            <i class="line-icon-heart"></i>-->
<!--                                            <p>Wishlist</p>-->
<!--                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p><?php if (!empty($array[$count]['nick'])) {echo $array[$count++]['nick'];} ?></p>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="price"><?php if (!empty($array[$count]['age'])) {echo $array[$count++]['age'];} ?></p>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="add-to-cart pull-right">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-image-wrapper">
                    <div class="single-product text-center">
                        <div class="product-img">
                            <a href="ecommerce-product-details.html">
                                <img src="../images/5.png" alt="bikini 7" />
                            </a>
                            <div class="product-overlay">
                                <div class="overlay-content">
                                    <div class="row">
                                        <div class="col-md-6 product-quickview" data-mfp-src="../../common-files/images/ecommerce/bikini7.jpg" data-title="Product Title" data-price="45.89" data-description="Directional, exciting and diverse, Collection makes and breaks the fashion rules. Scouring the globe for inspiration, our London based Design Team is inspired by fashion's most covetable trends; providing you with a cutting edge wardrobe season upon season." data-rating="4.1">
                                            <i class="line-icon-eye"></i>
                                            <p>Заблокировать</p>
                                        </div>
<!--                                        <div class="col-md-6 product-wishlist">-->
<!--                                            <i class="line-icon-heart"></i>-->
<!--                                            <p>Wishlist</p>-->
<!--                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p><?php if (!empty($array[$count]['nick'])) {echo $array[$count++]['nick'];} ?></p>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="price"><?php if (!empty($array[$count]['age'])) {echo $array[$count++]['age'];} ?></p>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="add-to-cart pull-right">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-image-wrapper">
                    <div class="single-product text-center">
                        <div class="product-img">
                            <a href="ecommerce-product-details.html">
                                <img src="../images/8.jpg" alt="bikini 8" />
                            </a>
                            <div class="product-overlay">
                                <div class="overlay-content">
                                    <div class="row">
                                        <div class="col-md-6 product-quickview" data-mfp-src="../../common-files/images/ecommerce/bikini8.jpg" data-title="Product Title" data-price="46.99" data-description="Directional, exciting and diverse, Collection makes and breaks the fashion rules. Scouring the globe for inspiration, our London based Design Team is inspired by fashion's most covetable trends; providing you with a cutting edge wardrobe season upon season." data-rating="4.5">
                                            <i class="line-icon-eye"></i>
                                            <p>Заблокировать</p>
                                        </div>
<!--                                        <div class="col-md-6 product-wishlist">-->
<!--                                            <i class="line-icon-heart"></i>-->
<!--                                            <p>Wishlist</p>-->
<!--                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p><?php if (!empty($array[$count]['nick'])) {echo $array[$count++]['nick'];} ?></p>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="price"><?php if (!empty($array[$count]['age'])) {echo $array[$count++]['age'];} ?></p>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="add-to-cart pull-right">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
            <div class="pagination">
                <ul>
                    <li class="active"><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li class="disabled"><a href="">...</a></li>
                    <li><a href="">12</a></li>
                </ul>
            </div>
        </div><!--features_items-->
    </div>
</section>
<!-- End Ecommerce Products List -->

</body>
</html>