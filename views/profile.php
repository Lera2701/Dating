<!DOCTYPE html>
<html>
<head>
    <title>Профиль</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="../zvendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../zvendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../zvendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../zvendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../zvendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../zvendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!--===============================================================================================-->
    <style type="text/css">
        P.fig {
            text-align: center;
            margin-bottom: 30px;
        }
    </style>

</head>
<body>

<div class="limiter">

    <div class="container-login100">
        <div class="wrap-login100">
            <p class="fig"><img src="../Training/im.jfif"></p>
            <span class="login100-form-title p-b-26">
						Ваша информация: <br>
					</span>
            <?php
            require_once '../controllers/ControllerProfile.php';
                $obj = new ControllerProfile();
                $obj->get_data();
            ?>

            <div class="container-login100-form-btn">
                <div class="wrap-login100-form-btn">
                    <div class="login100-form-bgbtn"></div>
                    <button class="login100-form-btn ">
                        <a href="main.php">Назад</a>
                    </button>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
