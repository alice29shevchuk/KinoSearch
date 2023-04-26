<?php
class ConnectWithDB extends mysqli {

    private static $instance = null;

    private $user = "root";
    private $pass = "";
    private $dbName = "kinopoisk";
    private $dbHost = "localhost";

    public function __construct()
    {
        parent::__construct($this->dbHost, $this->user, $this->pass, $this->dbName);

    }
    public static function getInstance() {

        if (!self::$instance instanceof self) {
            self::$instance = new self;
        }
            return self::$instance;
    }

}
?>