
    <?php $this->layoutPath = "LayoutTrangTrong.php"; ?>
<div class="row" style="margin-top: 30px;">
  <div class="col-md-12">
    <?php 
      $message = isset($_GET["message"]) ? $_GET["message"] : "";
     ?>
        <?php if($message == "registerSuccess"): ?>
      <script type="text/javascript">
  alert("Đăng kí thành công. Vui lòng đăng nhập để tiếp tục ");
  location.replace("index.php?controller=account&action=login");
</script>
        <?php endif; ?>
    <?php if($message == "checkOutSuccess"): ?>
     <div style="background: url(../assets/frontend/images/banner1.jpg)no-repeat;
background-attachment: fixed;
    background-position: center;
    background-size: cover;
    width: 1330px;
    margin-left: 100px;
    border-radius: 20px;
padding-bottom: 130px;
margin-bottom: -25px;
margin-top: 30px;
   ">
     <div class="alert alert-danger" style="margin-left: 470px; margin-bottom: 250px; font-size: 28px; padding-top: 145px; color: yellow; font-weight: bold;">Thanh toán thành công!
     <p style="font-size: 14px;font-weight:initial;padding-top: 15px;color: white;">Xem quá trình store giao hàng <a href="index.php?controller=process&action=choGiaoHang" style="color: yellow; font-weight: bold; text-decoration: underline; "> Tại đây</a></p></div>
    </div>
    <?php endif; ?>
	</div>
</div>


