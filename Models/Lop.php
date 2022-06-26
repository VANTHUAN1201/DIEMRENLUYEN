<?php 
class Lop extends Database{
    function get(){
        $sql = "select * from tbllop";
        return mysqli_query($this->conn,$sql);
    }
}