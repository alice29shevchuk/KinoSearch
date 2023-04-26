<?php
include_once 'IAliceObjects.php';
class Genre implements IAliceObjects{
    private $id;
    private $name;
    public function __construct($id,$name)
    {
        $this->id=$id;
        $this->name=$name;
    }
    public function __toString()
    {
        return "Id: ".$this->id."Name: ".$this->name;
    }
    public function Equals($object)
    {
        if(gettype($object) == gettype($this)){
            if(get_class($object) == get_class($this)){
                if($this->name == $object->name){
                    return true;
                }
                else{
                    return false;
                }
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }
}
?>