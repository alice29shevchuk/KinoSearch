<?php
include_once 'db/Controllers/UserController.php';
include_once 'db/Models/User.php';
include_once 'db/db.php';
$user =new UserController(ConnectWithDB::getInstance());
$user->Add(new User(1,"alice29","a29lice",1));
//$user->GetListObjects();
$result = $user->SelectByFilter(function ($x){return $x->id==1;});
echo $result[0];
?>