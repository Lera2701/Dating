<?php
require_once '../controllers/AuthController.php';
$obj = new Auth();
$obj->Check();
$login = $_SESSION['log'];
$sql4 = "SELECT * FROM User WHERE email='$login'";
$result4 = $dbs->query($sql4);
$array4 = array();
while($data = $result4->fetchArray(SQLITE3_ASSOC)){
    $array4[] = $data;
}
$obj->CheckCred($array4);
