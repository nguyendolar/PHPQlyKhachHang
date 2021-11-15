
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
                    <h1 class="mt-4">Danh sách đại lý</h1>
                    
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
                                        <th>Tên đại lý</th>
                                        <th>Chủ sỡ hữu</th>
                                        <th>Số điện thoại</th>
                                        <th>Mã hợp đồng</th>
                                        <th>Thao tác</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên đại lý</th>
                                        <th>Chủ sỡ hữu</th>
                                        <th>Số điện thoại</th>
                                        <th>Mã hợp đồng</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                <?php 
                                   
                                   $query = "SELECT * FROM daily ORDER BY id DESC";
                                   $result = mysqli_query($connect, $query);
                                   $stt = 1;
                                   while ($arUser = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                       $idModelDel = "exampleModalDel".$arUser["id"] ;
                                       $idModelEdit = "exampleModalEdit".$arUser["id"];
                                       $idModelInfor = "exampleModalInfor".$arUser["id"];
                                       $time = date_create($arUser["ngaydangky"]);
                                       $ngay = date_format($time,"Y-m-d");
                                   ?>
                                    <tr>
                                        <td><?php echo $stt ?></td>
                                        <td><?php echo $arUser["tendaily"] ?></td>
                                        <td><?php echo $arUser["chusohuu"] ?></td>
                                        <td>0<?php echo $arUser["sodienthoai"] ?></td>
                                        <td><?php echo $arUser["hopdong"] ?></td>
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
                                                                   class="col-form-label" style="font-weight:bold;width : 88px">Tên đại lý</label>
                                                           <strong>:</strong>&emsp;&emsp;<?php echo $arUser["tendaily"] ?>
                                                        </div>
                                                        <div class="">
                                                            <label for="category-film"
                                                                   class="col-form-label" style="font-weight:bold;width : 88px">Chủ sở hữu</label>
                                                                   <strong>:</strong>&emsp;&emsp;<?php echo $arUser["chusohuu"] ?>
                                                        </div>

                                                        <div class="">
                                                            <label for="category-film"
                                                                   class="col-form-label" style="font-weight:bold;width : 88px">Địa chỉ</label>
                                                                   <strong>:</strong>&emsp;&emsp;<?php echo $arUser["diachi"] ?>
                                                        </div>

                                                        <div class="">
                                                            <label for="category-film"
                                                                   class="col-form-label" style="font-weight:bold;width : 88px">Số điện thoại</label>
                                                                   <strong>:</strong>&emsp;&emsp;0<?php echo $arUser["sodienthoai"] ?> 
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="">
                                                            <label for="category-film"
                                                                   class="col-form-label" style="font-weight:bold;width : 143px">Email</label>
                                                                   <strong>:</strong>&emsp;&emsp;<?php echo $arUser["email"] ?>
                                                        </div>
                                                        <div class="">
                                                            <label for="category-film"
                                                                   class="col-form-label" style="font-weight:bold;width : 143px">Mặt hàng kinh doanh</label>
                                                                   <strong>:</strong>&emsp;&emsp;<?php echo $arUser["nganhban"] ?>
                                                        </div>
                                                        <div class="">
                                                            <label for="category-film"
                                                                   class="col-form-label" style="font-weight:bold;width : 143px">Ngày đăng ký</label>
                                                                   <strong>:</strong>&emsp;&emsp;<?php echo $arUser["ngaydangky"] ?>
                                                        </div>
                                                        <div class="">
                                                            <label for="category-film"
                                                                   class="col-form-label" style="font-weight:bold;width : 143px">Mã hợp đồng</label>
                                                                   <strong>:</strong>&emsp;&emsp;<?php echo $arUser["hopdong"] ?>
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
                                                            Đại lý : <?php echo $arUser["tendaily"] ?>
                                                            <form action="function.php" method="post">
                                                                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $arUser["id"] ?>">
                                                                <div class="modal-footer" style="margin-top: 20px">
                                                                    <button style="width:100px" type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">
                                                                        Đóng
                                                                    </button>
                                                                    <button style="width:100px" type="submit" class="btn btn-danger" name="deletedl"> Xóa</button>

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
                                                                    class="col-form-label">Tên đại lý:</label>
                                                                <input type="text" class="form-control" id="category-film" name="tendl" value="<?php echo $arUser["tendaily"] ?>" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Chủ sở hữu:</label>
                                                                    <input type="text" class="form-control" id="category-film" name="chush" value="<?php echo $arUser["chusohuu"] ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Địa chỉ:</label>
                                                                <input type="text" class="form-control" id="category-film" name="diachi" value="<?php echo $arUser["diachi"] ?>" required>
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
                                                                    class="col-form-label">Mặt hàng kinh doanh:</label>
                                                                <input type="text" class="form-control" id="category-film" name="nganhban" value="<?php echo $arUser["nganhban"] ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                        <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Ngày đăng ký:</label>
                                                                <input type="date" class="form-control" id="category-film" name="ngaydk" value="<?php echo $ngay ?>" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Mã hợp đồng:</label>
                                                                <input type="number" class="form-control" id="category-film" name="mahd" value="<?php echo $arUser["hopdong"] ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="editdl">Lưu</button>
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
                                                                    class="col-form-label">Tên đại lý:</label>
                                                                <input type="text" class="form-control" id="category-film" name="tendl" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Chủ sở hữu:</label>
                                                                    <input type="text" class="form-control" id="category-film" name="chush" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Địa chỉ:</label>
                                                                <input type="text" class="form-control" id="category-film" name="diachi" required>
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
                                                                    class="col-form-label">Mặt hàng kinh doanh:</label>
                                                                <input type="text" class="form-control" id="category-film" name="nganhban" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                        <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Ngày đăng ký:</label>
                                                                <input type="date" class="form-control" id="category-film" name="ngaydk" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Mã hợp đồng:</label>
                                                                <input type="number" class="form-control" id="category-film" name="mahd" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="adddl">Lưu </button>
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