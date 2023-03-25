<?php

class pages extends DB{
    private $table="pages";
    private $conn;
     
    public function __construct(){
        $this->conn=$this->connect();
    }

    public function getAllPages(){
        return $this->conn->get($this->table);
    }

    public function insertPage($data){
        return $this->conn->insert($this->table,$data);
    }
    public function getOneRow($id){
        $db=$this->conn->where("Page_id",$id);
        return $db->getOne($this->table);

    }
    public function deletePage($id){
        $db=$this->conn->where("Page_id",$id);
        return $db->delete($this->table);
    }
}
?>