<?php
require_once 'C:\xampp\htdocs\KinoPoisk\db\Controllers\RoleController.php';
require_once 'C:\xampp\htdocs\KinoPoisk\db\Controllers\FilmController.php';
require_once 'C:\xampp\htdocs\KinoPoisk\db\Controllers\MemberController.php';
require_once 'C:\xampp\htdocs\KinoPoisk\db/db.php';
if(isset($_GET['author'])){
    $role = new RoleController(ConnectWithDB::getInstance());
    $listRole = $role->SelectByFilter(function ($x){return $x->title == "Author";});
    if(count($listRole) != 0) {
        $idRole = $listRole[0]->id;
        $mem = new MemberController(ConnectWithDB::getInstance());
        $listMember = $mem->SelectByFilter(function ($x) use ($idRole) {return $x->roleId == $idRole;});
        $author = $listMember[0];
        if(count(getByAuthor($author)) > 0){
            echo json_encode(getByAuthor($author));
        }
        else{
            echo "404";
        }
    }
    else{
        echo "404";
    }
}
function getByAuthor($author):array
{
    $film = new FilmController(ConnectWithDB::getInstance());
    if ($author->fullName == $_GET['author']) {
        $masFilms = $film->SelectByFilter(function ($x) use ($author) {
            return $x->memberId == $author->id;
        });
        if (count($masFilms) > 0) {
            return $masFilms;
        } else {
            return [];
        }
    }
    return [];
}
?>