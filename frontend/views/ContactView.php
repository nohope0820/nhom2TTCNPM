


<!-- load file layout chung -->
<?php $this->layoutPath = "LayoutTrangTrong.php"; ?>

<!-- content -->
	<div class="content">
          <div class="name-ct">LIÊN HỆ CHÚNG TÔI</div>
          <hr>
          <iframe src="https://www.google.com/maps/d/embed?mid=1TmRsc8WO5sBsAvRCqBN6_TMFDBZckpDz" width="1000" height="500">
          </iframe>
  </div>
  <div id="content" style="background: linear-gradient(to right, white,green);; width: 1100px;margin-left: 220px; height: 500px; margin-top: 35px;">
        <div class="lienhe">
          <div class="left">
          	<b>ĐÁNH GIÁ</b>
          	<hr>
            <form method='post' action="index.php?controller=contact&action=evaluatePost">
          	 <?php $cmt = $this->modelDanhgia(); ?>      
               <?php foreach ($cmt as $rows): ?>
            <input type="name" name='name' required value="<?php echo $_SESSION["customer_name"]; ?>" class="form-control" style="border-color: green;margin-top: 15px;">
              <?php endforeach; ?>
           <input type="email" value="<?php echo isset($_SESSION["customer_email"]) ? $_SESSION["customer_email"] : ''; ?>" name="email" <?php if(isset($_SESSION["customer_email"])): ?> disabled <?php else: ?> required <?php endif; ?> class="form-control" style="border-color: green;">

          	<textarea type="text" placeholder="Ghi chú" rows="10" name="danhgia" ></textarea>
          	<div><input type="submit" value="Gửi" style="margin-top: 20px;margin-left: 550px;padding: 5px 13px;border-radius: 3px;background-color: red;color: white;width: 60px;"></div>
          </form>
          </div>
          <div class="right">
          	<b>ĐỊA CHỈ LIÊN HỆ</b>
          	<hr>
          	<div>
          		FLASH STORE<br><br>
          		Số 147 phố Mai Dịch, Mai Dịch, Cầu Giấy Hà Nội<br><br>
          		Tổng đài hỗ trợ : 0123456789 <br><br>
                Email : st_flash@gamil.com.

          	</div>
          </div>
      </div>
</div>
<div class="infordanhgia">
        <div style="padding-top: 25px;">
             <b style="font-size: 21px; font-family: times new roman; margin-left: 20px; color: yellow;">Một số đánh giá</b>
             <hr style="width: 145px; margin-left: 20px; height: 1px; background-color: black;">
            
               <ul class="cmt">
                <?php foreach($data as $rows): ?>
                 <li>
                   <div>
                     <div style="padding: 5px; font-size: 15px; color: black;"><i class="fa fa-user"></i> <b style="text-decoration: underline;"> <?php echo $rows->name; ?> </b></div>
                     <div style="padding-bottom: 5px; font-family: times new roman; font-size: 15px;margin-left: 15px;"><?php echo $rows->danhgia; ?></div>
                   </div>
                 </li>
               <?php endforeach; ?>
               </ul>
             
        </div>
        <div>
              <ul class="pagination">
                <li class="disabled"><a href="#" style="border-color: black; color: black;">Page</a></li>
                <?php for($i = 1; $i <= 3; $i++): ?>
                <li><a href="index.php?controller=contact&p=<?php echo $i; ?>" style="border-color: black;"><?php echo $i; ?></a></li>
                <?php endfor; ?>
              </ul>
            </div>
      </div>
	<!-- /content -->
	<style type="text/css">
    .pagination{list-style: none; margin-left: 800px;margin-top: 50px;}
     .pagination > li{display: inline-block; border: 2px solid red;padding: 6px 12px; margin-right: 5px; border-radius: 7px;}
     .pagination > li > a{color: black; text-decoration: none; font-weight: bold;}
    .infordanhgia{
    margin-top: 40px;
    margin-left: 220px;
    background: white;
    width: 1100px;
    background: linear-gradient(to right, green,white);
    padding-bottom: 10px;
  }
   .cmt{
      list-style: none;
    }
    .cmt > li{display: flex;
      margin-top: 30px; margin-left: 60px;
      margin-right: 30px;}

    .cmt > li >div{width: 800px;
      border: 1px solid red;
      border-radius: 0px 30px 30px 0px;
     background: linear-gradient(to right, white,green);
     padding-left: 20px;
     margin-bottom: -10px;}

		 .content{
  	margin-top: 40px;
  	margin-left: 220px;
  	background: white;
  	width: 1100px;
  }
  .content > .name-ct
  {
  	padding-top: 30px;
  	margin-left: 450px;
  	font-size: 20px;
  	font-weight: bold;
  	color: #1f4140;
  }
   .content > hr
   {
   	height: 1.5px;
   	width: 250px;
   	margin-left: 420px;
   	padding-top: -5px;
   	background: green;
   }
 .content > iframe
 {
 	margin-top:45px;
 	margin-left:50px; 
 	border: 0px; 
 	width: 1000px;
  margin-bottom: 60px;
 }
 #content > .lienhe
 {
 	display: flex;
 	margin-top: 35px;
 	height: 600px;
  padding-top: 40px;
 }
 #content > .lienhe > .left
 {
 	margin-left: 50px;
 	width: 700px;
 }
  #content > .lienhe > .left > b
  {
  	margin-left: 280px;
  	font-size: 17px;
  	color: #1f4140;
  }
  #content > .lienhe > .left > hr
  {
  	height: 1.2px;
  	width: 150px;
  	margin-left: 250px;
  	background-color: green;
  }

  #content > .lienhe > .left  input
  {
  	margin-top: 45px;
  	margin-right: 50px;
  	width: 250px;
  	padding: 12px;
    font-weight: bold;
    border-radius: 20px;

  }
  #content > .lienhe > .left  textarea
  {
  	margin-top: 30px;
  	width: 583px;
  	padding: 10px;
    border: 2px solid black;
  }

    #content > .lienhe > .right > b
  {
  	margin-left: 80px;
  	font-size: 17px;
  	color: #1f4140;
  }
  #content > .lienhe > .right > hr
  {
  	height: 1.2px;
  	width: 200px;
  	margin-left: 50px;
  	background-color: green;
  }
   #content > .lienhe > .right > div
   {
   	margin-top: 60px;
   	font-size: 15px;
   	color: #1f4140
   	font-weight: bold;

   }
	</style>