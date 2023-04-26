<?php
include_once 'IAliceObjects.php';
class User implements IAliceObjects {
    public $id;
    public $login;
    public $password;
    public $subscriptionId;
    public function __construct($id,$login,$password,$subscriptionId)
    {
        $this->id=$id;
        $this->login=$login;
        $this->password=$password;
        $this->subscriptionId=$subscriptionId;
    }
    public function getLogin(){
        return $this->login;
    }
    public function getPass(){
        return $this->password;
    }
    public function __toString()
    {
        return "Id: ".$this->id.'<br>'."Login: ".$this->login.'<br>'."Password: ".$this->password.'<br>'."Subscription Id: ".$this->subscriptionId;
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