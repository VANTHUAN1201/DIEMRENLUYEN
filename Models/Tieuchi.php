<?php
class Tieuchi extends Database{
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
        if(mysqli_num_rows($result)>0)
            while($row = mysqli_fetch_assoc($result))
                $id++;
        if($id <10)
            $ids = "TC0000".$id;
        else $ids = "TC000".$id;
        
        return $ids;
    }
    function add($idtc,$ttc,$dtd,$iddm){
        $sql ="insert into tbltieuchi values('".$idtc."','".$ttc."',".$dtd.",'".$iddm."')";
        if(mysqli_query($this->conn,$sql))
            return True;
        return False;
    }
    function remove($id){
        $sql = "delete from tbltieuchi where ID_tieuchi = '".$id."'";
        if(mysqli_query($this->conn,$sql))
            return True;
        return False;
    }
    function getName($id){
        $sql = "select * from tbltieuchi where ID_tieuchi = '".$id."'";
        $result = mysqli_query($this->conn,$sql);
        $name ='';
        if(mysqli_num_rows($result))
            while($row = mysqli_fetch_assoc($result)){
                $name = $row['tentieuchi'];
            }
        return $name;
    }
    function getDtd($id){
        $sql = "select * from tbltieuchi where ID_tieuchi = '".$id."'";
        $result = mysqli_query($this->conn,$sql);
        $dtd =0;
        if(mysqli_num_rows($result))
            while($row = mysqli_fetch_assoc($result)){
                $dtd = $row['diemtoida'];
            }
        return $dtd;
    }
    function getIDDM($id){
        $sql = "select * from tbltieuchi where ID_tieuchi = '".$id."'";
        $result = mysqli_query($this->conn,$sql);
        $iddm ='';
        if(mysqli_num_rows($result))
            while($row = mysqli_fetch_assoc($result)){
                $iddm = $row['ID_DM'];
            }
        return $iddm;
    }
    function update($idtc,$iddm,$ttc,$dtd){
        $sql = "update tbltieuchi set ID_DM = '".$iddm."', tentieuchi =N'".$ttc."', diemtoida = '".$dtd."' where ID_tieuchi = '".$idtc."'";
        if(mysqli_query($this->conn,$sql))
            return True;
        return False;
    }
}