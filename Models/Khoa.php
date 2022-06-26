<?php 
class Khoa extends Database{
    function get(){
        $sql = "select * from tblkhoa";
        return mysqli_query($this->conn,$sql);
    }
}