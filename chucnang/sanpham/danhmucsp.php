<div class="l-sidebar">
	<h2>hãng điện thoại</h2>
	<ul id="main-menu">
    <?php
        $sql = "SELECT * FROM dmsanpham";
        $query = mysql_query($sql);
        while($row = mysql_fetch_array($query)){
    ?>
    	<li><a href="index.php?page_layout=danhsachsp&id_dm=<?php echo $row['id_dm'] ?>&ten_dm=<?php echo $row['ten_dm'] ?>"><?php echo $row['ten_dm'] ?></a></li>
    <?php
        }
    ?>
    </ul>
</div>