<?php
abstract class Controller{
    private $connection;
    private $listObject;
    public function __construct($connection){
        $this->connection = $connection;
        $this->listObject = array();
    }
    public function Add($object){
        array_push($this->listObject,$object);
    }
    public function GetListObjects()
    {
        foreach ($this->listObject as $item)
        {
            echo $item;
        }
    }
    public function DeleteById($id){
        $this->listObject = array_splice($this->listObject,$id,1);
    }
    public function DeleteByObject($object){
        $this->DeleteByID($object->id);
    }
    public function UpdateById($id,$newObject){
        $this->listObject[$id] = $newObject;
    }
    public function UpdateByObject($oldObject,$newObject){
        $this->listObject[$oldObject->id] == $newObject;
    }
    public function SelectById($id){
        return $this->listObject[$id];
    }
    public function SelectByFilter($filter){
        return array_filter($this->listObject,$filter);
    }
}
?>