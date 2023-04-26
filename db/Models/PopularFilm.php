<?php
include_once 'IAliceObjects.php';
class PopularFilm implements IAliceObjects {
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