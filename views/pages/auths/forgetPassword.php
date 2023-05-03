
<?php
    include $_SERVER['DOCUMENT_ROOT'].'/'.$domain.'/views/layouts/header.php';

?>

<div class="login-page-wrap">
        <div class="login-page-content">
            <div class="login-box">
                <div class="item-logo">
                <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/school/public/images/logo.jpg" alt="logo">
<style>
    .item-logo {
    width: 150px;
    position: relative;
    left: 95px;
}
button.login-btn {
    background: #086fb2 !important;
}
</style>
                </div>
                <form action="index.html" class="login-form">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" placeholder="Nhập vào email cần lấy lại mật khẩu" class="form-control">
                        <i class="far fa-envelope"></i>
                    </div>
                  
                    <div class="form-group">
                        <button type="submit" class="login-btn">Lấy lại mật khẩu</button>
                    </div>
                </form>
                <a href="./login" class="forgot-btn">Quay lại trang đăng nhập</a>
             
            </div>
          
        </div>
    </div>
