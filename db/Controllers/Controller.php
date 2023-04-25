<?php
abstract class Controller{
    protected $connection;
    protected $listObject;
    public function __construct($connection){
        $this->connection = $connection;
        $this->listObject = array();
        $this->getListModel();
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
        $temp = array_filter($this->listObject,$filter);
        $returnedList = array();
        foreach ($temp as $item){
            array_push($returnedList,$item);
        }
        return $returnedList;
    }
    abstract function getListModel();
}
?>