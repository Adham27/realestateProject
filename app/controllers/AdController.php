<?php
class AdController{
    //
    public function main(){
        $db =new Ad();
        $data['ad']=$db->getAllAds();
        View::load('ads/main',$data);
    }
    //add new Ad ->redirect to add ad page
    public function add(){
        View::load('ads/add');
    }
    //get data from the form and store it in the database
    public function store(){
        if(isset($_POST['submit'])){
            $single_ad_id=$_POST['single_ad_id'];
            $client_name=$_POST['client_name'];
            $phone_num=$_POST['phone_num'];
            $address=$_POST['address'];
            $image=$_POST['image'];
            $descreption=$_POST['descreption'];
            $ad_name=$_POST['ad_name'];
            $created_at=$_POST['created_at'];
            $data=Array("single_ad_id"=>$single_ad_id,
                        "client_name"=>$client_name,
                        "phone_num"=>$phone_num,
                        "address"=>$address,
                        "image"=>$image,
                        "descreption"=>$descreption,
                        "ad_name"=>$ad_name,
                        "created_at"=>$created_at
            );
            $db =new Ad();
            if($db->insertAd($data)){
                View::load("ads/add",["success"=>"data created successfully"]);
            }else{
                View::load("ads/add");
            }
        }
    }
    //Update ad info
    public function edit($id){
        $db =new Ad();
        if($db->getOneRow($id)){
            $data['row']=$db->getOneRow($id);
            View::load('ads/edit',$data);
        }else{
            echo "error";
        }   
    }
    public function update($id){
        if(isset($_POST['submit'])){
            $single_ad_id=$_POST['single_ad_id'];
            $client_name=$_POST['client_name'];
            $phone_num=$_POST['phone_num'];
            $address=$_POST['address'];
            $image=$_POST['image'];
            $descreption=$_POST['descreption'];
            $ad_name=$_POST['ad_name'];
            $created_at=$_POST['created_at'];
            // echo $id."___". $client_name."___". $phone_num."___".  $address."___". $image."___".$descreption."___". $ad_name."___".$created_at;
            $data=Array( "single_ad_id"=>$single_ad_id,
                                "client_name" =>$client_name,
                                "phone_num"   =>$phone_num,
                                "address"     =>$address,
                                "image"       =>$image,
                                "descreption" =>$descreption,
                                "ad_name"     =>$ad_name,
                                "created_at"  =>$created_at
            );
            $db =new Ad();
            
            if($db->updateAd($id,$data)){
                View::load("ads/edit",["success"=>"data updated successfully",'row'=>$db->getOneRow($id)]);
            }else{
                View::load("ads/edit",['row'=>$db->getOneRow($id)]);
            }
        }
    }

    // get one row to update
    
    //delete ad
    public function delete($id){
        $db =new Ad();
        if($db->deleteAd($id)){

            View::load('ads/delete');
        }else{
            echo "Error";
        }
    }

}
?>