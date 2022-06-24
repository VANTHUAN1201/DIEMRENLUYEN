<?php 
    if(!isset($_COOKIE["user"]))
    echo '<script>
    location.href = "index.php"
</script>';
$tc =loadModel('Tieuchi');
if(isset($_REQUEST['submit'])){
    $idtc= $_REQUEST['IDTC'];
    $ttc = $_REQUEST['tentc'];
    $dtd = $_REQUEST['dtd'];
    $iddm = $_REQUEST['dm'];
    if($tc->update($idtc,$iddm,$ttc,$dtd))
        echo '<script>alert("sửa thành công")
            location.href = ".?option=tieuchi"
        </script>';
    else
        echo '<script>alert("error")</script>';
}

$dm = $tc->getDM();
?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title"><strong>Thêm tiêu chí</strong></h3>
    </div>
    <!-- /.card-header -->
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label>Chọn danh mục</label>
                    <select class="form-control" name="dm">
                        <?php
                            if(mysqli_num_rows($dm)){
                                while($row = mysqli_fetch_assoc($dm)){
                                    if($tc->getIDDM($_REQUEST['IDTC']) == $row['ID_DM']){
                                    ?>
                                    <option value="<?php echo $row['ID_DM']; ?>" selected><?php echo $row['tenDM']; ?></option>
                                    <?php
                                    }else{
                                        ?>
                                        <option value="<?php echo $row['ID_DM']; ?>" ><?php echo $row['tenDM']; ?></option>
                                        <?php
                                    }
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên Tiêu Chí</label>
                    <input type="text" class="form-control" name="tentc" value="<?php echo $tc->getName($_REQUEST['IDTC']); ?>" id="" placeholder="Nhập tên tiêu chí">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Điểm tối đa</label>
                    <input type="text" class="form-control" name="dtd" id="" value="<?php echo $tc->getDtd($_REQUEST['IDTC']); ?>" placeholder="Nhập điểm tối da">
                </div>
                <input type="submit" name="submit" id="submit" value="Sửa" class="btn btn-info">
            </form>
        </div>
</div>