<?php 
    if(!isset($_COOKIE["user"]))
    echo '<script>
    location.href = "index.php"
</script>';
$tc =loadModel('Tieuchi');
if(isset($_REQUEST['submit'])){
    $idtc= $tc->nextID();
    $ttc = $_REQUEST['tentc'];
    $dtd = $_REQUEST['dtd'];
    $iddm = $_REQUEST['dm'];
    if($ttc != '' && $dtd != ''){
        echo '<script>alert("'.$ttc.'")</script>';
        if($tc->add($idtc,$ttc,$dtd,$iddm))
            echo '<script>alert("thêm thành công")
                location.href = ".?option=tieuchi"
            </script>';
        else
            echo '<script>alert("error")</script>';
    }else{
        echo '<script>alert("nhập đầy đủ các trường")</script>';
    }
        
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
                    <input type="text" class="form-control" name="tentc" id="ttc" placeholder="Nhập tên tiêu chí">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Điểm tối đa</label>
                    <input type="text" class="form-control" name="dtd" id="dtd" placeholder="Nhập điểm tối da">
                </div>
                <input type="submit" name="submit" id="submit" value="+ Thêm" class="btn btn-info">
            </form>
        </div>
</div>