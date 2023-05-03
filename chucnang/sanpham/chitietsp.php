<link rel="stylesheet" type="text/css" href="css/chitietsp.css" />
<div class="prd-block">
    <div class="prd-only">
    <?php
        $id_sp = $_GET['id_sp'];
        $sql = "SELECT * FROM sanpham WHERE id_sp = $id_sp";
        $query = mysql_query($sql);
        $row = mysql_fetch_array($query);
    ?>
    	<div class="prd-img"><img width="50%" src="quantri/anh/<?php echo $row['anh_sp'] ?>" /></div>	
        <div class="prd-intro">
        	<h3><?php echo $row['ten_sp'] ?></h3>
            <p>Giá sản phẩm: <span><?php echo $row['gia_sp'] ?> VNĐ</span></p>
        	<table>
            	<tr>
                	<td width="30%"><span>Bảo hành:</span></td>
                    <td>• <?php echo $row['bao_hanh'] ?></td>
                </tr>
                <tr>
                	<td><span>Đi kèm:</span></td>
                    <td>• <?php echo $row['phu_kien'] ?></td>
                </tr>
                <tr>
                	<td><span>Tình trạng:</span></td>
                    <td>• <?php echo $row['tinh_trang'] ?></td>
                </tr>
                <tr>
                	<td><span>Khuyến Mại:</span></td>
                    <td>• <?php echo $row['khuyen_mai'] ?></td>
                </tr>
                <tr>
                	<td><span>Còn hàng:</span></td>
                    <td>• <?php echo $row['trang_thai'] ?></td>
                </tr>
            </table>
            <p class="add-cart"><a href="chucnang/giohang/themhang.php?id_sp=<?php echo $row['id_sp'] ?>"><span>đặt mua</span></a></p>
        </div>
        
        <div class="clear"></div>
        
        <div class="prd-details">
        <p><?php echo $row['chi_tiet_sp'] ?></p>
        </div>
    </div>
    
    <div class="prd-comment">
    <h3>Bình luận sản phẩm</h3>
    <form method="post">
    	<ul>
        	<li class="required">Tên <br /><input required type="text" name="ten" /></li>
            <li class="required">Số điện thoại <br /><input required type="text" name="dien_thoai" /></li>
            <li class="required">Nội dung <br /><textarea required name="binh_luan"></textarea></li>
            <li><input type="submit" name="submit" value="Bình luận" /></li>
        </ul>
    </form>
    </div>
    <?php
        if(isset($_POST['submit'])){
            $ten = $_POST['ten'];
            $dien_thoai = $_POST['dien_thoai'];
            $binh_luan = $_POST['binh_luan'];
            date_default_timezone_set('Asia/SaiGon');
            $ngay_gio = date('Y-m-d H:i:s');
            $sql = "INSERT INTO blsanpham (id_sp,ten,dien_thoai,binh_luan,ngay_gio) VALUES ($id_sp,'$ten','$dien_thoai','$binh_luan','$ngay_gio')";
            $query = mysql_query($sql);
        }
    ?>
    <div class="comment-list">
    <?php
        $sql = "SELECT * FROM blsanpham WHERE id_sp = $id_sp";
        $query = mysql_query($sql);
        while($row = mysql_fetch_array($query)){
    ?>
    	<ul>
        	<li class="com-title"><?php echo $row['ten'] ?><br />
            <span>
                <?php
                    $oriDate = $row['ngay_gio'];
                    $newDate = date('d-m-Y H:i:s',strtotime($oriDate));
                    echo $newDate;
                ?>
            </span></li>
            <li class="com-details"><?php
                echo $row['binh_luan'];
            ?></li>
        </ul>
    <?php
        }
    ?>
    </div>
    
    <div class="com-pagination"><span>1</span> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a></div>
    
</div>               
