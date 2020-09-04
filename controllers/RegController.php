<?php
require_once "../models/DB.php";
session_start();

class Reg
{
    public $nick, $age, $login, $password;

    public function Check()
    {
        if (isset($_POST['nick'])) {
            $this->nick = $_POST['nick'];
            if ($this->nick == '') {
                unset($this->nick);
            }
        }
        if (isset($_POST['age'])) {
            $this->age = $_POST['age'];
            if ($this->age == '') {
                unset($this->age);
            }
        }

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
        if (empty($this->login) or empty($this->password) or empty($this->nick) or empty($this->age)) {
            exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
        }
        $this->login = stripslashes($this->login);
        $this->login = htmlspecialchars($this->login);
        $this->password = stripslashes($this->password);
        $this->password = htmlspecialchars($this->password);
        $this->nick = stripslashes($this->nick);
        $this->nick = htmlspecialchars($this->nick);
        $this->age = stripslashes($this->age);
        $this->age = htmlspecialchars($this->age);
        $this->login = trim($this->login);
        $_SESSION['log'] = $this->login;
        $this->password = trim($this->password);
        $this->nick = trim($this->nick);
        $this->age = trim($this->age);
    }

    public function CheckCred($array)
    {
        foreach ($array as $row) {
            if (!empty($row['id'])) {
                exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
            }
        }
    }

    public function Add($result){
        if ($result == TRUE) {
            include '../views/main.php';
        } else {
            echo "Ошибка! Вы не зарегистрированы.";
        }
    }
}