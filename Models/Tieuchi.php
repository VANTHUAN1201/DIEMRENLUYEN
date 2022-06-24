<?php
class tieuchi extends Database{
    function getDM(){
        $sql = "select * from tbldanhmuc";
        return mysqli_query($this->conn,$sql);
    }
    function getTieuchi($idDM){
        $sql = "select *from tbltieuchi where ID_DM = '".$idDM."'";
        return mysqli_query($this->conn,$sql);
    }
    function nextID(){
        $id = 1;
        $sql = "select * from tbltieuchi";
        $result =  mysqli_query($this->conn,$sql);
        if(mysqli_num_rows($result))
            while(mysqli_fetch_assoc($result))
                $id++;
        return $id;
    }
    function add($idtc,$ttc,$dtd,$iddm){
        $sql ="insert into tbltieuchi values('".$idtc."','".$ttc."',".$dtd.",'".$iddm."')";
        if(mysqli_query($this->conn,$sql))
            return True;
        return False;
    }
}