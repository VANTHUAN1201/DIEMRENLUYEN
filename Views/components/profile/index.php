<?php 
    if(!isset($_COOKIE["user"]))
    echo '<script>
            location.href = "index.php"
        </script>';
    $user = loadModel('User');
    if(isset($_REQUEST['submit'])){
        echo '<script>alert("'.$_COOKIE['user'].'")</script>';
        $ht = $_REQUEST['ht'];
        $ns = $_REQUEST['ns'];
        $cccd = $_REQUEST['cccd'];
        $sdt = $_REQUEST['sdt'];
        $email = $_REQUEST['email'];
        if($user->update($ht,$ns,$cccd,$sdt,$email))
            echo '<script>alert("cập nhật thành công")</script>';
        else
            echo '<script>alert("error")</script>';  
    }
?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title"><strong>Cập nhật cá nhân</strong></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="#" method="post">
            <div class="form-group">
                    <label for="exampleInputEmail1">Họ và tên</label>
                    <input type="text" class="form-control" name="ht" id="" value="<?php echo $user->getName(); ?>" placeholder="Nhập tên tiêu chí">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ngày sinh</label>
                    <input type="text" class="form-control" name="ns" id="" value="<?php echo $user->getNs(); ?>" placeholder="Nhập điểm tối da">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">CCCD</label>
                    <input type="text" class="form-control" name="cccd" id="" value="<?php echo $user->getCccd(); ?>" placeholder="Nhập tên tiêu chí">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">SĐT</label>
                    <input type="text" class="form-control" name="sdt" id="" value="<?php echo $user->getSdt(); ?>" placeholder="Nhập điểm tối da">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" name="email" id="" value="<?php echo $user->getEmail(); ?>" placeholder="Nhập điểm tối da">
                </div>
                <input type="submit" name="submit" id="submit" value="Cập nhật" class="btn btn-info">
            </div>
            </form>
    </div>
</div>