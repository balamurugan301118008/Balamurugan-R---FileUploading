<?php
class Database
{
    public $db;
    function __construct()
    {
        try {
            $this->db = new PDO
            (
                'mysql:host=127.0.0.1;
                dbname=fileUploading',
                'admin',
                'welcome'
            );
        } catch (Exception $e) {
            die("connections faild" . $e->getMessage());
        }
    }
    function query($query)
    {
        $statment = $this->db->prepare($query);
        $statment->execute($statment);
        return $statment;
    }
}