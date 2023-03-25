<?php
class pagesController{
    //
    public function home(){
        $db =new pages();
        $data['pages']=$db->getAllPages();
        View::load('pages/home',$data);
    }
    //add new Ad ->redirect to add ad page
    public function add(){
        View::load('pages/add');
    }
    //get data from the form and store it in the database
    public function store(){
        if(isset($_POST['submit'])){
            $Page_id=$_POST['Page_id'];
            $page_name=$_POST['page_name'];
            $view=$_POST['view'];
            $emails=$_POST['emails'];
            $b2click=$_POST['b2click'];
            $b3click=$_POST['b3click'];
            $link=$_POST['link'];
            $creation_date=$_POST['creation_date'];
            $data=Array("Page_id"=>$Page_id,
                        "page_name"=>$page_name,
                        "view"=>$view,
                        "emails"=>$emails,
                        "b2click"=>$b2click,
                        "b3click"=>$b3click,
                        "link"=>$link,
                        "creation_date"=>$creation_date
            );
            $db =new pages();
            if($db->insertPage($data)){
                View::load("pages/add",["success"=>"data created successfully"]);
            }else{
                View::load("pages/add");
            }
        }
    }

    //delete ad
    public function delete($id){
        $db =new pages();
        if($db->deletePage($id)){
            View::load('pages/delete');
        }else{
            echo "Error";
        }
    }

}
?>