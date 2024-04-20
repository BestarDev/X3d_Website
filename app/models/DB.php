<?php
  class DB {
    private $db;
    private $db_dir = 'sqlite:../public/db/database.db';
    public $table_name = "co_brands";
    
    public function __construct(){
      try{
        $this->db = new PDO($this->db_dir, DB_USER, DB_PASS, array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
          ));
      }catch(PDOException $e){
          print($e->getMessage(). "opendatabase");
          print "Error in openhrsedb ".$e->getMessage();
      }
    }


    //Get all coca-cola brands information
    public function getBrands(){
      $result = $this->db->query("SELECT name, subTitle, description, thumbnail FROM ".$this->table_name);
      $rows = $result->fetchAll();
      return $rows;
    }


    //Get the details by brand type
    public function getDetails($type){
      try {
        $result = $this->db->query("SELECT * FROM ".$this->table_name." WHERE `thumbnail` = '". $type . "';");
        $row = $result->fetch(PDO::FETCH_ASSOC);
        return $row;
      } catch(PDOExecption $e) {
        return ["error" => "PDO Error: ".$e->getMessage()];
      }
           
    }

  }