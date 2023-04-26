<?php
require_once 'C:\xampp\htdocs\KinoPoisk\db/Controllers/Controller.php';
require_once 'C:\xampp\htdocs\KinoPoisk\db/Models/Role.php';
class RoleController extends Controller{
    function getListModel()
    {
        if(!$this->connection->connect_error){
            $sql_select = 'SELECT * FROM role';
            $res = $this->connection->query($sql_select);
            foreach ($res as $item){
                $role = new Role($item['id'],$item['NameRole']);
                $this->Add($role);
            }
        }
    }
}
?>