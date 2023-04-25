<?php
include_once 'db/Controllers/UserController.php';
include_once 'db/Controllers/RoleController.php';
include_once 'db/Controllers/MemberController.php';
include_once 'db/Models/User.php';
include_once 'db/Models/Role.php';
include_once 'db/Models/Member.php';
include_once 'api/Public/Movies.php';
include_once 'db/db.php';
//$user =new UserController(ConnectWithDB::getInstance());
//$user->Add(new User(1,"alice29","a29lice",1));
////$user->GetListObjects();
//$result = $user->SelectByFilter(function ($x){return $x->id==1;});
////echo $result[0];
//
//$role = new RoleController(ConnectWithDB::getInstance());
//$role->Add(new Role(1,"Director"));
//$role->Add(new Role(2,"Artist"));
//$res = $role->SelectByFilter(function ($x){return $x->title=="Director";});
////echo $res[0];
//$member = new MemberController(ConnectWithDB::getInstance());
//$member->Add(new Member(1,"Alice",1));
//$member->Add(new Member(2,"Arthur",1));
//$member->Add(new Member(3,"Masha",2));
//$res2 = $member->SelectByFilter(function ($x){return $x->roleId==1;});
//foreach ($res2 as $item)
//{
//    echo $item.'<br>';
//}
//echo $res2[0];
$movies = new Movies(ConnectWithDB::getInstance());
$movies->getByAuthor("Steven King");
?>