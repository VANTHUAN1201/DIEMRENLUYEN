<!-- check cookie  -->
<?php 
    if(!isset($_COOKIE["user"]))
    echo '<script>
    location.href = "index.php"
</script>';
?>
<!-- body layout -->
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
                <form action="simple-results.html">
                    <div class="input-group">
                        <input type="search" class="form-control form-control-lg" placeholder="nhập từ khóa tìm kiếm...">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-lg btn-default">
                                <i class="fa fa-search"></i>
                            </button>
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
                    <th style="width:150px;">Khoa</th>
                    <th style="width:70px;">Lớp</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Nguyễn Văn Thuấn</td>
                    <td>12/01/2000</td>
                    <td>0987654321</td>
                    <td>1234567890</td>
                    <td>nvthuan1201@gmail.com</td>
                    <td>Công Nghệ Số</td>
                    <td>19T1</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
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