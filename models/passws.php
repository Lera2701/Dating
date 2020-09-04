<?php

include '../models/DB.php';

$sql4 = "select email, passw from User";
$result4 = $dbs->query($sql4);
$array4 = array();
while($data = $result4->fetchArray(SQLITE3_ASSOC)){
    $array4[] = $data;
}
foreach($array4 as $myrow) {
echo $myrow['email'] . "<br>" . $myrow['passw'] . "<br><br>";
}
