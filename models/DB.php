<?php
if(!file_exists("../db/users1.db")) {

    $dbs = new SQLite3('../db/users1.db');
    $dbs->exec("CREATE TABLE User(
            id INTEGER NOT NULL PRIMARY KEY,
            nick TEXT,
            age INTEGER,
            email TEXT,
            passw TEXT,
            sex TEXT,
            city TEXT,
            orient TEXT,
            about TEXT,
            phone INTEGER
            )");
} else {
    $dbs = new SQLite3('../db/users1.db');
}
