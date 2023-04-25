<?php
require_once 'C:\xampp\htdocs\KinoPoisk\db\Controllers\RoleController.php';
require_once 'C:\xampp\htdocs\KinoPoisk\db\Controllers\FilmController.php';
require_once 'C:\xampp\htdocs\KinoPoisk\db\Controllers\MemberController.php';
require_once 'C:\xampp\htdocs\KinoPoisk\db/db.php';
if(isset($_GET['author'])){
    getByAuthor();
}
function getByAuthor(){
    $film =  new FilmController(ConnectWithDB::getInstance());
    $role = new RoleController(ConnectWithDB::getInstance());
    $listRole = $role->SelectByFilter(function ($x){return $x->title == "Author";});
    if(count($listRole) != 0){
        $idRole = $listRole[0]->id;
        $par = new MemberController(ConnectWithDB::getInstance());
        $listPar = $par->SelectByFilter(function ($x) use ($idRole) {return $x->roleId == $idRole;});
        foreach ($listPar as $item){
            if($item->fullName == $_GET['author']){
                $masFilms = $film->SelectByFilter(function ($x) use ($item) {return $x->memberId == $item->id;});
                if( count($masFilms) > 0 ){
                    $json = json_encode($masFilms);
                    echo $json;
                }
                else{
                    echo "400";
                }

            }
            else{
                echo "400";
            }
        }
    }
}
?>