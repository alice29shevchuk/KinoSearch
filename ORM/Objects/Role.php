<?php
include_once 'IObject.php';
class Role implements IObject{
    private $id;
    private $title;
    public function __construct($id,$title)
    {
        $this->id=$id;
        $this->title=$title;
    }
    public function __toString()
    {
        return "Id: ".$this->id."Title: ".$this->title;
    }

    public function Equals($object)
    {
        if(gettype($object)==gettype($this)){
            if(get_class($object)==get_class($this)){
                if($this->title == $object->title)
                {
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