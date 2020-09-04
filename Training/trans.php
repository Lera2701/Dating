<?php
include "PDO.php";

class trans
{
    function table($db){
        $db->exec("create table Test(
            id INTEGER NOT NULL PRIMARY KEY,
            color TEXT,
            size INTEGER
            )");
    }
    function insert($db){
        $db->exec("insert into test (color, size) values ('red', 0)");
        $db->exec("insert into test (color, size) values ('green', 1)");
    }
    function __construct($db) {
        try {
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->beginTransaction();
    $this->table($db);
    $this->insert($db);
    $db->commit();
        } catch (PDOException $e) {
            $db->rollBack();
            echo "Ошибка: " . $e->getMessage();
        }
    }
    function out($db){
        $res = $db->query("select * from test");
        foreach ($res as $r){
            echo $r['color'] . "<br>";
            echo $r['size'] . "<br>";
        }
    }
}
$obj = new trans($db);
$obj->out($db);