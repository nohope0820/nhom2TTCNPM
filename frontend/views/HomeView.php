<?php $this->layoutPath = "LayoutTrangChu.php"; ?>

  <!-- content-show -->
  <?php $hotPromotions = $this->modelPromotions(); ?>
               <?php foreach ($hotPromotions as $rows): ?>
  <div class="content">
    <div id="box">
    <img id="imgSlide" src="../assets/upload/promotions/<?php echo $rows->photo; ?>">
    <div id="next"><i class="fa fa-angle-right fa-2x"></i></div>
    <div id="prev"><i class="fa fa-angle-left fa-2x"></i></div>
  </div>
  <script type="text/javascript">
  //khaibao array chứa danh sách ảnh
  var slide = new Array();
  slide[0] = "../assets/upload/promotions/<?php echo $rows->photo1; ?>";
  slide[1] = "../assets/upload/promotions/<?php echo $rows->photo2; ?>";
  slide[2] = "../assets/upload/promotions/<?php echo $rows->photo3; ?>";
  slide[3] = "../assets/upload/promotions/<?php echo $rows->photo4; ?>";
  slide[4] = "../assets/upload/promotions/<?php echo $rows->photo5; ?>"; //khai báo biến n lưu trữ ảnh
  var n = 0;
  //bắt sự kiện click của id=next
  document.getElementById('next').addEventListener("click",function(){
    //tăng n+1
    n++;
    //lấy giá trị của phần tử phần tử thứ n
    document.getElementById('imgSlide').setAttribute("src",slide[n]);
    //phần tử cuối của array thì reset về n
    if(n == slide.length -1)
      n=-1;
});
    //bắt sự kiện click của id=prev
  document.getElementById('prev').addEventListener("click",function(){
    //giam n
    n--;
    //nếu n < 0 thì set n = phần tử  lớn nhất của Array
       if(n < 0)
  n= slide.length - 1;
//lấy giá trị của phần tử phần tử thứ n
    document.getElementById('imgSlide').setAttribute("src",slide[n]);

  });
  var n = 0;
  setInterval(function(){
    n++;
    document.getElementById('imgSlide').setAttribute("src",slide[n]);
    //neu n o vi tri cuoi cung thi reset n = 0;
    if(slide.length -1 == n)
      n = 0;
  },3000);
</script>
<?php endforeach; ?>
<!-- /content-show -->
<!-- danhmuc -->
     <div class="category">
      <div id="category">DANH MỤC</div>
        <table cellpadding="8">
          <tr align="center">
            <td><a href="index.php?controller=products&action=category&id=33"><img src="../assets/frontend/images/tt_nam.jpg">
                        <div class="img">Thời Trang Nam</div>
                </a></td>
            <td><a href="index.php?controller=products&action=category&id=32"><img src="../assets/frontend/images/tt_nu.jpg"><div class="img">Thời Trang Nữ</div></a></td>
            <td><a href="index.php?controller=products&action=category&id=31"><img src="../assets/frontend/images/giaydepnam.jpg"><div class="img">Giày Dép Nam</div></a></td>
            <td><a href="index.php?controller=products&action=category&id=30"><img src="../assets/frontend/images/giaydepnu.jpg"><div class="img">Giày Dép Nữ</div></a></td>
            <td><a href="index.php?controller=products&action=category&id=28"><img src="../assets/frontend/images/dongho.jpg"><div class="img">Đồng Hồ</div></a></td>
            <td><a href=""><img src="../assets/frontend/images/mypham.jpg"><div class="img">Mỹ Phẩm</div></a></td>
            <td><a href="index.php?controller=products&action=category&id=29"><img src="../assets/frontend/images/tuivi.jpg"><div class="img">Túi Ví</div></a></td>
            <td><a href=""><img src="../assets/frontend/images/phukien.jpg"><div class="img">Phụ Kiện</div></a></td>
          </tr>
        </table>
     </div>   
 <!--/danhmuc  -->
 <!-- main1-khuyenmai -->
 <div class="main1">
  <div class="name-main1">KHUYẾN MÃI HOT</div>
  <div class="banner-main1"><img src="../assets/frontend/images/sale-main1.jpg"></div>
    <div class="main1-content">
     
    <ul class="menu1">
       <?php $hotProducts = $this->modelHotProducts1(); ?>
               <?php foreach ($hotProducts as $rows): ?>
    <li class="container" style="margin-right: 10px; border: linear-gradient(to left, #743ad5, #d53a9d);"><div class="image"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id;?>&star=5">
        
      <img src="../assets/upload/products/<?php echo $rows->photo;?>">
        <div class="ctsp">
      <div class="ten"><br><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id;?>" style="text-decoration: none; color: black;" ><?php echo $rows->name; ?></a></div><br>
      <?php $price = $rows->price;
                              $giamoi = $rows->giamoi; ?>
                        <?php if($price != $giamoi): ?>
                        <div class="gia"><b><?php echo number_format($rows->price); ?>đ </b>&nbsp-&nbsp<?php echo number_format($rows->giamoi); ?>đ</div>
                        <?php else: ?>
                        <div class="gia" style="margin-left: 50px;"><?php echo number_format($rows->giamoi); ?>đ</div>
                        <?php endif; ?>
                      </div></div>
      <div class="readmore">
            <div class="text"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id;?>&star=5"><i class="fa fa-eye"></i>Xem chi tiết</a></div>
            </div>  
     

    </a></li>
    <?php endforeach; ?>
  </ul>
    <ul class="menu2">
       <?php $hotProducts = $this->modelHotProducts2(); ?>
               <?php foreach ($hotProducts as $rows): ?>
     <li class="container" style="margin-right: 10px; border: linear-gradient(to left, #743ad5, #d53a9d);"><div class="image"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id;?>&star=5">
        
      <img src="../assets/upload/products/<?php echo $rows->photo;?>">
        <div class="ctsp">
      <div class="ten"><br><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id;?>" style="text-decoration: none; color: black;" ><?php echo $rows->name; ?></a></div><br>
      <?php $price = $rows->price;
                              $giamoi = $rows->giamoi; ?>
                        <?php if($price != $giamoi): ?>
                        <div class="gia"><b><?php echo number_format($rows->price); ?>đ </b>&nbsp-&nbsp<?php echo number_format($rows->giamoi); ?>đ</div>
                        <?php else: ?>
                        <div class="gia" style="margin-left: 60px;"><?php echo number_format($rows->giamoi); ?>đ</div>
                        <?php endif; ?>
      </div></div>
      <div class="readmore">
            <div class="text"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id;?>&star=5"><i class="fa fa-eye"></i>Xem chi tiết</a></div>
            </div>  
     

    </a></li>
    <?php endforeach; ?>
  </ul>

     <div class="next"><i class="fa fa-angle-right fa-2x"></i></div>
  <div class="prev"><i class="fa fa-angle-left fa-2x"></i></div>
  </div>
  <div class="all"><a href="#">XEM TẤT CẢ <i class="fa fa-angle-right"></i> <i class="fa fa-angle-right"></i></a></div>
  
    </div>

   <script type="text/javascript">
  $(document).ready(function(){
    var n=0,h=0;
    $(".next").click(function(){
      
      id=setInterval(function(){
        n=n+10;
      if (h%2 !=0)
      {
        $(".menu1").attr("style","left:1100px;");
        $(".menu2").attr("style","left:0px;");
        $(".menu2").attr("style","left:"+(-n)+"px;");
        $(".menu1").attr("style","left:"+(1100-n)+"px;");
      } 
      else
      {
        $(".menu1").attr("style","left:0px;");
        $(".menu2").attr("style","left:1090px;");
        $(".menu1").attr("style","left:"+(-n)+"px;");
        $(".menu2").attr("style","left:"+(1100-n)+"px;");
      }
        
        if (n==1080){
          clearInterval(id);
          h++;
          n=0;
      
        }
      },1);
    });
    $(".prev").click(function(){
      id=setInterval(function(){
        n=n+10;
      if (h%2  !=0)
      {
        $(".menu1").attr("style","left:-1100px;");
        $(".menu2").attr("style","left:0px;");
        $(".menu2").attr("style","left:"+(n)+"px;");
        $(".menu2").attr("style","left:"+(-1060+n)+"px;");
      } 
      else
      {
        $(".menu2").attr("style","left:0px;");
        $(".menu1").attr("style","left:-1100px;");
        $(".menu2").attr("style","left:"+(n)+"px;");
        $(".menu1").attr("style","left:"+(-1060+n)+"px;");
      }
        
        if (n==1080){
          clearInterval(id);
          h++;
          n=0;
      
        }
      },1);
    });
  }); 
</script>
<?php 
          $categories = $this->modelListCategories();
         ?>
         <?php foreach($categories as $rowsCategories): ?>
<div class="thoitrangnam">
    <div class="bn-thoitrangnam"><img src="../assets/upload/categories/<?php echo $rowsCategories->photo; ?>" style="width: 550px; height: 350px;">
<div class="ct-thoitrangnam">
      <div class="ct1"><?php echo $rowsCategories->name; ?></div>
      <div class="ct2"><?php echo $rowsCategories->description; ?></div>
            <div class="ct3"><a href="index.php?controller=products&action=category&id=<?php echo $rowsCategories->id; ?>">  Xem chi tiết tại đây <i class="fa fa-angle-right"></i></a></div>
    </div>
    </div>

      <div class="content-thoitrangnam">
      <ul>
         <?php 
                  $products = $this->modelListProducts($rowsCategories->id);
                 ?>
                 <?php foreach($products as $rows): ?>
          
        <li class="container" style=" border: linear-gradient(to left, #743ad5, #d53a9d);">
           <div class="image">    
          
              
                 <img src="../assets/upload/products/<?php echo $rows->photo;?>">
                        <div class="ctsp">
                        <div class="ten"><br><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></div><br>
                        <?php $price = $rows->price;
                              $giamoi = $rows->giamoi; ?>
                        <?php if($price != $giamoi): ?>
                        <div class="gia"><b><?php echo number_format($rows->price); ?>đ </b>&nbsp-&nbsp<?php echo number_format($rows->giamoi); ?>đ</div>
                        <?php else: ?>
                        <div class="gia" style="margin-left: 60px;"><?php echo number_format($rows->giamoi); ?>đ</div>
                        <?php endif; ?>
               
           
                       </div>
                     </div>
                 <div class="readmore">
            <div class="text"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id;?>&star=5"><i class="fa fa-eye"></i>Xem chi tiết</a></div>
            </div>  

         </li>
        
       <?php endforeach; ?>
         
      </ul>
     
    </div>
</div>
 <?php endforeach; ?>
 <style>


.container {
  position: relative;

 
}
 
.image {
  opacity: 1;
  transition: .6s ease;
  backface-visibility: hidden;
  
}
 
.readmore {
  transition: .6s ease;
  opacity: 0;
  position: absolute;
  top: 45%;
  left: 47%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}
 
.container:hover .image {
  opacity: 0.1;
 
}
 
.container:hover .readmore {
  opacity: 1;
}
 
.text {
 background: linear-gradient(to right, red, purple);
 border-radius: 10px; 
  color: white;
  font-size: 12px;
  padding: 10px 8px;
  font-weight: bold;
}
.text > a:hover{color: yellow; text-decoration: underline;}




 </style>