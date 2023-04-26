<?php
require_once 'C:\xampp\htdocs\KinoPoisk\db/Controllers/Controller.php';
require_once 'C:\xampp\htdocs\KinoPoisk\db/Models/Member.php';
class MemberController extends Controller{
    function getListModel()
    {
        if(!$this->connection->connect_error){
            $sql_select = 'SELECT * FROM member';
            $res = $this->connection->query($sql_select);
            foreach ($res as $item){
                $member = new Member($item['id'],$item['fullName'],$item['roleId']);
                $this->Add($member);
            }
        }
    }
}
?>