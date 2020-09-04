<?php
include("../models/DB.php");

class Del
{
    public $cred;
    public function Check()
    {
        if (isset($_POST['cred'])) {
            $this->cred = $_POST['cred'];
            if ($this->cred == '') {
                unset($cred);
            }
        }
        if (empty($this->cred)) {
            exit ("Вы не ввели информацию!");
        }

        if ($this->cred == 'admi') {
            exit("Вы не можете удалить учетную запись администратора!");
        }
    }

    public function CheckCred($array){
        if (!empty($array)) {
            echo "Удалено!";
            return true;
        } else {
            echo ("Ошибка удаления. Проверьте правильность введенного логина");
            return false;
        }
    }

}