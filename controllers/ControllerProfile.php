<?php
require_once '../models/model.php';

class ControllerProfile
{
    public function get_data()
    {
        require_once '../models/DB.php';
        if (!isset($_SESSION['log'])) {
            session_start();
        }
        $log = $_SESSION['log'];
        $result = $dbs->query("select * from User where email = '$log'");
        $array = array();
        while ($data = $result->fetchArray(SQLITE3_ASSOC)) {
            $array[] = new User($data['nick'], $data['age'], $data['city'], $data['email'], $data['passw'], $data['phone'], $data['sex'], $data['orient'], $data['about']);
        }

        $array[0]->get_info();
    }
}
