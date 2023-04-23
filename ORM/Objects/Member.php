<?php
include_once 'IObject.php';
class Member implements IObject{
    private $id;
    private $fullName;
    private $roleId;
    public function __construct($id,$fullName,$roleId)
    {
        $this->id=$id;
        $this->fullName=$fullName;
        $this->roleId=$roleId;
    }
    public function __toString()
    {
        return "Id: ".$this->id."Full name: ".$this->fullName."Role Id".$this->roleId;
    }

    public function Equals($object)
    {
        if(gettype($object) == gettype($this)){
            if(get_class($object) == get_class($this)){
                if($this->fullName == $object->fullName && $this->roleId == $object->roleId){
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