<?php
/**
 * 
 * Front-end Controller
 * 
 */
class App{
    protected $controller="HomeController";
    protected $action="index"; 
    protected $params=[];

    function __construct(){
       $this->prepareURL();
       $this->render();
    }

    /**
     * Extract controller,nethod and parameters
     * @return void
     */

     private function prepareURL() {
        $URL= $_SERVER['QUERY_STRING'];
        if(!empty($URL)){
            $URL=trim($URL,"/");
            $URL = explode("/",$URL);
            //define the controller 
            $this->controller=isset($URL[1])?ucwords($URL[1])."Controller":"HomeController";
            //  echo $this->controller;
            //define the action
            $this->action= isset($URL[2])?$URL[2]:"index";
            unset($URL[0],$URL[1],$URL[2]);
            $this->params=!empty($URL)? array_values($URL):[];
            //  var_dump(($this->params));
        } 
     }

     private function render(){
        if(class_exists($this->controller)){
            $controller =new $this->controller;
            if(method_exists($controller,$this->action)){
               call_user_func_array([$controller,$this->action],$this->params); 
            }else{
                echo "method not exisit";
            }
        }else{
            echo "This Controller :".$this->controller." Not exist";
        }
     }
}

?>