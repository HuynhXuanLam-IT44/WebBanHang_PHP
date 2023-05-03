<?php
    session_start();
    include_once('ketnoi.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vietpro Mobile Shop - Trang chủ quản trị</title>
<link rel="stylesheet" type="text/css" href="css/quantri.css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
    	<div id="navbar">
        	<ul>
            	<li id="admin-home"><a href="quantri.php">trang chủ quản trị</a></li>
                <li><a href="quantri.php?page_layout=thanhvien">thành viên</a></li>
                <li><a href="quantri.php?page_layout=danhmucsp">danh mục sản phẩm</a></li>
                <li><a href="quantri.php?page_layout=danhsachsp">sản phẩm</a></li>
                <li><a target="_blank" href="#">xem website</a></li>
            </ul>
            <div id="user-info">
            	<p>Xin chào <span><?php echo $_SESSION['tk'];?></span> đã đăng nhập vào hệ thống</p>
                <p><a href="dangxuat.php">Đăng xuất</a></p>
            </div>
        </div>
        <div id="banner">
        	<div id="logo"><a href="#"><img src="anh/logo.png" /></a></div>
        </div>
    </div>
    <div id="body">
       <?php
      if(isset($_GET['page_layout'])){
        switch ($_GET['page_layout']){
           case 'themsp': include_once('themsp.php');break;
           case 'suasp': include_once('suasp.php');break;
           case 'danhsachsp': include_once('danhsachsp.php');break;
           
        }
    }else{
        include_once('gioithieu.php');
    }
       ?>	
    
    </div>
    <div id="footer">
    	<div id="footer-info">
        	<h4>trung tâm công nghệ web vietpro</h4>
            <p><span>Địa chỉ:</span> Tầng 5, Tòa nhà A4, Ngõ 120 Hoàng Quốc Việt - Cầu Giấy - Hà Nội | <span>Phone</span> (04) 3537 6697</p>
            <p><span>Trụ sở 2:</span> Số 25/178/71 Tây Sơn - Đống Đa - Hà Nội | <span>Hotline</span> 0968 511 155</p>
            <p>Bản quyền thuộc Vietpro Education</p>
        </div>
    </div>
</div>
</body>
</html>
