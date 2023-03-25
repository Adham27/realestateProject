<?php
class HomeController{
    public function index(){
        $this->main();
     }
    public function main(){
        $db =new Ad();
        $data['ad']=$db->getAllAds();
        View::load('home',$data);
    }
    // public function home(){
    //     $db1=new pages();
    //     $dataSet['pages']=$db1->getAllPages();
    //     View::load('home',$dataSet);
    // }
    }
   
?>