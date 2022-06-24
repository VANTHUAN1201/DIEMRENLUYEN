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
}