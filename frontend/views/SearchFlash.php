<!-- load file layout chung -->
<?php $this->layoutPath = "LayoutTrangTrong.php"; ?>

<div class="content">
    <div id="box">
    <img id="imgSlide" src="../assets/frontend/images/slide4.jpg">
    <div id="next"><i class="fa fa-angle-right fa-2x"></i></div>
    <div id="prev"><i class="fa fa-angle-left fa-2x"></i></div>
  </div>
</div>
  <script type="text/javascript">
  //khaibao array chứa danh sách ảnh
  var slide = new Array();
  slide[0] = "../assets/frontend/images/slide2.jpg";
  slide[1] = "../assets/frontend/images/slide1.jpg";
  slide[2] = "../assets/frontend/images/slide3.jpg";
  slide[3] = "../assets/frontend/images/slide5.jpg";
  slide[4] = "../assets/frontend/images/slide6.jpg"; //khai báo biến n lưu trữ ảnh
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
  },4000);
</script>


<div class="all_sanpham" style="height: 1920px;">
  <!-- sp_left -->
  <div class="sp-left">
    <div class="category">DANH MỤC SẢN PHẨM</div>
      <ul>
        <?php 
          $categories = $this->modelListCategories();
         ?>
         <?php foreach($categories as $rowsCategories): ?>
        <li><a href="index.php?controller=products&action=category&id=<?php echo $rowsCategories->id;?>" style="font-size: 15px;"><?php echo $rowsCategories->name; ?></a></li>
        <?php endforeach; ?>
      </ul>
       <hr style="margin-bottom: 20px; margin-top: 20px;">
       <b style="font-size: 16px; color: green; margin-left: 60px;">TÌM KIẾM NHANH</b>
      <div class="searchflash">
        <input type="checkbox" id="quan" style="margin-left: 30px;">
        <label style="margin-right: 53px;"> Quần</label>
        <input type="checkbox" id="ao">
        <label> Áo</label><br>
        <input type="checkbox" id="vaynu" style="margin-left: 30px;">
        <label"> Váy nữ</label><br>
        <input type="checkbox" id="giay" style="margin-left: 30px;">
        <label style="margin-right: 58px;"> Giày</label>
        <input type="checkbox" id="dep">
        <label> Dép</label><br>
        <input type="checkbox" id="tui" style="margin-left: 30px;">
        <label style="margin-right: 30px;"> Túi xách</label>
        <input type="checkbox" id="vi">
        <label> Ví</label><br>
        <input type="checkbox" id="nam" style="margin-left: 30px;">
        <label style="margin-right: 60px;"> Nam</label>
        <input type="checkbox" id="nu">
        <label> Nữ</label>
      </div>
<style type="text/css">
  .searchflash{margin-top: 22px; font-size: 17px; font-family: times new roman; font-weight: bold; color: red;}

</style>
<script type="text/javascript">
   document.getElementById('vaynu').onclick = function(){
                if (this.checked){
                    window.location.href='index.php?controller=search&action=searchFlash&key=vay';
                }
                else{}
            };
  document.getElementById('quan').onclick = function(){
                if (this.checked){
                    window.location.href='index.php?controller=search&action=searchFlash&key=quan';
                }
                else{}
            };
  document.getElementById('ao').onclick = function(){
                if (this.checked){
                    window.location.href='index.php?controller=search&action=searchFlash&key=ao';
                }
                else{}
            };
          document.getElementById('giay').onclick = function(){
                if (this.checked){
                    window.location.href='index.php?controller=search&action=searchFlash&key=giay';
                }
                else{}
            };
          document.getElementById('dep').onclick = function(){
                if (this.checked){
                    window.location.href='index.php?controller=search&action=searchFlash&key=dep';
                }
                else{}
            };
          document.getElementById('tui').onclick = function(){
                if (this.checked){
                    window.location.href='index.php?controller=search&action=searchFlash&key=tui';
                }
                else{}
            };
           document.getElementById('vi').onclick = function(){
                if (this.checked){
                    window.location.href='index.php?controller=search&action=searchFlash&key=vi';
                }
                else{}
            };
          document.getElementById('nam').onclick = function(){
                if (this.checked){
                    window.location.href='index.php?controller=search&action=searchFlash&key=nam';
                }
                else{}
            };
           document.getElementById('nu').onclick = function(){
                if (this.checked){
                    window.location.href='index.php?controller=search&action=searchFlash&key=nu';
                }
                else{}
            };

 
</script>
<style type="text/css">
        .sp-left > ul >li:hover{background: linear-gradient(to right, white,white,white,green);}
      </style>
        <div class="category2">
      <ul style="margin-top: 65px;">
        <li style="margin-bottom: 55px;"><a href="#"><img src="../assets/frontend/images/qc1.png"></a></li>
        <li style="margin-bottom: 55px;"><a href="#"><img src="../assets/frontend/images/qc2.png"></a></li>
        <li style="margin-bottom: 55px;"><a href="#"><img src="../assets/frontend/images/qc3.png"></a></li>
        <li style="margin-bottom: 55px;"><a href="#"><img src="../assets/frontend/images/qc1.png"></a></li>
         
      </ul>
    </div>  
  </div>
  <!-- /sp_left -->
  <div class="range"  style="height: 1950px;">&nbsp</div>
  <!-- main -->
  <div class="sp-main">
<!-- content_search -->


   <?php 
                  $key = isset($_GET["key"]) ? $_GET["key"] : "";
                 ?>
                 <h2 style="margin-left: 300px; color: red; margin-bottom: 10px; padding-top: 7px;">TÌM KIẾM</h2>
                 <hr style="margin-left: 250px; width: 180px; background: green; height: 2px;">
      <ul class="sp">
        <?php foreach($data as $rows): ?>
     <li class="container" style="margin-right: 10px; border: linear-gradient(to left, #743ad5, #d53a9d);"><div class="image"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id;?>&star=5">
        
      <img src="../assets/upload/products/<?php echo $rows->photo;?>" style="width: 185px; height: 185px;">
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
<style type="text/css">
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
.sp > li{
  display: inline-block;
  border: 1px solid #7b3e4e;
  padding: 10px;
  margin-right: 20px;
  margin-top: 30px;
  margin-bottom: 10px;
}
.sp > li .ten{
  font-size: 12.5px;
}
.sp > li .gia{
  margin-left:20px;
  color: green;
  font-weight: bold;
  font-size: 14px;
  }
.sp > li .gia >b
{
  text-decoration: line-through;
  color: black;
  font-size: 12px;
}
.sp > li .slban
{
  margin-left: 100px;
  font-size: 11px;
}
.sp > li:hover
{
  border: 3px solid green;
}
.pagination{
  display: flex;
  list-style: none;
}
.pagination > li{border: 1px solid green;
  border-radius: 7px;
padding: 10px;
margin-right: 10px;}
</style>
                <div style="clear: both;"></div>
                <div style="margin-top: 10px; position:absolute; bottom: -1730px;"  class="&#x70;&#x61;&#x67;&#x69;&#x6E;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x2D;&#x63;&#x6F;&#x6E;&#x74;&#x61;&#x69;&#x6E;&#x65;&#x72;">
                  <ul class="pagination" style="font-weight: bold;">
                    <li class="page-item"><span>Trang</span></li>
                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                    <li class="page-item"><a class="page-link" href="index.php?controller=search&action=searchFlash&key=<?php echo $key; ?>&p=<?php echo $i; ?>" style="text-decoration: none; color: black;"><?php echo $i; ?></a></li>
                    <?php endfor; ?>
                  </ul>
                </div>
            