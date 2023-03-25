<?php

class Ad extends DB{
    private $table="ad";
    private $conn;
     
    public function __construct(){
        $this->conn=$this->connect();
    }

    public function getAllAds(){
        return $this->conn->get($this->table);
    }

    public function insertAd($data){
        return $this->conn->insert($this->table,$data);
    }
    public function getOneRow($id){
        $db=$this->conn->where("single_ad_id",$id);
        return $db->getOne($this->table);

    }
    public function updateAd($id,$data){
        $db=$this->conn->where("single_ad_id",$id);
        return $db->update($this->table,$data);
    }
    public function deleteAd($id){
        $db=$this->conn->where("single_ad_id",$id);
        return $db->delete($this->table);
    }
}
?>