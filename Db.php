<?php
class Db{
    private $database="products"; //nom de la base de données
    private $host="localhost"; //adresse du serveur
    private $username="root"; //nom de l'utilisateur qui a des droits sur la base de données
    private $password=""; //mot de passe de cet utilisateur
    public $connection;
    
    function __construct(){
        $this->open();
    }

    function open()
    {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
    }

    function close()
    {
        $this->connection->close();
    }
    
    function query($query)
    {
        return $this->connection->query($query);
    }
}
?>