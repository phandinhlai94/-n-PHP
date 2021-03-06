<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Modern Business - Start Bootstrap Template</title>

    <?php require_once ("../Layout/Library.php"); ?>
    <?php require_once ("../../Controller/ctr_sanpham.php"); ?>


    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
</head>
<body style="color: white">
<?php
?>
<!-- Navigation -->
<?php require_once ("../Layout/Menu.php"); ?>

<!-- Header Carousel -->
<?php require_once ("../Layout/HeaderSlide.php"); ?>

<!-- Page Content -->
<div class="container" id="background_container">

    <?php
        //session_destroy();
        require_once ("Login.php");
    ?>

    <!-- Marketing Icons Section -->
    <div class="row">
        <div id="giohang">
            <a href="giohang.php">
                <h1><span class="badge" id="soluong">
                        <?php if(isset($_SESSION['gio'])){ echo count($_SESSION['gio']);}else echo "0";?>
                    </span><span class="glyphicon glyphicon-shopping-cart"></span ></h1>
            </a>
        </div>
        <div class="col-lg-12">
            <h1 class="page-header">SẢN PHẨM BÁN CHẠY
            </h1>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 style="text-align: center"><i class="glyphicon glyphicon-usd" ></i> 750000</h4>
                </div>
                <div class="panel-body" style="text-align: center; margin-top: -2px;">
                    <img src="../../Assets/image/quanthunnam.jpg" style="width: 200px; height:200px;">
                    <a href="datmuasanpham.php" class="btn btn-default btn-sm" style="background-color: #b9d042; width: 150px;">
                        <span class="glyphicon"> <h5> &#xe125; </h5></span> &nbsp;MUA NGAY
                    </a>

                    <div style="color: #761c19; font-size: 30px; margin-top: 3px;border: 1px solid #5e3a3e" title="Chọn size vào giỏ hàng">
                        <button class="btn btn-default btn-sm" onclick="ajax_giohang('SP02','X','750000')">X</button>
                        <button class="btn btn-default btn-sm" onclick="ajax_giohang('SP02','M','750000')">M</button>
                        <button class="btn btn-default btn-sm" onclick="ajax_giohang('SP02','L','750000')">L</button>
                        <button class="btn btn-default btn-sm" onclick="ajax_giohang('SP02','XL','750000')">XL</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 style="text-align: center"><i class="glyphicon glyphicon-usd" ></i> 1550000</h4>
                </div>
                <div class="panel-body" style="text-align: center; margin-top: -2px;">
                    <img src="../../Assets/image/aophongnu.jpg" style="width: 200px; height:200px;">
                    <a href="datmuasanpham.php" class="btn btn-default btn-sm" style="background-color: #b9d042; width: 150px;">
                        <span class="glyphicon"> <h5> &#xe125; </h5></span> &nbsp;MUA NGAY
                    </a>

                    <div style="color: #761c19; font-size: 30px; margin-top: 3px;border: 1px solid #5e3a3e" title="Chọn size vào giỏ hàng">
                        <button class="btn btn-default btn-sm" onclick="ajax_giohang('SP01','X','1550000')">X</button>
                        <button class="btn btn-default btn-sm" onclick="ajax_giohang('SP01','M','1550000')">M</button>
                        <button class="btn btn-default btn-sm" onclick="ajax_giohang('SP01','L','1550000')">L</button>
                        <button class="btn btn-default btn-sm" onclick="ajax_giohang('SP01','XL','1550000')">XL</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 style="text-align: center"><i class="glyphicon glyphicon-usd" ></i> 1450000</h4>
                </div>
                <div class="panel-body" style="text-align: center; margin-top: -2px;">
                    <img src="../../Assets/image/aophongnam.jpg" style="width: 200px; height:200px;">
                    <a href="datmuasanpham.php" class="btn btn-default btn-sm" style="background-color: #b9d042; width: 150px;">
                        <span class="glyphicon"> <h5> &#xe125; </h5></span> &nbsp;MUA NGAY
                    </a>

                    <div style="color: #761c19; font-size: 30px; margin-top: 3px;border: 1px solid #5e3a3e" title="Chọn size vào giỏ hàng">
                        <button class="btn btn-default btn-sm" onclick="ajax_giohang('SP01','X','1450000')">X</button>
                        <button class="btn btn-default btn-sm" onclick="ajax_giohang('SP01','M','1450000')">M</button>
                        <button class="btn btn-default btn-sm" onclick="ajax_giohang('SP01','L','1450000')">L</button>
                        <button class="btn btn-default btn-sm" onclick="ajax_giohang('SP01','XL','1450000')">XL</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 style="text-align: center"><i class="glyphicon glyphicon-usd" ></i> 2250000</h4>
                </div>
                <div class="panel-body" style="text-align: center; margin-top: -2px;">
                    <img src="../../Assets/image/quanbonam.jpg" style="width: 200px; height:200px;">
                    <a href="datmuasanpham.php" class="btn btn-default btn-sm" style="background-color: #b9d042; width: 150px;">
                        <span class="glyphicon"> <h5> &#xe125; </h5></span> &nbsp;MUA NGAY
                    </a>

                    <div style="color: #761c19; font-size: 30px; margin-top: 3px;border: 1px solid #5e3a3e" title="Chọn size vào giỏ hàng">
                        <button class="btn btn-default btn-sm" onclick="ajax_giohang('SP03','X','2250000')">X</button>
                        <button class="btn btn-default btn-sm" onclick="ajax_giohang('SP03','M','2250000')">M</button>
                        <button class="btn btn-default btn-sm" onclick="ajax_giohang('SP03','L','2250000')">L</button>
                        <button class="btn btn-default btn-sm" onclick="ajax_giohang('SP03','XL','2250000')">XL</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- /.row -->

    <!-- Portfolio Section -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">SẢN PHẨM</h2>
        </div>
        <?php
            if($arr_sp != null)
            while ($row = mysqli_fetch_assoc($arr_sp)){
                ?>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 style="text-align: center;">
                                <i class="glyphicon glyphicon-usd" ></i>
                                <span> <?php echo $row["GiaBan"]?> </span>
                            </h4>
                            <div style="text-align: center; font-size: 16px;"> <?php echo $row["Ten"]; ?></div>
                        </div>
                        <div class="panel-body" style="text-align: center">
                            <img src="../../Assets/image/<?php echo $row['Anh'];?>" style="width: 200px; height:200px;">
                            <a href="chititetsanpham.php?chitiet=<?php echo $row["Ma"]?>" class="btn btn-default btn-sm" style="background-color: #b9d042; width: 120px; margin-top: 2px; color: #760b0d" title="Mua Ngay">
                                <span class="glyphicon"> <h5> &#xe127; </h5></span> &nbsp;MUA NGAY
                            </a>
                            <div style="color: #761c19; font-size: 30px; margin-top: 3px;border: 1px solid #5e3a3e" title="Chọn size vào giỏ hàng">
                                <div id="showsize" style="color: black">
                                    <button class="btn btn-default btn-sm" onclick="ajax_giohang('<?php echo $row["Ma"];?>','X','<?php echo $row["GiaBan"];?>')" title="Thêm Vào Giỏ Hàng">X</button>
                                    <button class="btn btn-default btn-sm" onclick="ajax_giohang('<?php echo $row["Ma"];?>','M','<?php echo $row["GiaBan"];?>')" title="Thêm Vào Giỏ Hàng">M</button>
                                    <button class="btn btn-default btn-sm" onclick="ajax_giohang('<?php echo $row["Ma"];?>','L','<?php echo $row["GiaBan"];?>')" title="Thêm Vào Giỏ Hàng">L</button>
                                    <button class="btn btn-default btn-sm" onclick="ajax_giohang('<?php echo $row["Ma"];?>','XL','<?php echo $row["GiaBan"];?>')" title="Thêm Vào Giỏ Hàng">XL</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        ?>
    </div>
    <!-- /.row -->

    <!-- Features Section -->
    <div class="row" style="text-align: center">
        <div class="col-lg-12">
            <div class="box-footer clearfix">
                <ul class="pagination pagination-sm no-margin pull-right">

                    <?php
                    if(isset($trang)){
                        if($trang < 8){
                            if(isset($tr)){
                                $tien = $tr + 1;
                                if($tien > $trang) $tien = $trang;
                                $lui = $tr - 1;
                                if($lui == 0 ) $lui = 1;
                            }
                            echo "<li><a href='Home.php?trang=$lui'>«</a></li>";
                            for ($i=0;$i<$trang;$i++){
                                $j = $i +1;
                                echo "<li><a href='Home.php?trang=$j'>".$j."</a></li>";
                            }
                            echo "<li><a href='Home.php?trang=$tien'>»</a></li>";
                        }else {
                            if(isset($tr)){
                                $tien = $tr + 1;
                                if($tien > $trang) $tien = $trang;
                                $lui = $tr - 1;
                                if($lui == 0 ) $lui = 1;
                            }
                            echo "<li><a href='Home.php?trang=$lui'>«</a></li>";
                            if($tr < 4){
                                for ($i=$tr;$i<($tr+3);$i++){
                                    echo "<li><a href='Home.php?trang=$i'>".$i."</a></li>";
                                    if($i == ($tr+2)){
                                        echo "<li><a href='#'>.......</a></li>";
                                    }
                                }
                            }else  if($tr < ($trang-3)){
                                for ($i=$tr;$i<($tr+3);$i++){
                                    echo "<li><a href='Home.php?trang=$i'>".$i."</a></li>";
                                    if($i == ($tr+2)){
                                        echo "<li><a href='#'>.......</a></li>";
                                    }
                                }
                            }else{
                                for ($i=$trang-3;$i<$trang;$i++){
                                    echo "<li><a href='Home.php?trang=$i'>".$i."</a></li>";
                                }

                            }
                            echo "<li><a href='Home.php?trang=$trang'>".$trang."</a></li>";
                            echo "<li><a href='Home.php?trang=$tien'>»</a></li>";
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>

    </div>
    <!-- /.row -->

    <hr>

    <hr>
    <?php require_once ("../Layout/Footer.php"); ?>
</div>
</body>

</html>
