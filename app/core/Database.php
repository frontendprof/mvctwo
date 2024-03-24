<?php

Trait Database{
    private function connect(){
        $string = "mysql:hostname=".DBHOST.";dbname=".DBNAME;
        $con = new PDO($string,DBUSER,DBPASS);

        return $con;
    }

    public function query($sql,$params=[]){
        $con = $this->connect();
        $stmt = $con->prepare($sql);
        $check=$stmt->execute($params);
        if($check){
            $result=$stmt->fetchAll(PDO::FETCH_OBJ);
            if(is_array($result)&& count($result)){
                return $result;
            }
        }
        return false;
    }

    public function query_row($sql,$params=[]){
        $con = $this->connect();
        $stmt = $con->prepare($sql);
        $check=$stmt->execute($params);
        if($check){
            $result=$stmt->fetchAll(PDO::FETCH_OBJ);
            if(is_array($result)&& count($result)){
                return $result[0];
            }
        }
        return false;
    }
}