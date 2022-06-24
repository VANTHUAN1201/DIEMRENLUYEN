<?php
class User extends Database{
    function getName(){
        $sql ="select * from tblnguoidung where TK = '".$_COOKIE['user']."'";
        $result = mysqli_query($this->conn,$sql);
        $name ="";
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                $name = $row['hoten'];
            }
        }
        return $name;
    }
    function getNs(){
        $sql ="select * from tblnguoidung where TK = '".$_COOKIE['user']."'";
        $result = mysqli_query($this->conn,$sql);
        $ns ="";
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                $ns = $row['ngaysinh'];
            }
        }
        return $ns;
    }
    function getCccd(){
        $sql ="select * from tblnguoidung where TK = '".$_COOKIE['user']."'";
        $result = mysqli_query($this->conn,$sql);
        $cccd ="";
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                $cccd = $row['cccd'];
            }
        }
        return $cccd;
    }
    function getSdt(){
        $sql ="select * from tblnguoidung where TK = '".$_COOKIE['user']."'";
        $result = mysqli_query($this->conn,$sql);
        $sdt ="";
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                $sdt = $row['sdt'];
            }
        }
        return $sdt;
    }
    function getEmail(){
        $sql ="select * from tblnguoidung where TK = '".$_COOKIE['user']."'";
        $result = mysqli_query($this->conn,$sql);
        $email ="";
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                $email = $row['email'];
            }
        }
        return $email;
    }
    function update($ht,$ns,$cccd,$sdt,$email){
        $sql = "update tblnguoidung set hoten =N'".$ht."', ngaysinh = '".$ns."', cccd = '".$cccd."',sdt = '".$sdt."', email = '".$email."' where TK = '".$_COOKIE['user']."'";
        if(mysqli_query($this->conn,$sql))
            return True;
        return False;
    }
    
}