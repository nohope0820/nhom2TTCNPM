<!-- load file layout chung -->
<?php $this->layoutPath = "LayoutTrangTrong.php"; ?>
<!-- content-show -->
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
<!-- /content-show -->
<!-- sanpham -->
<div class="all_sanpham" style="height: 1950px;">
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
        <div class="category2">
      <ul>
        <li><a href="#"><img src="../assets/frontend/images/qc1.png"></a></li>
        <li><a href="#"><img src="../assets/frontend/images/qc2.png"></a></li>
        <li><a href="#"><img src="../assets/frontend/images/qc3.png"></a></li>
        <li><a href="#"><img src="../assets/frontend/images/qc1.png"></a></li>
         
      </ul>
    </div>  
  </div>
  <!-- /sp_left -->
  <div class="range"  style="height: 1950px;">&nbsp</div>
  <!-- main -->
  <div class="sp-main">
    <!-- search -->
    <div class="search">
      <div class="sx1"><b>Ưu tiên xem :</b></div>
      <div class="sx2">
        <?php 
                  $category_id = isset($_GET["id"]) ? $_GET["id"] : 0;
                 ?>
        <select onchange="location.href = 'index.php?controller=products&action=filter&id=<?php echo $category_id; ?>&order='+this.value;">
        <option value="0"> Sắp xếp theo giá </option>
        <option value="priceRandom"> Giá ngẫu nhiên </option>
        <option value="priceDesc"> Giá từ lớn đến bé </option>
        <option value="priceAsc"> Giá từ bé đến lớn</option>
      </select>
      </div>
      <div class="sx3">
        <select onchange="location.href = 'index.php?controller=products&action=filter&id=<?php echo $category_id; ?>&order='+this.value;">
        <option value="0"> Ghọn mức giá </option>
        <option value="giaRe"> 0 -> 250.000đ </option>
        <option value="giaTb"> 251.000đ -> 700.000đ</option>
        <option value="giaKha"> 701.000đ -> 1.500.000đ</option>
        <option value="giaLon"> Lớn hơn 1.500.000đ</option>
      </select>
      </div>
      <div class="sx4">
        <button>Tìm kiếm</button>
      </div>
    </div>
    <!-- /saerch -->
    <div class="range">&nbsp</div>
<!-- content_search -->
    <div class="content-main">
      <?php 
                  $category_id = isset($_GET["id"]) ? $_GET["id"] : 0;
                 ?>
    <div class="name-main" style="text-transform: uppercase;"><?php echo $this->modelGetCategory($category_id); ?></div>
    <hr>
   </div>
      <!-- /content-main -->
       <ul class="sp">
        <?php foreach($data as $rows): ?>
      <li>
        <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="../assets/upload/products/<?php echo $rows->photo; ?>" style="width: 185px; height: 185px;"></a>
        <div class="ctsp">
      <div class="ten"><br><?php echo $rows->name; ?></div><br>
      <div class="gia"><b><?php echo number_format($rows->price); ?>đ </b>&nbsp - &nbsp <?php echo number_format($rows->giamoi); ?>đ</div><br>
      <div><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id;?>" style="border: 1px solid green; border-radius: 10px; padding: 6px; text-decoration: none; color: white; background: green; margin-left: 47px;">Xem chi tiết</a></div>
        </a></li>
        <?php endforeach; ?>
      </ul>
<style type="text/css">
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

<!-- paging -->
<?php 
$order = $_GET["order"];
 ?>               

                <div style="margin-top: 50px; position:absolute; bottom: -1730px;"  class="">
                   <ul class="pagination" style="font-weight: bold;">
                    <li class="page-item"><span>Trang</span></li>
                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                    <li class="page-item"><a class="page-link" href="index.php?controller=products&action=filter&id=<?php echo $category_id; ?>&order=<?php echo $order; ?>&p=<?php echo $i; ?>" style="text-decoration: none; color: black;"><?php echo $i; ?></a></li>
                    <?php endfor; ?>
                  </ul>
                </div>
                <!-- end paging --> 