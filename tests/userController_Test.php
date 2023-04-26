<?php
include_once 'C:\Users\Admin\PhpstormProjects\KinoPoisk/db/Controllers/UserController.php';
include_once 'C:\Users\Admin\PhpstormProjects\KinoPoisk/db/db.php';
//require_once 'C:\Users\Admin\PhpstormProjects\KinoPoisk\db/Controllers/UserController.php';
//require_once 'C:\Users\Admin\PhpstormProjects\KinoPoisk\db/Models/User.php';
//require_once 'C:\Users\Admin\PhpstormProjects\KinoPoisk\db/db.php';
class userController_Test{
    private $connection;
    public function __construct(){
        $this->connection = new UserController(ConnectWithDB::getInstance());
    }
    public function RegistrationTest(){
        $newUser = new User(1,'Alisa2929','Alisa2929',1);
        if($this->connection->Registration($newUser) == true){
            echo "Registrate!!!";
        }
        else{
            echo "Error";
        }
    }
    public function Authentication(){
        $newUser = new User(1,'Alisa2929','Alisa2929',1);
        if($this->connection->Authenticate($newUser->getLogin(),$newUser->getPass()) == true){
            echo "Authenticate!!!";
        }
        else{
            echo "Error";
        }
    }
//    public function checkRegistr()
//    {
//        $userController =new UserController(ConnectWithDB::getInstance());
//        $user = new User(1,"alice29","29#08#2002",1);
//        if($userController->signUp($user)) {
//            $userController->Add($user);
//            echo "Add!";
//        }
//        else{
//            echo "Not add!";
//        }
//    public function checkAuth(){
//        $x = new UserController();
//        if($x->signIn("alisa","#29#08#")){
//            echo "User in";
//        }
//        else{
//            echo "Smth not correct";
//        }
//    }
}
$test = new userController_Test();
$test->RegistrationTest();
echo "<br>";
$test->Authentication();
?>