<?php
    include $_SERVER['DOCUMENT_ROOT'].'/'.$domain.'/views/layouts/header.php';
    include $_SERVER['DOCUMENT_ROOT'].'/'.$domain.'/views/layouts/navbar.php';
    include $_SERVER['DOCUMENT_ROOT'].'/'.$domain.'/views/layouts/sidebar.php';
?>

<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Sinh viên</h3>
        <ul>
            <li>
                <a href="../dashboard">Trang chú</a>
            </li>
            <li>Tất cả sinh viên</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Student Table Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Dữ liệu tất cả sinh viên</h3>
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
            <form class="mg-b-20">
                <div class="row gutters-8">
                    <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                        <input type="text" placeholder="Tìm theo MSV ..." class="form-control">
                    </div>
                    <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                        <input type="text" placeholder="Tìm theo tên ..." class="form-control">
                    </div>
                    <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                        <input type="text" placeholder="Tìm theo lớp ..." class="form-control">
                    </div>
                    <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">Tìm kiếm</button>
                    </div>
                </div>
            </form>
            <div class="table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                    <table class="table display data-table text-nowrap dataTable no-footer" id="DataTables_Table_0" role="grid">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" rowspan="1" colspan="1" aria-label="
                                            
                                                
                                    Mã SV
                                            
                                        " style="width: 85.7969px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input checkAll">
                                        <label class="form-check-label">MSV</label>
                                    </div>
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Photo: activate to sort column ascending" style="width: 42.4219px;">Hình ảnh</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 80.6875px;">Họ tên</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 51.625px;">Giới tính</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Class: activate to sort column ascending" style="width: 39.7031px;">Lớp</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Section: activate to sort column ascending" style="width: 54.0312px;">Section</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Parents: activate to sort column ascending" style="width: 95.6094px;">Parents</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending" style="width: 133.797px;">Địa chỉ</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date Of Birth: activate to sort column ascending" style="width: 92.1094px;">Sinh nhật</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 100.172px;">Số điện thoại</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="E-mail: activate to sort column ascending" style="width: 166.078px;">E-mail</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 47.5312px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                                     $studentM = new StudentM();
                                     $abc = $studentM->getStudent();
                                     $results = mysqli_fetch_assoc($abc);
                                   
                                     
                        ?>
                            <tr role="row" class="odd">
                                <td class="sorting_1">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <label class="form-check-label">#0021</label>
                                    </div>
                                </td>
                                <td class="text-center"><img src="img/figure/student2.png" alt="student">
                                </td>
                                <td>Mark Willy</td>
                                <td>Male</td>
                                <td>2</td>
                                <td>A</td>
                                <td>Jack Sparrow </td>
                                <td>TA-107 Newyork</td>
                                <td>02/05/2001</td>
                                <td>+ 123 9988568</td>
                                <td>kazifahim93@gmail.com</td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-cog" aria-hidden="true">Thao tác</i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                         
                        </tbody>
                    </table>
                    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous">Previous</a><span><a class="paginate_button current" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0">2</a></span><a class="paginate_button next" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" id="DataTables_Table_0_next">Next</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include $_SERVER[ 'DOCUMENT_ROOT']. '/'.$domain. '/views/layouts/footer.php'; ?>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                     