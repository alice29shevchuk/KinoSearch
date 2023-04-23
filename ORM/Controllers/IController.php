<?php
interface IController{
    public function Add($object);
    public function DeleteById($id);
    public function DeleteByObject($object);
    public function UpdateById($id,$newObject);
    public function UpdateByObject($oldObject,$newObject);
}
?>