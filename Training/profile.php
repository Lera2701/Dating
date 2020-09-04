<?php
function i($row){
    if (empty($row)) {
        return "Не указано";
    } else {
        return $row;
    }
}
function get_info(){

    if(!isset($_SESSION['log'])) {session_start();}
    include 'PDO.php';
    $log = $_SESSION['log'];
    $result = $dbs->query("select * from User where email = '$log'");
foreach($result as $row){

    echo "Имя: " . i($row['nick']) . "<br>";
    echo "Возраст: " . i($row['age']) . "<br>";
    echo "Город: " . i($row['city']) . "<br>";
    echo "Логин: " . i($row['email']) . "<br>";
    echo "Пароль: " . i($row['passw']) . "<br>";
    echo "Телефон: " . i($row['phone']) . "<br>";
    echo "Пол: " . i($row['sex']) . "<br>";
    echo "Ориентация: " . i($row['orient']) . "<br>";
    echo "Обо мне: " . i($row['about']) . "<br>";
}}