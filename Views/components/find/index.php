<!-- check cookie  -->
<?php 
    if(!isset($_COOKIE["user"]))
    echo '<script>
    location.href = "index.php"
</script>';
$sv = loadModel('Student');
if(isset($_REQUEST['find'])){
    $result = $sv->findSV($_REQUEST['findtext']);
}
else
$result = $sv->getSV();
?>
<!-- body layout -->
<form action="" method="post" >
<div class="wrapper">
    <!-- main content  -->
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Tìm kiếm sinh viên</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="" method="post" >
                        <div class="input-group">
                            <input type="search" name="findtext" id="find" class="form-control form-control-lg" placeholder="nhập từ khóa tìm kiếm...">
                            <div class="input-group-append">
                                <input type="submit" name="find" value="tìm kiếm">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">STT</th>
                        <th style="width:200px;">Tên sinh viên</th>
                        <th style="width:100px;">Ngày sinh</th>
                        <th style="width:100px;">SĐT</th>
                        <th style="width:100px;">CCCD</th>
                        <th style="width:150px;">Email</th>
                        <th style="width:100px;">Đối tượng</th>
                        <th style="width:150px;">Khoa</th>
                        <th style="width:70px;">Lớp</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                    <?php 
                        if(mysqli_num_rows($result)>0){
                            $stt = 1;
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
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</form>
<!-- body layout -->
<!-- add class active  -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script>
    $(document).ready(function(){
        var home = document.getElementById('home')
        home.classList.remove('active')
        var find = document.getElementById('find')
        find.classList.add('active')
        var tieuchi = document.getElementById('tieuchi')
        tieuchi.classList.remove('active')
    })
</script>