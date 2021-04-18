<!-- email sai -->

  <?php 
      $message = isset($_GET["message"]) ? $_GET["message"] : "";
     ?>
     <?php if($message == "accountExists"): ?>
  
<script type="text/javascript">
  alert('Địa chỉ Email chưa đúng . Vui lòng nhập lại ');
    location.replace("index.php?controller=account&action=login");
</script>
  <div id="dropDownSelect1"></div>
  <?php endif; ?>



<!-- sai mat khẩu -->

  <?php 
      $message = isset($_GET["message"]) ? $_GET["message"] : "";
     ?>
     <?php if($message == "passwordExists"): ?>
  
<script type="text/javascript">
  alert('Mật khẩu không đúng. Vui lòng nhập lại');
    location.replace("index.php?controller=account&action=login");
</script>
  <div id="dropDownSelect1"></div>
  <?php endif; ?>



<!-- chưa xác thực recapcha -->

   <?php 
      $message = isset($_GET["message"]) ? $_GET["message"] : "";
     ?>
     <?php if($message == "recapchaExists"): ?>
  
<script type="text/javascript">
  alert('Chưa xác thực reCAPCHA . Vui lòng xác thực lại');
    location.replace("index.php?controller=account&action=login");
</script>
  <div id="dropDownSelect1"></div>
  <?php endif; ?>

<!-- đăng kí có tài khoản email tồn tại -->

<?php 
			$message = isset($_GET["message"]) ? $_GET["message"] : "";
		 ?>
		 <?php if($message == "emailExists"): ?>

<script type="text/javascript">
  alert('Tài khoản đã tồn tại. Vui lòng nhập lại');
  location.replace("index.php?controller=account&action=register");
</script>
  <div id="dropDownSelect1"></div>
<?php endif; ?>

<!-- đăng kí thành công -->

  <?php 
      $message = isset($_GET["message"]) ? $_GET["message"] : "";
     ?>
        <?php if($message == "registerSuccess"): ?>
      <script type="text/javascript">
  alert("Đăng kí thành công. Vui lòng đăng nhập để tiếp tục ");
  location.replace("index.php?controller=account&action=login");
</script>
        <?php endif; ?>
  <!-- chưa đăng nhập -->
  <?php 
      $message = isset($_GET["message"]) ? $_GET["message"] : "";
     ?>
        <?php if($message == "nologin"): ?>
      <script type="text/javascript">
  alert("Chưa đăng nhập. Không thể thanh toán!!! ");
  location.replace("index.php");
</script>
        <?php endif; ?>
