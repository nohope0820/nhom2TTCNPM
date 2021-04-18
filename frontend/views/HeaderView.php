



  <!-- login-->
  <div class="login">
    <div class="login-icon1">
      <ul>
        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google"></i></a></li>
      </ul>
    </div>
    <div class="login-icon2">
      <ul>
           <li><i class="fa fa-phone fa-1x"></i>
               <a href="#">Hotline: 0123456789</a></li>
           <li><i class="fa fa-envelope fa-1x"></i>
            <a href="#">Email: st_flash@gamil.com</a></li>
           <!-- <li><i class="fa fa-question-circle fa-1x"></i>
            <a href="#">Trợ giúp</a></li> -->
           <li><i class="fa fa-sign-in fa-1x"></i> 


             <?php if(isset($_SESSION["customer_name"])): ?>
       Xin chào <a href="#" style=" font-weight: bold"><?php echo $_SESSION["customer_name"]; ?>(ID:<?php echo $_SESSION["customer_id"]; ?>)</a> | <a href="index.php?controller=account&action=logout">Đăng xuất</a> </div>
        <?php else: ?>
      <a href="index.php?controller=account&action=register">Đăng kí</a> | <?php unset($_SESSION['access_token']); ?><a href="index.php?controller=account&action=login">Đăng nhập</a></li>
    <?php endif; ?>
        </ul>
    </div>
  </div>
  <!-- /login -->
  <!-- banner -->
  <div class="banner">
    <!-- logo -->
    <div class="logo"><a href="index.php"><img src="../assets/frontend/images/logo.jpg"></a></div>
    <!-- /logo -->
    <script type="text/javascript">
      function search(){
        var key = document.getElementById('key').value;
        //di chuyen den trang search
        location.href="index.php?controller=search&action=productName&key="+key;
      }
      function smartSearch(){
        var key = document.getElementById('key').value;
        if(key != ""){
          document.getElementById('smart-search').setAttribute("style","display:block;");
          //---
          $.ajax({
            url: "index.php?controller=search&action=smartSearch&key="+key,
            success: function( result ) {
              $( "#smart-search ul" ).empty();
              $( "#smart-search ul" ).append(result);
            }
          });
           }else{
          document.getElementById('smart-search').setAttribute("style","display:none;");
        }
      }
    </script>
    <!-- thanh tìm kiếm -->
      <div class="box">
             <div class="search" style="position: relative;">
              <input type="text" onkeyup ="smartSearch();" id="key" placeholder="Nhập tên sản phẩm ..."  style="width:475px;height: 35px;border: solid green;background: white;font-size: 13px;float: left;color: black;padding-left: 15px;border-radius: 5px;" />
              </div>  
              <style type="text/css">
        #smart-search ul{padding:0px; margin:0px; list-style: none;}
        #smart-search ul li{border-bottom: 1px solid #dddddd;border-right: 1px solid #dddddd; width: 490px;}
        #smart-search{position: absolute; width: 100%; z-index: 1; background: white; display: none;}
      </style>
      <div id="smart-search">
        <ul>
        </ul>
      </div>
    </div>
    <?php 
        $numberOfProduct = 0;
        if(isset($_SESSION["cart"])){
          foreach($_SESSION["cart"] as $rows)
            $numberOfProduct++;
        }
     ?>
     <div class="icon-search"><button style="height: 38px; margin-top: -5px;"><i class="fa fa-search fa-1x" onclick="return search();"></i></button></div>
     <div class="cart" id="cart"><a href="index.php?controller=cart" style="font-size: 17px; font-family: times new roman"><i class="fa fa-shopping-cart fa-2x"></i> &nbsp <?php echo $numberOfProduct; ?> sản phẩm</a>
      

  </div>
  </div>
  <!-- /banner -->

  <!-- menu -->
  <div class="menu">
    <ul>
      <li><a href="index.php">TRANG CHỦ</a></li>
      <li><a href="index.php?controller=products&action=category&id=33">SẢN PHẨM</a></li>
      <li><a href="index.php?controller=contact&action=checkOut">LIÊN HỆ</a></li>
      <li><a href="index.php?controller=news">TIN TỨC</a></li>
       <li><a href="index.php?controller=cart">GIỎ HÀNG</a></li>
       <li><a>TÀI KHOẢN</a>
             <ul class="sub-menu">
               <li><a href="index.php?controller=process&action=checkIn">Thông tin tài khoản</a></li>
               <li><a href="index.php?controller=process&action=checkOut">Quá trình giao hàng</a></li>
             </ul>
       </li>
      
</ul>
  </div>
<style type="text/css">
  .menu > ul > li .sub-menu{
   display: none;
   position: absolute;
   top: 170px;
   left: 690px;
   width: 175px;
   padding: 5px 20px;
   list-style: none;
   z-index: 5;
 }
  .sub-menu > li{
    display: flex;
    border: 1px solid #1f4140; 
    border-radius: 10px;
    height: 20px;
    padding: 10px;
    background-color: #1f4140;
    text-align:center;}
  .sub-menu > li > a{
    text-decoration: none;
    color: white;
    font-weight: bold;
    font-size: 13px;

  }

 .menu li:hover .sub-menu{
   display: block;
 }
 .sub-menu li:hover{background: black;}
 .sub-menu > li > a:hover{ color: yellow;}
</style>
  

