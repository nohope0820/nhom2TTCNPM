<script type="text/javascript">
   alert("Bạn cần hoàn thành hồ sơ thông tin cá nhân !!!");
</script>

<!-- load file layout chung -->
<?php $this->layoutPath = "LayoutTrangTrong.php"; ?>


  <!--===============================================================================================-->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../assets/frontend/login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../assets/frontend/login/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="../assets/frontend/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../assets/frontend/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../assets/frontend/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="../assets/frontend/login/vendor/daterangepicker/daterangepicker.css">

</head>
<body>
 
  
  <div class="limiter" style="margin-top: 80px;">
  
      <div class="wrap-login100" style="padding: 65px 55px 54px 55px;">
         <?php $infor = $this->modelPersonalInfor(); ?>
               <?php foreach ($infor as $rows): ?>
        <form class="login100-form validate-form" method='post' action="index.php?controller=process&action=InforPost">
          
          <span class="login100-form-title" style="font-size: 18px; font-family: times new roman; font-weight: bold; padding-top: 0px; padding-bottom: 50px;">
            THÔNG TIN KHÁCH HÀNG
          </span>
            <div class="wrap-input100 validate-input" data-validate="Name is required" style="margin-bottom: 13px;">
         
           <input class="input100" type="name" name="fullname" value="<?php echo $rows->fullname; ?>" required="" disabled placeholder="Nhập tên của bạn" style="font-size: 16px; font-family: times new roman;">
            <span class="focus-input100" data-symbol="&#xf206;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Email is reauired" style="margin-bottom: 13px;">
            
            <input class="input100" type="text" name="email" value="<?php echo $rows->email; ?>" required="" disabled placeholder="Nhập địa chỉ email của bạn" style="font-size: 16px; font-family: times new roman">
            <span class="focus-input100" data-symbol="&#xf209;"></span>
          </div>


           <div class="wrap-input100 validate-input" data-validate = "address is reauired" style="margin-bottom: 13px;">
            
            <input class="input100" type="text" name="address" value="<?php echo $rows->address; ?>"  required="" placeholder="Nhập địa chỉ của bạn" style="font-size: 16px; font-family: times new roman">
            <span class="focus-input100" data-symbol="&#xf2c3;"></span>
          </div>

           <div class="wrap-input100 validate-input" data-validate = "phone is reauired" style="margin-bottom: 13px;">
            
            <input class="input100" type="text" name="phone" value="<?php echo $rows->phone; ?>"  required="" placeholder="Nhập số điện thoại của bạn" style="font-size: 16px; font-family: times new roman">
            <span class="focus-input100" data-symbol="&#xf2b9;"></span>
          </div>
          
      
          
          <div class="container-login100-form-btn"  style="padding-top: 35px;width: 300px; margin: auto;">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              
    
                <input type="submit" class="login100-form-btn" value="Thay đổi thông tin" onclick="alert('Thay đổi tài khoản thành công. Anh chị cần đăng nhập lại để hệ thống cập nhật');window.location.href='location:index.php?controller=account&action=logout'"  style="color: black;font-weight: bold; background: linear-gradient(to right, blue, pink);">
              
            </div>
          </div>
</form>
<?php endforeach; ?>

        
      </div>
    </div>
  </div>
  <style type="text/css">
    a:hover {
  text-decoration: none;
  color: #a64bf4;
  text-decoration: underline;


}

  </style>
  
<style type="text/css">

body, html {
  
  font-size: 12px;
  font-family: arial;

 
}

/*---------------------------------------------*/
a {
 
  font-size: 12px;
  font-family: arial;
  
  color: #666666;
  margin: 0px;
  transition: all 0.4s;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

a:focus {
  outline: none !important;
}

a:hover {
  text-decoration: none;
  color: #a64bf4;
  text-decoration: underline;
}

/*---------------------------------------------*/


/*---------------------------------------------*/
input {
  outline: none;
  border: none;
}



input:focus::-webkit-input-placeholder { color:transparent; }
input:focus:-moz-placeholder { color:transparent; }
input:focus::-moz-placeholder { color:transparent; }
input:focus:-ms-input-placeholder { color:transparent; }


input::-webkit-input-placeholder { color: #adadad;}
input:-moz-placeholder { color: #adadad;}
input::-moz-placeholder { color: #adadad;}
input:-ms-input-placeholder { color: #adadad;}


/*---------------------------------------------*/




.bg1 {background-color: #3b5998}
.bg2 {background-color: #1da1f2}
.bg3 {background-color: #ea4335}



/*//////////////////////////////////////////////////////////////////
[ login ]*/
.limiter {
width: 610px;
margin: auto;
margin-bottom: 120px;
 
 

}

.container-login100 {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}

.wrap-login100 {
  width: 500px;
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
}


/*------------------------------------------------------------------
[ Form ]*/

.login100-form {
  width: 100%;
}

.login100-form-title {
  display: block;
  font-family: Poppins-Bold;
  font-size: 39px;
  color: #333333;
  line-height: 1.2;
  text-align: center;
}



/*------------------------------------------------------------------
[ Input ]*/

.wrap-input100 {
  width: 100%;
  position: relative;
  border-bottom: 2px solid #d9d9d9;
}

.label-input100 {
  font-family: Poppins-Regular;
  font-size: 14px;
  color: #333333;
  line-height: 1.5;
  padding-left: 7px;
}

.input100 {
  font-family: Poppins-Medium;
  font-size: 16px;
  color: #333333;
  line-height: 1.2;

  display: block;
  width: 100%;
  height: 55px;
  background: transparent;
  padding: 0 7px 0 43px;
}


/*---------------------------------------------*/
.focus-input100 {
  position: absolute;
  display: block;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
}

.focus-input100::after {
  content: attr(data-symbol);
  font-family: Material-Design-Iconic-Font;
  color: #adadad;
  font-size: 22px;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  height: calc(100% - 20px);
  bottom: 0;
  left: 0;
  padding-left: 13px;
  padding-top: 3px;
}

.focus-input100::before {
  content: "";
  display: block;
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 0;
  height: 2px;
  background: #7f7f7f;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}


.input100:focus + .focus-input100::before {
  width: 100%;
}

.has-val.input100 + .focus-input100::before {
  width: 100%;
}

.input100:focus + .focus-input100::after {
  color: #a64bf4;
}

.has-val.input100 + .focus-input100::after {
  color: #a64bf4;
}


/*------------------------------------------------------------------
[ Button ]*/
.container-login100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.wrap-login100-form-btn {
  width: 100%;
  display: block;
  position: relative;
  z-index: 1;
  border-radius: 25px;
  overflow: hidden;
  margin: 0 auto;

  box-shadow: 0 5px 30px 0px rgba(3, 216, 222, 0.2);
  -moz-box-shadow: 0 5px 30px 0px rgba(3, 216, 222, 0.2);
  -webkit-box-shadow: 0 5px 30px 0px rgba(3, 216, 222, 0.2);
  -o-box-shadow: 0 5px 30px 0px rgba(3, 216, 222, 0.2);
  -ms-box-shadow: 0 5px 30px 0px rgba(3, 216, 222, 0.2);
}

.login100-form-bgbtn {
  position: absolute;
  z-index: -1;
  width: 300%;
  height: 100%;
  background: #a64bf4;
  background: -webkit-linear-gradient(right, #00dbde, #fc00ff, #00dbde, #fc00ff);
  background: -o-linear-gradient(right, #00dbde, #fc00ff, #00dbde, #fc00ff);
  background: -moz-linear-gradient(right, #00dbde, #fc00ff, #00dbde, #fc00ff);
  background: linear-gradient(right, #00dbde, #fc00ff, #00dbde, #fc00ff);
  top: 0;
  left: -100%;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.login100-form-btn {
  font-family: Poppins-Medium;
  font-size: 16px;
  color: #fff;
  line-height: 1.2;
  text-transform: uppercase;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  width: 100%;
  height: 50px;
}

.wrap-login100-form-btn:hover .login100-form-bgbtn {
  left: 0;
}


/*------------------------------------------------------------------
[ Alert validate ]*/

.validate-input {
  position: relative;
}

.alert-validate::before {
  content: attr(data-validate);
  position: absolute;
  max-width: 70%;
  background-color: #fff;
  border: 1px solid #c80000;
  border-radius: 2px;
  padding: 4px 25px 4px 10px;
  bottom: calc((100% - 20px) / 2);
  -webkit-transform: translateY(50%);
  -moz-transform: translateY(50%);
  -ms-transform: translateY(50%);
  -o-transform: translateY(50%);
  transform: translateY(50%);
  right: 2px;
  pointer-events: none;

  font-family: Poppins-Regular;
  color: #c80000;
  font-size: 13px;
  line-height: 1.4;
  text-align: left;

  visibility: hidden;
  opacity: 0;

  -webkit-transition: opacity 0.4s;
  -o-transition: opacity 0.4s;
  -moz-transition: opacity 0.4s;
  transition: opacity 0.4s;
}

.alert-validate::after {
  content: "\f06a";
  font-family: FontAwesome;
  display: block;
  position: absolute;
  color: #c80000;
  font-size: 16px;
  bottom: calc((100% - 20px) / 2);
  -webkit-transform: translateY(50%);
  -moz-transform: translateY(50%);
  -ms-transform: translateY(50%);
  -o-transform: translateY(50%);
  transform: translateY(50%);
  right: 8px;
}

.alert-validate:hover:before {
  visibility: visible;
  opacity: 1;
}

@media (max-width: 992px) {
  .alert-validate::before {
    visibility: visible;
    opacity: 1;
  }
}


/*//////////////////////////////////////////////////////////////////
[ Social item ]*/
.login100-social-item {
  font-size: 25px;
  color: #fff;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  margin: 5px;
}

.login100-social-item:hover {
  color: #fff;
  background-color: #333333;
}

/*//////////////////////////////////////////////////////////////////
[ Responsive ]*/

@media (max-width: 576px) {
  .wrap-login100 {
    padding-left: 15px;
    padding-right: 15px;
  }
} 

</style>
</body>


