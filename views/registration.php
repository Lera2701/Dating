<!DOCTYPE html>
<html>
<head>
    <title>Регистрация</title>
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
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form action="../models/addition.php" method="post">
                <span class="login100-form-title p-b-26">
						Регистрация
					</span>
                <span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="nick">
                    <span class="focus-input100" data-placeholder="Ваше имя:"></span>
                </div>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="number" name="age">
                    <span class="focus-input100" data-placeholder="Ваш возраст:"></span>
                </div>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="login">
                    <span class="focus-input100" data-placeholder="Ваш логин:"></span>
                </div>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="password" name="password">
                    <span class="focus-input100" data-placeholder="Ваш пароль:"></span>
                </div>


                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Присоединиться
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
