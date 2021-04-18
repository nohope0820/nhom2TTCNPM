<?php $this->layoutPath = "LayoutTrangTrong.php"; ?>
<div style="background: url(../assets/frontend/images/banner1.jpg)no-repeat;
background-attachment: fixed;
    background-position: center;
    background-size: cover;
    width: 1330px;
    margin-left: 100px;
    border-radius: 20px;
padding-bottom: 130px;
margin-bottom: -20px;
   ">
<div style="margin-top: 30px; margin-left: 50px; font-size: 22px; font-weight: bold; font-family: times new roman;text-decoration: underline; padding-top: 20px; color: yellow;">Quá trình giao hàng</div>
<div class="process" style="margin-top: 90px; margin-left: 175px;">
	<ul style="list-style: none;">
		<li><a href="index.php?controller=process&action=choGiaoHang"><b style="text-decoration: underline;color:yellow">Chờ giao hàng</b></a></li>
		<li><a href="index.php?controller=process&action=daGiaoHang">Đang giao hàng</a></li>
    <li><a href="index.php?controller=process&action=daNhanHang">Đã nhận hàng</a></li>
	</ul>
</div>
<style type="text/css">
	.process > ul > li{display: inline-block;
	        font-size: 18px;
	        font-weight: bold;
	        font-family: times new roman;}
	.process > ul > li{
		border-right: 1px solid;
	}
	.process > ul > li:last-child{
		border-right: 0px;
	}
	.process > ul > li >a {
		padding: 10px;
		text-decoration: none; 
		color:white;
	}
	.process > ul > li >a:hover{
		color: yellow;
}
</style>
 <table class="table table-cart" border="1" style="margin-left: 130px; margin-top: 20px;font-family: time news roman;font-size: 17px; color: black; border: 3px solid" bgcolor="white">
       <thead>
          <tr bgcolor="pink" style="border:3px solid green;">
            <th style="padding:8px 22px 8px 22px;">Ảnh sản phẩm</th>
            <th style="padding:8px 16px 8px 16px; width: 160px;">Tên sản phẩm</th>
            <th style="padding:8px 10px 8px 10px; width: 30px;">Size</th>
            <th style="padding:8px 22px 8px 22px;width: 150px;">Địa chỉ</th>
            <th style="padding:8px 10px 8px 10px;width: 100px;">Số điện thoại</th>
            <th style="padding:8px 10px 8px 10px;width: 80px;">Số lượng</th>
            <th style="padding:8px 22px 8px 22px;width: 100px;">Giá bán lẻ</th>
            <th style="padding:8px 10px 8px 10px; width: 75px;">Hủy hàng</th>
          </tr>
      </thead>
          <?php $processProducts = $this->modelChoGiaoHang(); ?>  
          <tbody>    
               <?php foreach ($processProducts as $rows): ?>
          <tr>
          	<td style="text-align: center;"><img src="../assets/upload/products/<?php echo $rows->anh; ?>" class="img-responsive" style="width: 130px; height: 90px;padding:0px 10px 0px 10px;" /></td>
          	<td style="text-align: center;"><a style="padding: 7px;color: black; text-decoration: none;"><?php echo $rows->tensp; ?></a></td>
            <td style="text-align: center;"><?php echo $rows->size; ?></td>
            <td style="text-align: center;"><?php echo $rows->diachi; ?></td>
            <td style="text-align: center;"><?php echo $rows->sdt; ?></td>
            <td style="text-align: center;"><?php echo $rows->sl; ?></td>
            <td style="text-align: center;"><p><b><?php echo number_format($rows->thanhtien); ?>₫</b></p></td>
            <td style="text-align: center;"><a href="index.php?controller=process&action=delete&id=<?php echo $rows->id; ?>"><i class="fa fa-trash"></i></a></td>
        
          </tr>
         <?php endforeach; ?> 
     </tbody>
     <tfoot>
          <tr>
            <td colspan="8">
              Tổng giá trị: <b style="font-size: 23px;"><?php echo number_format($this->cartTotal()); ?>₫</b>
          </tr>
        </tfoot>
        </table>
      </div>
