<?php
include_once 'IAliceObjects.php';
class Subscription implements IAliceObjects{
    private $id;
    private $title;
    private $price;
    private $isPremium;
    public function __construct($id,$title,$price,$isPremium)
    {
        $this->id=$id;
        $this->title=$title;
        $this->price=$price;
        $this->isPremium=$isPremium;
    }
    public function __toString()
    {
        return "Id: ".$this->id."Title: ".$this->title."Price: ".$this->price."Is Premium: ".$this->isPremium;
    }

    public function Equals($object)
    {
        if(gettype($object) == gettype($this)){
            if(get_class($object) == get_class($this)){
                if($this->title == $object->title && $this->isPremium == $object->isPremium && $this->price == $object->price){
                    return  true;
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