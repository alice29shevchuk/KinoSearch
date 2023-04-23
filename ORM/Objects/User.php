<?php
include_once 'IObject.php';
class User implements IObject {
    private $id;
    private $login;
    private $password;
    private $subscriptionId;
    public function __construct($id,$login,$password,$subscriptionId)
    {
        $this->id=$id;
        $this->login=$login;
        $this->password=$password;
        $this->subscriptionId=$subscriptionId;
    }
    public function __toString()
    {
        return "Id: ".$this->id."Login: ".$this->login."Password: ".$this->password."Subscription Id: ".$this->subscriptionId;
    }

    public function Equals($object)
    {
        if(gettype($object) == gettype($this)){
            if(get_class($object) == get_class($this)){
                if($this->login == $object->login && $this->subscriptionId == $object->subscriptionId && $this->password == $object->password){
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