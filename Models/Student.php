<?php
class Student extends Database{
    function getSV($mk){
        if($mk == '')
            $sql = "select * from tblhocky,tblchamdiem,tblnguoidung,tblkhoa,tbldoituong,tbllop where tblchamdiem.ID_hocky = tblhocky.ID_hocky and tblchamdiem.ID_ND =  tblnguoidung.ID_ND and tblnguoidung.ID_lop = tbllop.ID_lop and tblnguoidung.ID_DT = tbldoituong.ID_Doituong and tbllop.ID_khoa = tblkhoa.ID_khoa and tblnguoidung.ID_DT = 'SV'";
        else
            $sql = "select * from tblhocky,tblchamdiem,tblnguoidung,tblkhoa,tbldoituong,tbllop where tblchamdiem.ID_hocky = tblhocky.ID_hocky and tblchamdiem.ID_ND =  tblnguoidung.ID_ND and tblnguoidung.ID_lop = tbllop.ID_lop and tblnguoidung.ID_DT = tbldoituong.ID_Doituong and tbllop.ID_khoa = tblkhoa.ID_khoa and tblnguoidung.ID_DT = 'SV' and ID_khoa = '".$mk."'";
        return mysqli_query($this->conn,$sql);
    }
    function findSV($text,$mk){
        if($mk == '')
            $sql = "select * from  tblchamdiem,tblnguoidung,tblkhoa,tbldoituong,tbllop,tblhocky where tblchamdiem.ID_hocky = tblhocky.ID_hocky and tblchamdiem.ID_ND =  tblnguoidung.ID_ND and tblnguoidung.ID_lop = tbllop.ID_lop and tblnguoidung.ID_DT = tbldoituong.ID_Doituong and tbllop.ID_khoa = tblkhoa.ID_khoa and (hoten like N'%".$text."%' or email like N'%".$text."%' or tendoituong like N'%".$text."%' or tenkhoa like N'%".$text."%' or tenlop like N'%".$text."%' or tblnguoidung.ID_lop like '%".$text."%') and tblnguoidung.ID_DT = 'SV'";
        else
            $sql = "select * from tblchamdiem,tblnguoidung,tblkhoa,tbldoituong,tbllop,tblhocky where  tblchamdiem.ID_hocky = tblhocky.ID_hocky and tblchamdiem.ID_ND =  tblnguoidung.ID_ND and tblnguoidung.ID_lop = tbllop.ID_lop and tblnguoidung.ID_DT = tbldoituong.ID_Doituong and tbllop.ID_khoa = tblkhoa.ID_khoa and (hoten like N'%".$text."%' or email like N'%".$text."%' or tendoituong like N'%".$text."%' or tenkhoa like N'%".$text."%' or tenlop like N'%".$text."%' or tblnguoidung.ID_lop like '%".$text."%') and tblnguoidung.ID_DT = 'SV' and tbllop.ID_khoa = '".$mk."'";
            return mysqli_query($this->conn,$sql);
    }
}