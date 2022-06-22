<?php 
    setcookie( "user", "", time()- 60, "/","", 0);
    if(isset($_REQUEST['user']) && isset($_REQUEST['pw'])){
        $login = loadModel('login');
        if($login->login($_REQUEST['user'],$_REQUEST['pw'])){
            setcookie("user", $_REQUEST['user'], time() + 3000, "/");
            echo '<script>
                alert("đăng nhập thành công")
                location.href = ".?option=home"
            </script>';
        }else
            echo '<script>
            alert("sai tài khoản hoặc mật khẩu")
        </script>';
    }
?>
<div class="page-container">
    <div class="page-title">
        <h2>CHÀO MỪNG BẠN ĐẾN VỚI TRANG CHẤM ĐIỂM RÈN LUYỆN CỦA SINH VIÊN</h2>
        <H1>TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT</H1>
    </div>
    <div class="page-login">
        <form action="" method="post" class="login">
            <center>
                <table class="login">
                    <tr>
                        <th colspan="2">ĐĂNG NHẬP</th>
                    </tr>
                    <tr>
                        <td>Tên đăng nhập: </td>
                        <td><input type="text" name="user" id="user" placeholder="tên đăng nhập"></td>
                    </tr>
                    <tr>
                        <td>Mật khẩu: </td>
                        <td><input type="text" name="pw" id="pw" placeholder="mật khẩu"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <center><input type="submit" value="đăng nhập" name="login" id="login" ></center>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><center><a href="">Quên mật khẩu?</a></center></td>
                    </tr>
                </table>
            </center>
        </form>
    </div>
</div>
<style>

</style>