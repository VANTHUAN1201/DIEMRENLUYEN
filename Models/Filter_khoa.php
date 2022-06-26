<?php
    if(isset($_REQUEST['mk'])){
        $mk = $_REQUEST['mk'];
        $conn = mysqli_connect('localhost','root','','diemrenluyen');
        if($mk != '')
            $sql = "select * from tblnguoidung,tblkhoa,tbldoituong,tbllop where tblnguoidung.ID_lop = tbllop.ID_lop and tblnguoidung.ID_DT = tbldoituong.ID_Doituong and tbllop.ID_khoa = tblkhoa.ID_khoa and tblnguoidung.ID_DT = 'SV' and tbllop.ID_khoa = '".$mk."'";
        else
        $sql = "select * from tblnguoidung,tblkhoa,tbldoituong,tbllop where tblnguoidung.ID_lop = tbllop.ID_lop and tblnguoidung.ID_DT = tbldoituong.ID_Doituong and tbllop.ID_khoa = tblkhoa.ID_khoa and tblnguoidung.ID_DT = 'SV'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $stt=1;
            while($row = mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td><?php echo $stt++ ?></td>
                        <td><?php echo $row['hoten']; ?></td>
                        <td><?php echo $row['ngaysinh']; ?></td>
                        <td><?php echo $row['sdt']; ?></td>
                        <td><?php echo $row['cccd']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['tendoituong']; ?></td>
                        <td><?php echo $row['tenkhoa']; ?></td>
                        <td><?php echo $row['ID_lop']; ?></td>
                    </tr>
                <?php
            }
        }
    }
?>