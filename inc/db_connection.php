<?php
class database{

   public $db;


    // get the database connection
    public function getConnection() {

        $this->db = null;
        
        try {
            $this->db = new PDO('mysql:host=127.0.0.1;dbname=cybersecurity;**charset=utf8**', 'root', '');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch ( \Exception $e ) {
            echo 'Error connecting to the Database: ' . $e->getMessage();
            exit;
        }

        return $this->db;
    }
}
$database = new database();
$db = $database->getConnection();
?>