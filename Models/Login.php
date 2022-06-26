<?php
class Login extends Database{
    function login($user, $pass){
        $sql = "select * from tblnguoidung where TK = '".$user."' and pw = '".$pass."' and ID_DT = 'CTSV'";
        $row = mysqli_query($this->conn,$sql);
        if(mysqli_num_rows($row)>0)
            return True;
        return False;
    }
}