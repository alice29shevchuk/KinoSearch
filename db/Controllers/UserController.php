<?php
require_once 'C:\xampp\htdocs\KinoPoisk\db/Controllers/Controller.php';
//require_once 'C:\xampp\htdocs\KinoPoisk\db/Models/User.php';
require_once 'C:\Users\Admin\PhpstormProjects\KinoPoisk/db/Models/User.php';
class UserController extends Controller{

    function getListModel()
    {
        return $this->listObject;
    }
    public function Registration($user):bool{
        if(strlen($user->getLogin()) >4 && strlen($user->getLogin())<32)
        {
            if(strlen($user->getPass())>4 && strlen($user->getPass())<32){
                $this->Add($user);
                return true;
            }
            return false;
        }
        return false;
    }
    public function Authenticate($login, $pass):bool{
        $masUser = $this->getListModel();
        if(count($masUser) > 0){
            foreach ($masUser as $item){
                if($item->getLogin() == $login && $item->getPass() == $pass){
                    return true;
                }
            }
        }
        else{
            return false;
        }
        return false;
    }
}
?>