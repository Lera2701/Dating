<?php
require_once "../models/DB.php";
session_start();

class Auth
{
    public $login;
    public $password;

    public function Check()
    {
        if (isset($_POST['login'])) {
            $this->login = $_POST['login'];
            if ($this->login == '') {
                unset($this->login);
            }
        }
        if (isset($_POST['password'])) {
            $this->password = $_POST['password'];
            if ($this->password == '') {
                unset($this->password);
            }
        }
        if (empty($this->login) or empty($this->password)) {
            exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
        }
        $this->login = stripslashes($this->login);
        $this->login = htmlspecialchars($this->login);
        $this->password = stripslashes($this->password);
        $this->password = htmlspecialchars($this->password);
        $this->login = trim($this->login);
        $_SESSION['log'] = $this->login;
        $this->password = trim($this->password);
    }

    public function CheckCred($array)
    {
        foreach ($array as $myrow) {
            if (empty($myrow['passw'])) {
                exit ("Извините, введённый вами login или пароль неверный.");
            } else {
                if ($myrow['passw'] == $this->password) {
                    $_SESSION['login'] = $myrow['email'];
                    $_SESSION['id'] = $myrow['id'];
                    $_SESSION['nick'] = $myrow['nick'];
                    $_SESSION['age'] = $myrow['age'];
                    $_SESSION['city'] = $myrow['city'];
                    include '../views/main.php';
                } else {
                    exit ("Извините, введённый вами login или пароль неверный.");
                }
            }
        }
    }
}