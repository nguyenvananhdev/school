
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
                        <label>Tài khoản</label>
                        <input type="text" placeholder="Nhập tài khoản" class="form-control">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="text" placeholder="Nhập mật khẩu" class="form-control">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember-me">
                            <label for="remember-me" class="form-check-label">Nhớ tôi</label>
                        </div>
                        <a href="./forgetPassword" class="forgot-btn">Quên mật khẩu?</a>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="login-btn">Đăng nhập</button>
                    </div>
                </form>
              
            </div>
           
        </div>
    </div>
