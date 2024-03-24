<?php

class Home extends Controller{
    public function index($a="", $b="",$c=""){

        $model=new Model;
        
        $arr['name']="Shaykh";
        $arr['age']=3;
        $arr['date']=date('Y-m-d');



        $result=$model->insert($arr);
        
        show($result);
        $this->view("home");
    }
}