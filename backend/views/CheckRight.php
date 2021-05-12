<?php 
      $message = isset($_GET["message"]) ? $_GET["message"] : "";
     ?>
     <?php if($message == "noRight"): ?>
  
<script type="text/javascript">
  alert('Bạn không có quyền truy cập vào đây ');
    location.replace("index.php");
</script>
  <div id="dropDownSelect1"></div>
  <?php endif; ?>



<!-- sai mat khẩu -->