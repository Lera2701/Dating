<?php
require_once '../controllers/DelController.php';
$obj = new Del();
$obj->Check();
$sql = "SELECT id FROM User WHERE email='$obj->cred'";
$result = $dbs->query($sql);
$array = array();
while ($data = $result->fetchArray(SQLITE3_ASSOC)) {
    $array[] = $data;
}
if ($obj->CheckCred($array)) {
    $result5 = $dbs->query("DELETE FROM User WHERE email = '$obj->cred'");
}
