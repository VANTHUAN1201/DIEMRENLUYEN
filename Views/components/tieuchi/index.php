
<?php 
    if(!isset($_COOKIE["user"]))
    echo '<script>
    location.href = "index.php"
</script>';
$tc = loadModel('tieuchi');
$dm = $tc->getDM();
?>
<div class="wrapper">
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Quản lí tiêu chí</h1>
              </div>
          </div>
      </div>
  </div>
  <!-- main content  -->
  <div class="card">
    <div class="card-header">
      <h3><a href=".?option=tieuchi&sub_option=add" class="btn btn-info" style="text-decoration: none;color:#000;"><strong>+</strong> tiêu chí</a></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width:10px;">STT</th>
            <th style="width:400px;">Danh mục</th>
            <th>Các tiêu chí</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if(mysqli_num_rows(($dm))>0){
              $i = 1;
              while($rowDM = mysqli_fetch_assoc($dm)){
                    $bgr ='';
                    if(isset($_REQUEST['IDDM'])){
                      if($_REQUEST['IDDM'] == $rowDM['ID_DM']){
                        $bgr = 'style="background:rgb(124, 159, 189)!important;"';
                      }
                    }else if($i == 1)
                      $bgr = 'style="background:rgb(124, 159, 189)!important;"';
                if($i == 1){
                ?>
                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td id="<?php echo $rowDM['ID_DM']; ?>" <?php echo $bgr; ?>><a href="<?php echo ".?option=tieuchi&IDDM=".$rowDM['ID_DM']; ?>"><strong><?php echo $rowDM['tenDM']; ?></strong></a></td>
                    <td rowspan="5">
                      <?php 
                        if(isset($_REQUEST['IDDM'])){
                          $rtc = $tc->getTieuchi($_REQUEST['IDDM']);
                        }else{
                          $rtc = $tc->getTieuchi("DM00001");
                        }
                      ?>
                      <table>
                      <?php 
                        if(mysqli_num_rows($rtc)){
                          $itc =1;
                          while($rowtc = mysqli_fetch_assoc($rtc)){
                            ?>
                              <tr>
                                <td style="width:500px;"><?php echo $rowtc['tentieuchi'] ?></td>
                                <td><?php echo $rowtc['diemtoida'] ?></td>
                                <td><a href="<?php echo ".?option=tieuchi&IDTC=".$rowtc['ID_tieuchi'] ?>">Xóa</a></td>
                              </tr>
                            <?php
                          }
                        }
                      ?>
                        
                      </table>
                    </td>
                  </tr>
                <?php
                }else{
                  ?>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td <?php echo $bgr; ?>><a href="<?php echo ".?option=tieuchi&IDDM=".$rowDM['ID_DM']; ?>" ><strong><?php echo $rowDM['tenDM']; ?></strong></a></td>
                    </tr>
                  <?php
                }
              }
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- main content  -->
  <!-- add class active  -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script>
  
    $(document).ready(function(){
        var home = document.getElementById('home')
        home.classList.remove('active')
        var find = document.getElementById('find')
        find.classList.remove('active')
        var tieuchi = document.getElementById('tieuchi')
        tieuchi.classList.add('active')
    })
    
</script>
<style>
  .chose{
    background:rgb(124, 159, 189)!important;
  }
</style>
