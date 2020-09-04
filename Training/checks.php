<?php
//$email = "MyEmail@mysite.ru";
//$email1 = "MyEmail.mysite.ru";
//
//function check($em){
//    if (filter_var($em, FILTER_VALIDATE_EMAIL)) {
//        echo $em . " - Адрес указан корректно.<br>";
//    }else{
//        echo $em . " - Адрес указан не правильно.<br>";
//    }
//}
//
//check($email);
//check($email1);

$arr = ['123', 'test', '45ew45', '456'];
$pattern = '#^[0-9]+$#';
$pattern1 = '#[0-9]+#';

foreach($arr as $item){
    if( preg_match($pattern, $item) ){
        echo "<p>Строка <b>$item</b> не содержит букв - подходит</p>";
    }
    else if ( preg_match($pattern1, $item) ){echo "<p>Строка <b>$item</b> содержит и буквы, и цифры - не подходит</p>";}
    else{
        echo "<p>Строка <b>$item</b> не подходит</p>";
    }
}

echo "<br><br>";

$pattern2 = '/^(\+*)([0-9]){10,12}$/';
$arr1 = ['+380507780152', '380679856123', '0632569841', '4536223584536366'];
foreach($arr1 as $item1){
    if( preg_match($pattern2, $item1) ){
        echo "<p>Номер <b>$item1</b> - правильный</p>";
    } else {echo "<p>Номер <b>$item1</b> - неправильный</p>";}}
