<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vietpro Mobile Shop - Mua hàng thành công</title>
<link rel="stylesheet" type="text/css" href="css/trangchu.css" />

<link rel="stylesheet" type="text/css" href="css/hoanthanh.css" />

<link rel="stylesheet" type="text/css" href="css/slideshow.css" />

<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>

<script type="text/javascript">

/*** 
    Simple jQuery Slideshow Script
    Released by Jon Raasch (jonraasch.com) under FreeBSD license: free to use or modify, not responsible for anything, etc.  Please link out to me if you like it :)
***/

function slideSwitch() {
    var $active = $('#slideshow IMG.active');

    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

    // use this to pull the anh in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow IMG:first');

    // uncomment the 3 lines below to pull the anh in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch()", 2000 );
});

</script>

</head>
<body>

<!-- Wrapper -->
<div id="wrapper">
	<!-- Header -->
    <div id="header">
    	<div id="search-bar">
        	<form method="post" name="sform">
                <input type="submit" name="sbutton" value="" />
                <input type="text" name="stext" value="Tìm kiếm sản phầm" />
            </form>
            <div id="cart">
            	<p>Bạn đang có <span>01</span> sản phẩm</p>
                <p><a href="#">Chi tiết giỏ hàng</a></p>
            </div>	
        </div>
        <div id="main-bar">
        	<div id="logo"><a href="#"><img src="anh/logo.png" /></a></div>
            <div id="banner"></div>
        </div>
        <div id="navbar">
        	<ul>
            	<li id="menu-home"><a href="#">trang chủ</a></li>
                <li><a target="_blank" href="#">giới thiệu</a></li>
                <li><a target="_blank" href="#">dịch vụ</a></li>
                <li><a target="_blank" href="#">liên hệ</a></li>
                <li><a target="_blank" href="#">diễn đàn</a></li>
            </ul>
        </div>
    </div>
    <!-- End Header -->
    <!-- Body -->
    <div id="body">
    	<!-- Left Column -->
    	<div id="l-col">
        	<div class="l-sidebar">
            	<h2>tư vấn online</h2>
            	<ul id="hotline">
                	<li><span>Tư vấn 01</span><a class="yh" href="ymsgr:sendIM?daotaotructuyen01&amp;m=Xin chào!"><img border="0" alt="" src="http://opi.yahoo.com/online?u=daotaotructuyen01&amp;m=g&amp;t=1"></a></li>
                    <li><span>Tư vấn 02</span><a class="yh" href="ymsgr:sendIM?daotaotructuyen01&amp;m=Xin chào!"><img border="0" alt="" src="http://opi.yahoo.com/online?u=daotaotructuyen01&amp;m=g&amp;t=1"></a></li>
                    <li><span>Tư vấn 03</span><a class="yh" href="ymsgr:sendIM?daotaotructuyen01&amp;m=Xin chào!"><img border="0" alt="" src="http://opi.yahoo.com/online?u=daotaotructuyen01&amp;m=g&amp;t=1"></a></li>
                    <li><span>Tư vấn 04</span><a class="yh" href="ymsgr:sendIM?daotaotructuyen01&amp;m=Xin chào!"><img border="0" alt="" src="http://opi.yahoo.com/online?u=daotaotructuyen01&amp;m=g&amp;t=1"></a></li>
                </ul>
            </div>
            <div class="l-sidebar">
            	<h2>hãng điện thoại</h2>
            	<ul id="main-menu">
                	<li><a href="#">iPhone</a></li>
                    <li><a href="#">Samsung</a></li>
                    <li><a href="#">Sony Ericson</a></li>
                    <li><a href="#">LG</a></li>
                    <li><a href="#">HTC</a></li>
                    <li><a href="#">Nokia</a></li>
                    <li><a href="#">Blackberry</a></li>
                    <li><a href="#">Asus</a></li>
                    <li><a href="#">Lenovo</a></li>
                    <li><a href="#">Motorola</a></li>
                    <li><a href="#">Mobiado</a></li>
                    <li><a href="#">Vertu</a></li>
                    <li><a href="#">QMobile</a></li>
                </ul>
            </div>
            <div class="l-sidebar">
            	<h2>đối tác</h2>
            	<div class="l-banner"><a href="#"><img width="216" src="anh/banner01.png" /></a></div>
            </div>
            <div class="l-sidebar">
            	<h2>thống kê truy cập</h2>
                <div id="counter">
                	<p>Hiện có <span>8686</span> người đang xem</p>
                </div>
                
            </div>
            <!-- <div class="l-sidebar"></div> -->
        </div>
        <!-- End Left Column -->
        
        <!-- Right Column -->
        <div id="r-col">
        	<div id="slideshow">
            	<img src="anh/sls01.jpg" alt="Slideshow Image 1" class="active" />
                <img src="anh/sls02.png" alt="Slideshow Image 2" />
                <img src="anh/sls03.jpg" alt="Slideshow Image 3" />
                <img src="anh/sls04.jpg" alt="Slideshow Image 4" />
                <img src="anh/sls05.png" alt="Slideshow Image 5" />
                <img src="anh/sls06.png" alt="Slideshow Image 6" />
            </div>
            
            <div id="main">
            	<div class="prd-block">
                	<div class="ordered">
                    	<p class="ordered-report">Quý khách đã đặt hàng thành công!</p>
                        <p>• Hóa đơn mua hàng của Quý khách đã được chuyển đến Địa chỉ Email có trong phần Thông tin Khách hàng của chúng Tôi</p>
                        <p>• Sản phẩm của Quý khách sẽ được chuyển đến Địa có trong phần Thông tin Khách hàng của chúng Tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này.</p>
                        <p>• Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước khi giao hàng 24 tiếng</p>
                        <p align="center">Cám ơn Quý khách đã sử dụng Sản phẩm của Công ty chúng Tôi!</p>
                    </div>
                    <p id="return-home" align="right"><a href="#">Quay về trang chủ</a></p>
                </div>
            </div>
        </div>
        <!-- End Right Column -->
    	    
        <div id="brand"></div>
    </div>
    <!-- End Body -->
    <!-- Footer -->
    <div id="footer">
    	<div id="footer-info">
        	<h4>trung tâm tin học & công nghệ vietpro</h4>
            <p><span>Địa chỉ:</span> Tầng 5, Tòa nhà A4, Ngõ 120 Hoàng Quốc Việt - Cầu Giấy - Hà Nội | <span>Phone</span> (04) 3537 6697</p>
            <p><span>Trụ sở 2:</span> Số 25/178/71 Tây Sơn - Đống Đa - Hà Nội | <span>Hotline</span> 0968 511 155</p>
            <p>Bản quyền thuộc Vietpro Education</p>
        </div>
    </div>
    <!-- End Footer -->
</div>
<!-- End Wrapper -->

</body>
</html>
