
<!-- load file layout chung -->
<?php $this->layoutPath = "LayoutTrangTrong.php"; ?>
<?php if(isset($_POST["size"])) { echo $_POST["size"]; } ?>
<?php if($this->cartNumber() > 0): ?>
<div class="template-cart">
  <form action="index.php?controller=cart&action=update" method="post">
    <div class="table-responsive">
      <table class="table table-cart" border="1" style="margin-left: 280px; margin-top: 100px;font-family: time news roman;font-size: 17px; color: black; border: 3px solid">
        <thead >
          <tr bgcolor="pink">
            <th class="image" style="padding:8px 22px 8px 22px;">Ảnh sản phẩm</th>
            <th class="name" style="padding:8px 22px 8px 22px; width: 180px;">Tên sản phẩm</th>
             <th class="size" style="padding:8px 18px 8px 18px;width: 35px;">Size</th>
            <th class="price" style="padding:8px 22px 8px 22px;width: 110px;">Giá bán lẻ</th>
            <th class="quantity" style="padding:8px 22px 8px 22px;">Số lượng</th>
            <th class="price" style="padding:8px 22px 8px 22px;width: 110px;">Thành tiền</th>
            <th style="padding:8px 22px 8px 22px; width: 60px;">Xóa</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($_SESSION["cart"] as $rows): ?>
          <tr>
            <td style="text-align: center;"><img src="../assets/upload/products/<?php echo $rows["photo"] ?>" class="img-responsive" style="width: 130px; height: 90px;padding:0px 10px 0px 10px;" /></td>
            <td style="text-align: center;"><a href="index.php?controller=products&action=detail&id=<?php echo $rows["id"]; ?>" style="padding: 7px;color: black; text-decoration: none;"><?php echo $rows["name"] ?></a></td>
            
            <td style="text-align: center;"><?php echo $rows["size"]; ?></td>
          
            <td style="text-align: center;"> <?php echo number_format($rows["giamoi"]); ?>₫ </td>
            <td style="text-align: center;"><input type="number" id="qty" min="1" class="input-control" value="<?php echo $rows["number"] ?>" name="product_<?php echo $rows["id"] ?>" required="Không thể để trống" style="height: 25px; width: 50px; text-align: center;"></td>
            <td style="text-align: center;"><p><b><?php echo number_format($rows["number"]*($rows["giamoi"])); ?>₫</b></p></td>
            <td style="text-align: center;"><a href="index.php?controller=cart&action=delete&id=<?php echo $rows["id"]; ?>" data-id="2479395"><i class="fa fa-trash"></i></a></td>
          </tr>
         <?php endforeach; ?> 
        </tbody>
        <tfoot>
          <tr>
            <td colspan="7"><a href="index.php?controller=cart&action=destroy" class="button pull-left" style="border: 1px solid white; background: #1f4140; color: white; padding: 5px; border-radius: 7px; text-decoration: none; margin-top: 5px; margin-bottom: 5px; margin-left: 10px;">Xóa toàn bộ</a> <a href="index.php" class="button pull-right black" style="border: 1px solid white; background: #1f4140; color: white; padding: 5px; border-radius: 7px; text-decoration: none; margin-top: 5px; margin-bottom: 5px; margin-right:10px;">Tiếp tục mua hàng</a>
              <input type="submit" class="button pull-right" value="Cập nhật" style="background: green; color: white; padding: 7px; margin-top: 5px; border: 1px solid black; border-radius: 7px; margin-right: 5px;"></td>
          </tr>
        </tfoot>
      </table>
    </div>
  </form>
  <div class="total-cart" style="margin-left: 1050px; margin-top: 20px; font-size: 19px; font-family: time news roman; margin-bottom: 150px;"> Tổng tiền thanh toán :
    <b style="font-size: 23px;"><?php echo number_format($this->cartTotal()); ?>₫</b> <br>
    <br>
    <a href="index.php?controller=cart&action=checkOut" class="button black" style="margin-left: 150px; color: white; border: 1px solid red; background: red; border-radius: 12px; text-decoration: none; padding: 10px;">Thanh toán</a> </div>
</div>
<?php endif; ?>