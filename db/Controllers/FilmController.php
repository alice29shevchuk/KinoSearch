<?php
require_once 'C:\xampp\htdocs\KinoPoisk\db/Controllers/Controller.php';
require_once 'C:\xampp\htdocs\KinoPoisk\db/Models/Film.php';
class FilmController extends Controller{

    public function __construct($connection)
    {
        parent::__construct($connection);
    }

    function getListModel()
    {
        if(!$this->connection->connect_error){
            $sql_select = 'SELECT * FROM film';
            $res = $this->connection->query($sql_select);
            foreach ($res as $item){
                $film = new Film($item['id'],$item['title'],$item['country'],$item['duration'],$item['image'],$item['genreId'],$item['year'],$item['raiting'],$item['isPopularId'],$item['memberId']);
                $this->Add($film);
            }
        }
    }
}
?>