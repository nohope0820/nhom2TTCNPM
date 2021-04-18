
<?php 
      $message = isset($_GET["message"]) ? $_GET["message"] : "";
     ?>
     <?php if($message == "numberError"): ?>
    



<script type="text/javascript">
  alert("Bạn đã đánh giá sản phẩm này. Rất tiếc không thể đánh giá nữa !!!");
  location.replace("index.php");
</script>
<?php endif; ?>

<?php 
      $message = isset($_GET["message"]) ? $_GET["message"] : "";
     ?>
     <?php if($message == "accountError"): ?>
    


<script type="text/javascript">
  alert("Vui lòng đăng nhập. Rất tiếc không thể đánh giá !!!");
  location.replace("index.php");
</script>
<?php endif; ?>

<?php 
      $message = isset($_GET["message"]) ? $_GET["message"] : "";
     ?>
     <?php if($message == "buyError"): ?>
    


<script type="text/javascript">
  alert("Bạn chưa mua sản phẩm này. Rất tiếc không thể đánh giá !!!");
  location.replace("index.php");
</script>
<?php endif; ?>