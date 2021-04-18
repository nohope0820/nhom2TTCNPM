<!DOCTYPE html>
<html>
<head>
  <title>flash-store</title>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="../assets/frontend/images/logo.jpg"/>
  <link rel="stylesheet" type="text/css" href="../assets/frontend/css/flash_store.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <script type="text/javascript" src="../assets/frontend/js/jquery-3.5.1.js"></script>
</head>
<body>
<?php 
    //load file HeaderView.php
    include "views/HeaderView.php";
 ?>
<?php echo $this->view; ?>
 <!-- footer menu -->
 <div class="introduce"> 
    <ul>
      <li><a href="#"><br><br><br><br>MIỄN PHÍ VẬN CHUYỂN <br><br> cho đơn hàng từ 500k</a></li>
      <li><a href="#"><br><br><br><br>SẢN PHẨM ĐA DẠNG</a></li>
      <li><a href="#"><br><br><br><br>HỖ TRỢ MIỄN PHÍ <br><br> 24/7 từ thứ 2 đến thứ 6</a></li>
    </ul>
  </div>


  <style type="text/css">
    .introduce{
  width: 1100px;
  height: 190px;
  background: url('../assets/frontend/images/main-img.jpg');
  background-repeat: no-repeat;

  margin-top: 60px;
}
.introduce ul{
  list-style: none;
  display: flex;
}
.introduce ul li{
  padding-left: 150px;
}
.introduce ul li a{
  text-decoration-line: none;
  font-weight: bold;
  color: white;
  padding-right: 190px;
}
  </style>
<div class="footer-menu">
  <div class="ft-2">&nbsp</div>
  <div class="ft-content">
    <div class="ct1">HỖ TRỢ
            <ul>
              <li><i class="fa fa-angle-right"> </i> &nbsp <a href="#">Giúp đỡ</a></li>
              <li><i class="fa fa-angle-right"> </i> &nbsp <a href="#">Liên hệ</a></li>
            </ul>
    </div>
    <div class="ct2">SẢN PHẨM
            <ul>
              <li><i class="fa fa-angle-right"> </i> &nbsp <a href="#">Thời trang nam</a></li>
              <li><i class="fa fa-angle-right"> </i> &nbsp <a href="#">Thời trang nữ</a></li>
              <li><i class="fa fa-angle-right"> </i> &nbsp <a href="#">Giày dép nam</a></li>
              <li><i class="fa fa-angle-right"> </i> &nbsp <a href="#">Giày dép nữ</a></li>
              <li><i class="fa fa-angle-right"> </i> &nbsp <a href="#">Túi xách</a></li>
              <li><i class="fa fa-angle-right"> </i> &nbsp <a href="#">Đồng hồ</a></li>
            </ul>
    </div>
    <div class="ct3">CHÍNH SÁCH HỖ TRỢ
             <ul>
              <li><i class="fa fa-angle-right"> </i> &nbsp <a href="#">Vận chuyển và trả hàng</a></li>
              <li><i class="fa fa-angle-right"> </i> &nbsp <a href="#">Câu hỏi thường gặp</a></li>
              <li><i class="fa fa-angle-right"> </i> &nbsp <a href="#">Quy chế hoạt động</a></li>
              <li><i class="fa fa-angle-right"> </i> &nbsp <a href="#">Chính sách bảo mật</a></li>
            </ul>
    </div>
    <div class="ct4">
      <b><i>Địa chỉ :</i> Số 147 phố Mai Dịch, Mai Dịch, Cầu Giấy Hà Nội.</b><br><br>
      <br>
      <b style="font-size: 13px;"><i>Tổng đài hỗ trợ :</i> 0123456789<br><br><i>Email :</i> st_flash@gamil.com.</b>
    </div>
  </div>
  <div class="ft-4"><div>Copyright © 2020 by NO HOPE (flash-st.com)  All rights reserved.</div></div>
</div>
<!-- /footer menu -->

<!-- quay lại đầu trang -->
<button onclick="topFunction()" id="myBtn" title="Go to top">
  <i class="fa fa-arrow-up"></i>
</button>
   <script type="text/javascript">
  mybutton = document.getElementById("myBtn");
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}


function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<style type="text/css">



.footer-menu > .ft-content
{
  background-image: url('../assets/frontend/images/footer-background-img.jpg');
  height: 300px;
  width: 1520px;
}
   #myBtn{
            cursor: pointer;
            padding: 9px 7px;
           background: red;
            color: yellow;
            position:fixed;
            bottom: 15px;
            left: 20px;
            z-index: 99;
            animation-name:move;
            animation-duration:3s;
            animation-iteration-count:infinite;
            border: none;
        }
        @keyframes move{
            0%{
                 bottom: 15px;
                 left: 20px;
                background:red;
            }
            50%{
                bottom: 80px;
                left: 20px;
                background:purple;
            }
            
            }
            100%{
                 bottom: 15px;
                 left: 20px;
                background:red;
            }
        }

</style>
</script>
<!-- <div class="zalo-chat-widget" data-oaid="579745863508352884" data-welcome-message="Xin chào !!! Chúng tôi có thể giúp gì cho bạn" data-autopopup="5" data-width="350" data-height="420" data-position="100 100 100 100"></div>

<script src="https://sp.zalo.me/plugins/sdk.js"></script> -->
<!-- /quay lai dau trang -->
<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v9.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="106207104811580"
  logged_in_greeting="Xin chào !!! Chúng tôi có thể giúp gì cho bạn"
  logged_out_greeting="Xin chào !!! Chúng tôi có thể giúp gì cho bạn">
      </div>
</body>
</html>