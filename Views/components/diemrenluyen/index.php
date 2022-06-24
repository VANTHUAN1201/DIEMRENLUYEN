<?php 
    if(!isset($_COOKIE["user"]))
    echo '<script>
    location.href = "index.php"
</script>';
?>
<div class="wrapper">
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0"><strong>Trang chủ</strong></h1>
              </div>
          </div>
      </div>
  </div>
  <!-- main content  -->
  <div class="card" >
    <div style="display: flex!important;">
      <img src="Public/images/logo.png" style="height:85vh; width:90vh;" alt="">
      <h3 style="color: rgb(0, 53, 99);text-shadow:4px 4px 4px #000;font-size:90px;"><strong>Hệ thống chấm điểm rèn luyện cho sinh viên UTE</strong></h3>
    </div>
  </div>
</div>
  <!-- main content  -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script>
    $(document).ready(function(){
        var home = document.getElementById('home')
        home.classList.add('active')
        var find = document.getElementById('find')
        find.classList.remove('active')
        var tieuchi = document.getElementById('tieuchi')
        tieuchi.classList.remove('active')
    })
</script>
    