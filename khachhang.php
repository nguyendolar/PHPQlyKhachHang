
<!DOCTYPE html>
<html lang="en">

<head>
<?php include('inc/head.php')?>
</head>

<body class="sb-nav-fixed">
<?php include('inc/header.php')?>
    <div id="layoutSidenav">
    <?php include('inc/menu.php')?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Danh sách khách hàng</h1>
                    
                    <div class="card mb-4">
                        <div class="card-header">
                        <?php if (isset($_GET['msg']) && ($_GET['msg'] = 1)){ ?>
                             <div class="alert alert-success">
                                <strong>Thành công</strong>
                            </div>
                            <?php }  ?>    
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#exampleModalAdd">
                                Thêm mới
                            </button>
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Họ tên</th>
                                        <th>Giới tính</th>
                                        <th>Email</th>
                                        <th>Địa chỉ</th>
                                        <th>Thao tác</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Họ tên</th>
                                        <th>Giới tính</th>
                                        <th>Email</th>
                                        <th>Địa chỉ</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                <?php 
                                   
                                   $query = "SELECT * FROM nguoidung WHERE role = 1 ORDER BY id DESC";
                                   $result = mysqli_query($connect, $query);
                                   $stt = 1;
                                   while ($arUser = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                       $idModelDel = "exampleModalDel".$arUser["id"] ;
                                       $idModelEdit = "exampleModalEdit".$arUser["id"];
                                       $idModelInfor = "exampleModalInfor".$arUser["id"];
                                       $time = date_create($arUser["ngaysinh"]);
                                       $ngay = date_format($time,"Y-m-d");
                                   ?>
                                    <tr>
                                        <td><?php echo $stt ?></td>
                                        <td><?php echo $arUser["hoten"] ?></td>
                                        <td><?php echo $arUser["gioitinh"] ?></td>
                                        <td><?php echo $arUser["email"] ?></td>
                                        <td><?php echo $arUser["diachi"] ?></td>
                                        <td>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#<?php echo $idModelInfor ?>">
                                                Chi tiết
                                            </button>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#<?php echo $idModelEdit ?>">
                                                Cập nhập
                                            </button>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#<?php echo $idModelDel ?>">
                                                Xóa
                                            </button>
                                            <!--Detail-->
                                            <div class="modal fade" id="<?php echo $idModelInfor ?>" tabindex="-1"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Chi tiết</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                           
                                                
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="">
                                                            <label for="category-film"
                                                                   class="col-form-label" style="font-weight:bold;width : 100px">Họ tên</label>
                                                           <strong>:</strong>&emsp;&emsp;<?php echo $arUser["hoten"] ?>
                                                        </div>
                                                        <div class="">
                                                            <label for="category-film"
                                                                   class="col-form-label" style="font-weight:bold;width : 100px">Giới tính</label>
                                                                   <strong>:</strong>&emsp;&emsp;<?php echo $arUser["gioitinh"] ?>
                                                        </div>

                                                        <div class="">
                                                            <label for="category-film"
                                                                   class="col-form-label" style="font-weight:bold;width : 100px">Ngày sinh</label>
                                                                   <strong>:</strong>&emsp;&emsp;<?php echo $arUser["ngaysinh"] ?>
                                                        </div>

                                                        <div class="">
                                                            <label for="category-film"
                                                                   class="col-form-label" style="font-weight:bold;width : 100px">Số điện thoại</label>
                                                                   <strong>:</strong>&emsp;&emsp;0<?php echo $arUser["sodienthoai"] ?> 
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="">
                                                            <label for="category-film"
                                                                   class="col-form-label" style="font-weight:bold;width : 100px">Email</label>
                                                                   <strong>:</strong>&emsp;&emsp;<?php echo $arUser["email"] ?>
                                                        </div>
                                                        <div class="">
                                                            <label for="category-film"
                                                                   class="col-form-label" style="font-weight:bold;width : 100px">Địa chỉ</label>
                                                                   <strong>:</strong>&emsp;&emsp;<?php echo $arUser["diachi"] ?>
                                                        </div>
                                                        <div class="">
                                                            <label for="category-film"
                                                                   class="col-form-label" style="font-weight:bold;width : 100px">Nghề nghiệp</label>
                                                                   <strong>:</strong>&emsp;&emsp;<?php echo $arUser["nghenghiep"] ?>
                                                        </div>
                                                        <div class="">
                                                            <label for="category-film"
                                                                   class="col-form-label" style="font-weight:bold;width : 100px">Số CMND</label>
                                                                   <strong>:</strong>&emsp;&emsp;<?php echo $arUser["socmnd"] ?>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                           
                                        </div>

                                    </div>
                                </div>
                            </div>
                                            <!--Dele-->
                                            <div class="modal fade" id="<?php echo $idModelDel ?>" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Bạn chắc chắn muốn xóa ?</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            Khách hàng : <?php echo $arUser["hoten"] ?>
                                                            <form action="function.php" method="post">
                                                                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $arUser["id"] ?>">
                                                                <div class="modal-footer" style="margin-top: 20px">
                                                                    <button style="width:100px" type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">
                                                                        Đóng
                                                                    </button>
                                                                    <button style="width:100px" type="submit" class="btn btn-danger" name="deletenguoidung"> Xóa</button>

                                                                </div>

                                                            </form>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--Dele-->
                                        </td>

                                    </tr>
                                    <div class="modal fade" id="<?php echo $idModelEdit ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Cập nhập</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="function.php" method="POST" >
                                                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $arUser["id"] ?>">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Họ tên:</label>
                                                                <input type="text" class="form-control" id="category-film" name="hoten" value="<?php echo $arUser["hoten"] ?>" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Giới tính:</label>
                                                                    <select class="form-select" aria-label="Default select example" id="theloai" name="gioitinh" required>
                                                                        <option value="<?php echo $arUser["gioitinh"] ?>" selected><?php echo $arUser["gioitinh"] ?> </option>
                                                                        <option value="Nam">Nam </option>
                                                                        <option value="Nữ" >Nữ</option>
                                                                    </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Ngày sinh:</label>
                                                                <input type="date" class="form-control" id="category-film" name="ngaysinh" value="<?php echo $ngay ?>" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Số điện thoại:</label>
                                                                <input type="number" class="form-control" id="category-film" name="sodienthoai" value="0<?php echo $arUser["sodienthoai"] ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Email:</label>
                                                                <input type="email" class="form-control" id="category-film" name="email" value="<?php echo $arUser["email"] ?>" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Địa chỉ:</label>
                                                                <input type="text" class="form-control" id="category-film" name="diachi" value="<?php echo $arUser["diachi"] ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                        <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Nghề nghiệp:</label>
                                                                <input type="text" class="form-control" id="category-film" name="nghenghiep" value="<?php echo $arUser["nghenghiep"] ?>" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Số CMND:</label>
                                                                <input type="number" class="form-control" id="category-film" name="socmnd" value="<?php echo $arUser["socmnd"] ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="editkhachhang">Lưu</button>
                                                </div>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Update-->
                                    <?php $stt++;} ?>
                                    <!-- Modal Add-->
                                    <div class="modal fade" id="exampleModalAdd" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Thêm mới</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="function.php" method="POST">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Họ tên:</label>
                                                                <input type="text" class="form-control" id="category-film" name="hoten" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Giới tính:</label>
                                                                    <select class="form-select" aria-label="Default select example" id="theloai" name="gioitinh" required>
                                                                        <option value="Nam" selected>Nam </option>
                                                                        <option value="Nữ" >Nữ</option>
                                                                    </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Ngày sinh:</label>
                                                                <input type="date" class="form-control" id="category-film" name="ngaysinh" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Số điện thoại:</label>
                                                                <input type="number" class="form-control" id="category-film" name="sodienthoai" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Email:</label>
                                                                <input type="email" class="form-control" id="category-film" name="email" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Địa chỉ:</label>
                                                                <input type="text" class="form-control" id="category-film" name="diachi" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                        <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Nghề nghiệp:</label>
                                                                <input type="text" class="form-control" id="category-film" name="nghenghiep" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Số CMND:</label>
                                                                <input type="number" class="form-control" id="category-film" name="socmnd" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="addkhachhang">Lưu </button>
                                                </div>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Update-->

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <?php include('inc/footer.php')?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>