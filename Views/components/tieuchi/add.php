<?php 
    if(!isset($_COOKIE["user"]))
    echo '<script>
    location.href = "index.php"
</script>';
if(isset($_REQUEST['submit'])){
    $idtc= $tc->nextID();
    $ttc = $_REQUEST['tentc'];
    $dtd = $_REQUEST['dtd'];
    $iddm = $_REQUEST['dm'];
    if($tc->add($idtc,$ttc,$dtd,$iddm))
        echo '<script>alert("thêm thành công")
            location.href = ".?option=tieuchi"
        </script>';
    else
        echo '<script>alert("error")</script>';
}
$tc =loadModel('Tieuchi');
$dm = $tc->getDM();
?>
<form action="" method="post">
    <div class="card">
        <div class="card-header">
        <h3 class="card-title"><strong>Thêm tiêu chí</strong></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="form-group">
                <label>Chọn danh mục</label>
                <select class="form-control" name="dm">
                    <?php
                        if(mysqli_num_rows($dm)){
                            while($row = mysqli_fetch_assoc($dm)){
                                ?>
                                <option value="<?php echo $row['ID_DM']; ?>"><?php echo $row['tenDM']; ?></option>
                                <?php
                            }
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tên Tiêu Chí</label>
                <input type="text" class="form-control" name="tentc" id="" placeholder="Nhập tên tiêu chí">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Điểm tối đa</label>
                <input type="text" class="form-control" name="dtd" id="" placeholder="Nhập điểm tối da">
            </div>
            <input type="submit" name="submit" id="submit" value="+ Thêm" class="btn btn-info">
        </div>
    </div>
</form>