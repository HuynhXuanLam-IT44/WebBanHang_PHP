<div id="cart">
	<p>Bạn đang có <span>
		<?php
		if(isset($_SESSION['giohang'])){
			echo count($_SESSION['giohang']);
		}else{
			echo 0;
		}
		?>
	</span> sản phẩm</p>
    <p><a href="index.php?page_layout=giohang">Chi tiết giỏ hàng</a></p>
</div>	