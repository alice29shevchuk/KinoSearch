<?php
include_once 'IObject.php';
class PopularFilm implements IObject {
    private $id;
    public function __construct($id)
    {
        $this->id=$id;
    }
    public function __toString()
    {
        return "Id: ".$this->id;
    }

    public function Equals($object)
    {

    }
}
?>