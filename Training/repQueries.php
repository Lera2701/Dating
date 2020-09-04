<?php
include 'PDO.php';
$stmt = $dbs->prepare("INSERT INTO User (nick, age, email, passw) VALUES (:nick, :age, :email, :passw)");
$stmt->bindParam(':nick', $nick);
$stmt->bindParam(':age', $age);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':passw', $passw);

$nick = 'test';
$age = 3;
$email = "test@mail.dot";
$passw = "ljnls";
//$stmt->execute();

$nick = 'test';
$age = 3;
$email = "test2@mail.dot";
$passw = "slnj";
//$stmt->execute();

//$res = $db->query("select * from user where age = 3");
//
//foreach ($res as $r){
//    echo $r['nick'] . "<br>";
//    echo $r['age'] . "<br>";
//    echo $r['email'] . "<br>";
//    echo $r['passw'] . "<br>";
//    echo "<br><br>";
//}

//$db->exec("INSERT INTO Blabla(bla) VALUES ('bbbb')");
//echo "\nerror code(): " . $db->errorCode();
//
//echo "<br>";
//
//$stmt1 = $db->prepare('insert bla bla bla');
//if (!$stmt1) {
//    echo "error info(): ";
//    print_r($db->errorInfo());
//}

