<?php

class User
{
    private $nick, $age, $city, $email, $passw, $phone, $sex, $orient, $about;

    public function __construct($nick, $age, $city, $email, $passw, $phone, $sex, $orient, $about)
    {
        $this->nick = $nick;
        $this->age = $age;
        $this->city = $city;
        $this->email = $email;
        $this->passw = $passw;
        $this->phone = $phone;
        $this->sex = $sex;
        $this->orient = $orient;
        $this->about = $about;
    }

    public function get_info(){
        echo "Имя: " . $this->nick . "<br>";
        echo "Возраст: " . $this->age . "<br>";
        echo "Город: " . $this->city . "<br>";
        echo "Логин: " . $this->email . "<br>";
        echo "Пароль: " . $this->passw . "<br>";
        echo "Телефон: " . $this->phone . "<br>";
        echo "Пол: " . $this->sex . "<br>";
        echo "Ориентация: " . $this->orient . "<br>";
        echo "Обо мне: " . $this->about . "<br>";
    }
}