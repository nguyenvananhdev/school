<?php
    include $_SERVER['DOCUMENT_ROOT'].'/'.$domain.'/views/layouts/header.php';
    include $_SERVER['DOCUMENT_ROOT'].'/'.$domain.'/views/layouts/navbar.php';
    include $_SERVER['DOCUMENT_ROOT'].'/'.$domain.'/views/layouts/sidebar.php';
?>
<?php

    
    // Check if the form has been submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add'])) {
        include $_SERVER['DOCUMENT_ROOT'].'/'.$domain.'/models/StudentM.php';
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birthday'];
        $code = $_POST['code'];
        $department = $_POST['department'];
        $class = $_POST['class'];
        $years = $_POST['years'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $images =  $_POST['images'];
        $description =  $_POST['description'];
        $data = [
            "student_code" => "$code",
            "student_username" => "$username",
            "student_password" => "$password", 
            "student_birthday" => "$birthday", 
            "student_address" => "$address",
            "student_fullname" => "$fullname",
            "student_created" => "22/07/1999",
            "student_ip" => 123,
            "is_public" => 1,
            "student_gender" => "$gender",
            "student_department" => "$department",
            "student_class" => "$class",
            "student_years" => "$years",
            "student_email" => "$email",
            "student_phone" => "$phone",
            "student_image" => "$images",
            "student_description" => "$description",
        ];
        $studentM = new StudentM();
        $studentM-> addOneStudent($data);
        echo "<script>alert('Thêm sinh viên thành công ')</script>
        ";
    }
?>

<style>
    button.btn-fill-lg.btn-gradient-yellow.btn-hover-bluedark {
    background: #086fb2;
}

</style>
<div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Sinh viên</h3>
                    <ul>
                        <li>
                            <a href="../dashboard">Trang chủ</a>
                        </li>
                        <li>Thêm sinh viên</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Admit Form Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Thêm sinh viên mới</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Đóng</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Sửa</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class="new-added-form" method="POST">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Họ và tên *</label>
                                    <input type="text" name="fullname" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Tài khoản*</label>
                                    <input type="text" name="username" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Mật khẩu*</label>
                                    <input type="text" name="password" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Giới tính *</label>
                                    <select class="select2 select2-hidden-accessible" name="gender" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="3">Chọn giới tính *</option>
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                        <option value="Khác">Khác</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Ngày sinh *</label>
                                    <input type="text" placeholder="dd/mm/yyyy" name="birthday" class="form-control air-datepicker" data-position="bottom right">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Mã sinh viên *</label>
                                    <input type="text" name="code" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Khoa</label>
                                    <select class="select2 select2-hidden-accessible" name="department" data-select2-id="4" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="6">Lựa chọn khoa *</option>
                                        <option value="Công nghệ thông tin">Công nghệ thông tin</option>
                                        <option value="2">Công nghệ sinh học</option>
                                        <option value="3">Quản trị khách sạn</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Lớp</label>
                                    <select class="select2 select2-hidden-accessible" name="class" data-select2-id="7" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="6">Lựa chọn lớp</option>
                                        <option value="1">IT12.01</option>
                                        <option value="2">IT12.01</option>
                                        <option value="3">BIT12.01</option>
                               
                                    </select>
                                </div>
                                 
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Khóa học</label>
                                    <input type="text" name="years" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Địa chỉ *</label>
                                    <input type="text" name="address" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>E-Mail</label>
                                    <input type="email" name="email" placeholder="" class="form-control">
                                </div>
                             
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Điện thoại</label>
                                    <input type="text"name="phone" placeholder="" class="form-control">
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Mô tả</label>
                                    <textarea  class="textarea form-control" name="description" id="form-message" cols="10" rows="9"></textarea>
                                </div>
                                <div class="col-lg-6 col-12 form-group mg-t-30">
                                    <label class="text-dark-medium">Ảnh sinh viên (150px X 150px)</label>
                                    <input name="images" type="file" class="form-control-file">
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" name="add" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Lưu</button>
                                    <button type="reset" name ="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
             

    <?php include $_SERVER[ 'DOCUMENT_ROOT']. '/'.$domain. '/views/layouts/footer.php'; ?>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                              