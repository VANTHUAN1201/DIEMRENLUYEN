<?php
class Student extends Database{
    function getSV(){
        $sql = "select * from tblnguoidung,tblkhoa,tbldoituong,tbllop where tblnguoidung.ID_lop = tbllop.ID_lop and tblnguoidung.ID_DT = tbldoituong.ID_Doituong and tbllop.ID_khoa = tblkhoa.ID_khoa and tblnguoidung.ID_DT = 'SV'";
        return mysqli_query($this->conn,$sql);
    }
    function findSV($text){
        $sql = "select * from tblnguoidung,tblkhoa,tbldoituong,tbllop where tblnguoidung.ID_lop = tbllop.ID_lop and tblnguoidung.ID_DT = tbldoituong.ID_Doituong and tbllop.ID_khoa = tblkhoa.ID_khoa and (hoten like N'%".$text."%' or email like N'%".$text."%' or tendoituong like N'%".$text."%' or tenkhoa like N'%".$text."%' or tenlop like N'%".$text."%' or tblnguoidung.ID_lop like '%".$text."%') and tblnguoidung.ID_DT = 'SV'";
        return mysqli_query($this->conn,$sql);
    }
}