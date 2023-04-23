<?php
class UserController implements IController{

    private $connection;
    public function __construct($connection)
    {
        $this->connection=$connection;
    }

    public function Add($object)
    {
        // TODO: Implement Add() method.
    }

    public function DeleteById($id)
    {
        // TODO: Implement DeleteById() method.
    }

    public function DeleteByObject($object)
    {
        // TODO: Implement DeleteByObject() method.
    }

    public function UpdateById($id, $newObject)
    {
        // TODO: Implement UpdateById() method.
    }

    public function UpdateByObject($oldObject, $newObject)
    {
        // TODO: Implement UpdateByObject() method.
    }
}
?>