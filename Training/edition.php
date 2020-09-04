<!--<!DOCTYPE HTML>-->
<!--<html>-->
<!--<head>-->
<!---->
<!--    <meta charset="utf-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <link rel="stylesheet" href="css/style.css"/>-->
<!--    <link rel="stylesheet" href="css/ui.css"/>-->
<!--    <link rel="stylesheet" id="scheme-source" href="css/schemes/blue.css" />-->
 <!-- BEGIN PAGE STYLE -->-->
<!--    <link href="plugins/magnific/magnific-popup.min.css" rel="stylesheet">-->
<!--    <link href="plugins/rateit/rateit.css" rel="stylesheet">-->
<!---->
<!--</head>-->
<!--<body>-->
<!---->
<!--<div class="features_items">-->-->
<!--    <div class="chat"></div>-->-->
<!--    <div class="chat"></div>-->-->
<!--    <div class="chat"></div>-->-->
<!--    <div class="chat"></div>-->-->
<!--</div>-->-->
<!---->
<!--<section class="section-ecommerce">-->
<!--    <aside id="aside">-->
<!--        <div class="sidebar-inner">-->
<!--            <div class="categories">-->
<!---->
<!--                <div>-->
<!--                    <div class="panel-group panel-accordion" id="accordion">-->
<!---->
<!--                        <div class="panel panel-default">-->
<!--                            <div class="panel-heading">-->
<!--                                <h4>-->
<!---->
<!--                                    <a class="collapsed" data-toggle="collapse" href="passws.php">-->
<!---->
<!--                                    </a>-->
<!--                                </h4>-->
<!--                            </div>-->
<!--                            <div id="collapseThree" class="panel-collapse collapse">-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="panel panel-default">-->
<!--                            <div class="panel-heading">-->
<!--                                <h4>-->
<!--                                    <a class="collapsed" data-toggle="collapse" href="main.php">-->
<!--                                        Домой-->
<!--                                    </a>-->
<!--                                </h4>-->
<!--                            </div>-->
<!--                            <div id="collapseOne" class="panel-collapse collapse">-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="panel panel-default">-->
<!--                            <div class="panel-heading">-->
<!--                                <h4>-->
<!--                                    <a data-toggle="collapse" href="edition.php">-->
<!--                                        Профиль-->
<!--                                    </a>-->
<!--                                </h4>-->
<!--                            </div>-->
<!--                            <div id="collapseTwo" class="panel-collapse collapse in">-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="panel panel-default">-->
<!--                            <div class="panel-heading">-->
<!--                                <h4>-->
<!--                                    <a class="collapsed" data-toggle="collapse" href="chat.php">-->
<!--                                        <h3>Чаты</h3>-->
<!--                                    </a>-->
<!--                                </h4>-->
<!--                            </div>-->
<!--                            <div id="collapseThree" class="panel-collapse collapse">-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="panel panel-default">-->
<!--                            <div class="panel-heading">-->
<!--                                <h4>-->
<!--                                    <a class="collapsed" data-toggle="collapse" href="index.php">-->
<!--                                        Выйти-->
<!--                                    </a>-->
<!--                                </h4>-->
<!--                            </div>-->
<!--                            <div id="collapseThree" class="panel-collapse collapse">-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </aside>-->
<!--    <div class="items clearfix">-->
<!--        <header class="collection-header clearfix">-->
<!--            <a href="#" class="toggle-aside"><i class="fa fa-bars"></i></a>-->
<!--            <h2>Продолжите общение</h2>-->
<!---->
<!--        </header>-->
<?php
/*<!--        <p><img src="im.jfif"></p>-->
if(!isset($_SESSION['log'])) {session_start();}
include 'PDO.php';
$log = $_SESSION['log'];
$result = $dbs->query("select * from User where email = '$log'");

foreach($result as $row){

    echo "Ваша информация: <br><br>";

    echo "Имя: " . i($row['nick']) . "<br>";
    echo "Возраст: " . i($row['age']) . "<br>";
    echo "Город: " . i($row['city']) . "<br>";
    echo "Логин: " . i($row['email']) . "<br>";
    echo "Пароль: " . i($row['passw']) . "<br>";
    echo "Телефон: " . i($row['phone']) . "<br>";
    echo "Пол: " . i($row['sex']) . "<br>";
    echo "Ориентация: " . i($row['orient']) . "<br>";
    echo "Обо мне: " . i($row['about']) . "<br>";

    $_SESSION['nick'] = i($row['nick']);
    $_SESSION['age'] = i($row['age']);
    $_SESSION['city'] = i($row['city']);
}*/

/*function i($row){
    if (empty($row)) {
        return "Не указано";
    } else {
        return $row;
    }
}*/
//<!---->
//<!--    </div>-->
//<!--</section>-->
//<!---->
//<!--</body>-->
//<!--</html>-->
//<a href='main.php'>Главная страница</a><br>