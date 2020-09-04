<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../zvendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../zvendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../zvendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="../zvendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="../zvendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../zvendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
</body>
</html>

<?php
require_once '../controllers/RegController.php';
$login = $_SESSION['log'];
$obj = new Reg();
$obj->Check();
$sql = "SELECT id FROM User WHERE email='$login'";
$result = $dbs->query($sql);
$array = array();
while ($data = $result->fetchArray(SQLITE3_ASSOC)) {
    $array[] = $data;
}
$obj->CheckCred($array);
$result2 = $dbs->query("INSERT INTO User (nick, age, email, passw) 
VALUES('$obj->nick', '$obj->age', '$obj->login','$obj->password')");
$obj->Add($result2);
?>



