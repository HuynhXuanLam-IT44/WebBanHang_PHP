<link rel="stylesheet" type="text/css" href="css/muahang.css" />

<div class="prd-block">
	<h2>xác nhận hóa đơn thanh toán</h2>
    <div class="payment">
    	<table border="0px" cellpadding="0px" cellspacing="0px" width="100%">
        	<tr id="invoice-bar">
            	<td width="45%">Tên Sản phẩm</td>
                <td width="20%">Giá</td>
                <td width="15%">Số lượng</td>
                <td width="20%">Thành tiền</td>
            </tr>
            <?php
                $arrId = array();
                //Lấy ra id sản phẩm từ mảng session
                foreach ($_SESSION['giohang'] as $id_sp => $sl) {
                    $arrId[] = $id_sp;
                }
                //Tách mảng arrId thành 1 chuỗi và ngăn cách bởi dấu ,
                $strID = implode(',', $arrId);
                $sql = "SELECT * FROM sanpham WHERE id_sp IN ($strID)";
                $query = mysql_query($sql);
                $totalPriceAll = 0;
                while($row = mysql_fetch_array($query)){
                $totalPrice = $_SESSION['giohang'][$row['id_sp']]*$row['gia_sp'];
            ?>
            <tr>
            	<td class="prd-name"><?php echo $row['ten_sp'] ?></td>
                <td class="prd-price"><?php echo $row['gia_sp'] ?> VNĐ</td>
                <td class="prd-number"><?php echo $_SESSION['giohang'][$row['id_sp']] ?></td>
                <td class="prd-total"><?php echo $totalPrice ?> VNĐ</td>
            </tr>
             <?php
                $totalPriceAll+=$totalPrice;
                }
            ?>
            <tr>
            	<td class="prd-name">Tổng giá trị hóa đơn là:</td>
                <td colspan="2"></td>
                <td class="prd-total"><span><?php echo $totalPriceAll ?> VNĐ</span></td>
            </tr>
        </table>

    </div>
    
    <div class="form-payment">
    	<form method="post">
    	<ul>
        	<li class="info-cus"><label>Tên khách hàng</label><br /><input required type="text" name="ten" /></li>
            <li class="info-cus"><label>Địa chỉ Email</label><br /><input required type="text" name="mail" /></li>
            <li class="info-cus"><label>Số Điện thoại</label><br /><input required type="text" name="dt" /></li>
            <li class="info-cus"><label>Địa chỉ nhận hàng</label><br /><input required type="text" name="dc" /></li>
            <li><input type="submit" name="submit" value="Xác nhận mua hàng" /> <input type="reset" name="reset" value="Làm lại" /></li>
        </ul>
        </form>
    </div>
</div>
<?php
    if(isset($ten) && isset($mail) && isset($dt) && isset($dc)){
    if(isset($_SESSION['giohang'])){
    $arrId = array();
    foreach($_SESSION['giohang'] as $id_sp=>$sl){
    $arrId[] = $id_sp;
    }
    $strId = implode(', ', $arrId);
    $sql = "SELECT * FROM sanpham WHERE id_sp IN($strId) ORDER BY id_sp
    DESC";
    $query = mysql_query($sql);
    }
    $strBody = '';
    // Thông tin Khách hàng
    $strBody = '<p>
    <b>Khách hàng:</b> '.$ten.'<br />
    <b>Email:</b> '.$mail.'<br />
    <b>Điện thoại:</b> '.$dt.'<br />
    <b>Địa chỉ:</b> '.$dc.'
    </p>';
    // Danh sách Sản phẩm đã mua
    $strBody .= ' <table border="1px" cellpadding="10px" cellspacing="1px"
    width="100%">
    <tr>
    <td align="center" bgcolor="#3F3F3F" colspan="4"><font
    color="white"><b>XÁC NHẬN HÓA ĐƠN THANH TOÁN</b></font></td>
    </tr>
    <tr id="invoice-bar">
    <td width="45%"><b>Tên Sản phẩm</b></td>
    <td width="20%"><b>Giá</b></td>
    <td width="15%"><b>Số lượng</b></td>
    <td width="20%"><b>Thành tiền</b></td>
    </tr>';
    $totalPriceAll = 0;
    while($row = mysql_fetch_array($query)){
    $totalPrice = $row['gia_sp']*$_SESSION['giohang'][$row['id_sp']];
    $strBody .= '<tr>
    <td class="prd-name">'.$row['ten_sp'].'</td>
    <td class="prd-price"><font color="#C40000">'.$row['gia_sp'].'
    VNĐ</font></td>
    <td class="prd-number">'.$_SESSION['giohang'][$row['id_sp']].'</td>
    <td class="prd-total"><font color="#C40000">'.$totalPrice.'
    VNĐ</font></td>
    </tr>';
    $totalPriceAll += $totalPrice;
    }
    $strBody .= '<tr>
    <td class="prd-name">Tổng giá trị hóa đơn là:</td>
    <td colspan="2"></td>
    <td class="prd-total"><b><font color="#C40000">'.$totalPriceAll.'
    VNĐ</font></b></td>
    </tr>
    </table>';
    $strBody .= '<p align="justify">
    <b>Quý khách đã đặt hàng thành công!</b><br />
    • Sản phẩm của Quý khách sẽ được chuyển đến Địa chỉ có trong phần
    Thông tin Khách hàng của chúng Tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này.<br
    />
    • Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước
    khi giao hàng 24 tiếng.<br />
    <b><br />Cám ơn Quý khách đã sử dụng Sản phẩm của Công ty chúng
    Tôi!</b>
    </p>';
    // Thiết lập cấu hình PHP mailer để gửi Email
    require("class.phpmailer.php"); // nạp thư viện
    $mailer = new PHPMailer(); // khởi tạo đối tượng
    $mailer->IsSMTP(); // gọi class smtp để đăng nhập
    $mailer->CharSet="utf-8"; // bảng mã unicode
    //Đăng nhập Gmail
    $mailer->SMTPAuth = true; // Đăng nhập
    $mailer->SMTPSecure = "ssl"; // Giao thức SSL
    $mailer->Host = "smtp.gmail.com"; // SMTP của GMAIL
    $mailer->Port = 465; // cổng SMTP
    // Phải chỉnh sửa lại
    $mailer->Username = "www.vietpro.edu.vn@gmail.com"; // GMAIL username
    $mailer->Password = "vietpro123"; // GMAIL password
    $mailer->AddAddress($mail, $ten); //email người nhận
    $mailer->AddCC("sirtuanhoang@gmail.com", "Admin Vietpro Shop"); // gửi thêm một email cho Admin
    // Chuẩn bị gửi thư nào
    $mailer->FromName = 'Vietpro Shop'; // tên người gửi
    $mailer->From = 'www.vietpro.edu.vn5@gmail.com'; // mail người gửi
    $mailer->Subject = 'Hóa đơn xác nhận mua hàng từ Vietpro Shop';
    $mailer->IsHTML(TRUE); //Bật HTML không thích thì false
    // Nội dung lá thư
    $mailer->Body = $strBody;
    // Gửi email
    if(!$mailer->Send()){
    // Gửi không được, đưa ra thông báo lỗi
    echo "Lỗi gửi Email: " . $mailer->ErrorInfo;
    }
    else{
    // Gửi thành công
    header('location:index.php?page_layout=hoanthanh');
    }
}
?>
