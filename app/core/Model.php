<?php

class Model {
    use Database;
    function test(){
        $sql='select * from users';
        $result=$this->query($sql);
        show($result);
    }
}