<!-- load file layout chung -->
<?php $this->layoutPath = "LayoutTrangTrong.php"; ?>
<!-- content -->
    <div class="content">
        
<div class="box">
        <div class="main"><div class="thumbnail"><img id="imgShow" src="../assets/upload/products/<?php echo $record->photo; ?>"></div></div>
    <div class="list-img">
        <ul>
                <li><img id="img2" src="../assets/upload/products/<?php echo $record->photo1; ?>"></li>
                <li><img id="img3" src="../assets/upload/products/<?php echo $record->photo2; ?>"></li>
                <li><img id="img4" src="../assets/upload/products/<?php echo $record->photo3; ?>"></li>
                <li><img id="img5" src="../assets/upload/products/<?php echo $record->photo4; ?>"></li>
                <li><img id="img6" src="../assets/upload/products/<?php echo $record->photo5; ?>"></li>
        </ul>
    </div>
</div>

<script type="text/javascript">
        //ham reset style
        function resetStyle(){
                document.getElementById('img2').removeAttribute("style");
                document.getElementById('img3').removeAttribute("style");
                document.getElementById('img4').removeAttribute("style");
                document.getElementById('img5').removeAttribute("style");
                document.getElementById('img6').removeAttribute("style");
        }
        //bắt sự kiện click của id-img1
        document.getElementById('img2').addEventListener("mouseenter", function(){
                //lấy giá trị của thuộc tính
                var srcImg2 = document.getElementById('img2').getAttribute("src");
                //thay đôi giá trị
                var srcImg2 = document.getElementById('imgShow').setAttribute("src",srcImg2);
                //reset đường viền
                resetStyle();
        //tac dộng vào thuộc tính
                document.getElementById('img2').setAttribute("style","border:2px solid green;");

        });
        document.getElementById('img3').addEventListener("mouseenter", function(){
                //lấy giá trị của thuộc tính
                var srcImg3 = document.getElementById('img3').getAttribute("src");
                //thay đôi giá trị
                var srcImg3 = document.getElementById('imgShow').setAttribute("src",srcImg3);
        //reset đường viền
                resetStyle();
                document.getElementById('img3').setAttribute("style","border:2px solid green;");

        });
        document.getElementById('img4').addEventListener("mouseenter", function(){
                //lấy giá trị của thuộc tính
                var srcImg4 = document.getElementById('img4').getAttribute("src");
                //thay đôi giá trị
                var srcImg4 = document.getElementById('imgShow').setAttribute("src",srcImg4);
                //reset đường viền
                resetStyle();

                document.getElementById('img4').setAttribute("style","border:2px solid green;");

        });
        document.getElementById('img5').addEventListener("mouseenter", function(){
                //lấy giá trị của thuộc tính
                var srcImg5 = document.getElementById('img5').getAttribute("src");
                //thay đôi giá trị
                var srcImg5 = document.getElementById('imgShow').setAttribute("src",srcImg5);
        //reset đường viền
                resetStyle();
                document.getElementById('img5').setAttribute("style","border:2px solid green;");

        });
        document.getElementById('img6').addEventListener("mouseenter", function(){
                //lấy giá trị của thuộc tính
                var srcImg6 = document.getElementById('img6').getAttribute("src");
                //thay đôi giá trị
                var srcImg6 = document.getElementById('imgShow').setAttribute("src",srcImg6);
        //reset đường viền
                resetStyle();
                document.getElementById('img6').setAttribute("style","border:2px solid green;");

        });

</script>
<div class="chitietsp">
        <div class="tensp"><?php echo $record->name; ?></div>
        <div class="giasp">
                <div class="gia"><a><?php echo number_format($record->price); ?>đ </a><b> <?php echo number_format($record->giamoi); ?>đ </b><span> giảm <?php echo $record->discount; ?>%</span> 
                </div>
        </div>

        <div class="size" style="margin-top: -50px; margin-bottom: 35px;"><b>Size :</b>
           <form method="post" action="">
          <select  id="size" name="size">
            <option value="0">Chọn size</option>
            <option value="<?php echo $record->size1; ?>"><?php echo $record->size1; ?></option>
            <option value="<?php echo $record->size2; ?>"><?php echo $record->size2; ?></option>
            <option value="<?php echo $record->size3; ?>"><?php echo $record->size3; ?></option>
            <option value="<?php echo $record->size4; ?>"><?php echo $record->size4; ?></option>
            <option value="<?php echo $record->size5; ?>"><?php echo $record->size5; ?></option>
          </select>
        </form>
<style type="text/css">
select{padding: 8px; margin-left: 40px; width: 210px;padding-left: 15px;font-weight: bold; background: pink; font-size: 16px;}
</style>     
</div>
        <!-- so luong -->
        <div class="soluong">
                <b>Số lượng</b> : &nbsp 
                 <input class="minus is-form" type="button" value="-">
         <input class="input-qty" id="quantity" max="10" min="1" name="" type="number" value="1">
         <input class="plus is-form" type="button" value="+">
        </div>
         <script type="text/javascript">
$('input.input-qty').each(function() {
  var $this = $(this),
    qty = $this.parent().find('.is-form'),
    min = Number($this.attr('min')),
    max = Number($this.attr('max'))
  if (min == 0) {
    var d = 0
  } else d = min
  $(qty).on('click', function() {
    if ($(this).hasClass('minus')) {
      if (d > min) d += -1
    } else if ($(this).hasClass('plus')) {
      var x = Number($this.val()) + 1
      if (x <= max) d += 1
    }
    $this.attr('value', d).val(d)
  })
})
  </script>
  <!-- /soluong -->
        <div class="thanhtoan">

                <input type="submit" onclick="addCart();" style="color: black; text-decoration: none;font-size: 12px;padding: 10px;" value="THÊM VÀO GIỎ HÀNG">

                <script type="text/javascript">
        function addCart(){
                var quantity = document.getElementById('quantity').value;
                var size = document.getElementById('size').value;
                location.href="index.php?controller=cart&action=createWithNumber&id=<?php echo $record->id; ?>&quantity="+quantity+"&size="+size;
        }

</script>
            <button class="mua" type="submit" onclick="addCart();">Mua ngay</button></div>
          
        </div>
      
</div>

    </div>
    <div class="motasp" style="background: white;
    margin-top: 40px;
    margin-left: 160px;
    width: 1160px;
    padding-bottom: 30px;">
        <div class="mt1">Mô tả sản phẩm</div>
        <hr>
        <div class="mt2"><?php echo $record->description; ?></div>
    </div>

    <div style="background: white;
    margin-top: 40px;
    margin-left: 160px;
    width: 1160px;
    padding-bottom: 50px;">
        <div style="padding-top: 15px;
    margin-left: 50px;
    font-size: 22px;
    font-family: times new roman;
    font-weight: bold;">Đánh giá sản phẩm</div>
        <hr style=" width: 1000px;
    margin-left: 50px;
    background-color: pink;">
      <div style="padding: 15px;border: 3px solid red;width: 170px;border-radius: 20px; margin-left: 100px; margin-top: 30px;">Đánh giá chung: <b style="font-size: 25px;color: red;"><?php echo $this->modelTotalRating($record->id); ?><i class="fa fa-star-o" style="color: green;"></i></b></div>
      <?php $id=$_GET["id"]; ?>
      <ul class="star">
        <li style="background: red;"><a href="index.php?controller=products&action=detail&id=<?php echo $id; ?>&star=5"> 5 sao</a></li>
        <li style="background: blue;"><a href="index.php?controller=products&action=detail&id=<?php echo $id; ?>&star=4"> 4 sao</a></li>
        <li style="background: green;"><a href="index.php?controller=products&action=detail&id=<?php echo $id; ?>&star=3"> 3 sao</a></li>
        <li style="background: orange;"><a href="index.php?controller=products&action=detail&id=<?php echo $id; ?>&star=2"> 2 sao</a></li>
        <li style="background: gray;"><a href="index.php?controller=products&action=detail&id=<?php echo $id; ?>&star=1"> 1 sao</a></li>
      </ul>
      <hr style="height: 2px; width: 650px; background: pink; margin-left:200px; margin-top: 70px; ">
      <div style="margin-top: 30px; font-size: 18px; font-family: times new roman; margin-left: 80px; text-decoration: underline;">Một số nhận xét về sản phẩm</div>
             <ul class="comment">
               <?php $comment = $this->modelComment(); ?>
               <?php foreach ($comment as $rows): ?>
                 <li>
                   <div>
                     <div style="margin-left: 20px;padding: 10px; font-size: 15px; color: black;"><i class="fa fa-user"></i> <b style="text-decoration: underline;"><?php echo $rows->customer_name; ?></b> ( đã đánh giá <?php echo $rows->star; ?><i class="fa fa-star"></i>)</div>

                     <div style="padding-bottom: 5px; font-family: times new roman; font-size: 15px;margin-left: 15px;"><?php echo $rows->danhgia; ?></div>
                   </div>
                 </li>
               <?php endforeach; ?>
              </ul>
         


 <style type="text/css">
   .star{list-style: none;
    margin-left: 380px;
    margin-top: -58px;
    margin-bottom: 50px;}
   .star > li{display: inline-block;
              padding: 12px 20px;
              font-size: 18px;
              margin-right: 30px;
              border: 2px solid black;
              border-radius: 20px;
              color: white;}
      .star > li > a{color: white; text-decoration: none;}
  .comment{list-style: none;
    margin-left: 150px; margin-top: 35px;}
  .comment > li {width: 700px; border:1px solid red;
                 background: linear-gradient(to right, white,white,white,green);
               }
 </style>        

        
    </div>

    <div class="spkhac">
        <div class="gtsp"> Một số sản phẩm khác</div>
        <hr>
        <div class="content-giaynu">
                <ul id="sp">
         <?php $hotProducts = $this->modelHotProducts(); ?>
               <?php foreach ($hotProducts as $rows): ?>
    <li><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id;?>"><img src="../assets/upload/products/<?php echo $rows->photo;?>">
        <div class="ctsp">
      <div class="ten"><br><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id;?>" style="text-decoration: none; color: black;" ><?php echo $rows->name; ?></a></div><br>
      <div class="gia"><b><?php echo number_format($rows->price); ?>đ </b>&nbsp - &nbsp <?php echo number_format($rows->giamoi); ?>đ</div><br>
      <div><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id;?>" style="border: 1px solid green; border-radius: 10px; padding: 6px; text-decoration: none; color: white; background: green; margin-left: 47px;">Xem chi tiết</a></div>
      </div>
    </a></li>
    <?php endforeach; ?>
</ul>
    </div>
    </div>
    <!-- /content -->
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
        .content
 {
        background: white;
        height: 590px;
        width: 1160px;
        margin-top: 50px;
        margin-left: 165px;
        display: flex;
 }

 .content > .box{width: 460px; padding-top: 15px;
        margin-left: 15px;}
        .main > .thumbnail > img{width: 460px; border: 2px solid pink;}
  .thumbnail {
    overflow: hidden;
}

.thumbnail > img {
    width: 100%;
    height: 100%;
    transition-duration: 0.3s;
    cursor: pointer;
}

.thumbnail > img:hover {
    transform: scale(1.6);
}
        .list-img ul{padding: 0px; margin: 0px; list-style: none; display: flex;}
        .list-img ul li img{width: 78px;}
        .list-img {margin-top: 10px;}
        .list-img ul li{margin-right: 17px;}
 .content > .chitietsp
 {
        padding-top: 25px;
        margin-left: 50px;
 }      
 .chitietsp > .tensp
 {
        font-size: 22px;
 }
  .chitietsp > .giasp
  {
        background: #fbfbfc;
        margin-left:0px;
        margin-top: 30px;
        height: 130px;
        width: 600px;
  }
  .giasp > .gia
  {
        padding-top: 30px;
        margin-left: 50px;
  }
  .giasp > .gia > a
  {
        color: #2e5b56;
        font-size: 17px;
        text-decoration: line-through;
  }
  .giasp > .gia > b
  {
        margin-left: 20px;
        font-size: 25px;
        color: red;
        font-family: times new roman;
  }
  .giasp > .gia > span
  {
        margin-left: 15px;
        background: red;
        padding: 3px 5px;
        color: white;
        border-radius: 3px;
  }



.chitietsp > .size
 {
  padding-top: 70px;
 }
  .chitietsp > .size > b
  {
        font-size: 14px;
  }
    .chitietsp > .size > ul
    {
        margin: 0px;
        padding: 0px;
        list-style: none;
        margin-left: 90px;
        margin-top: -26px;
    }
     .chitietsp > .size > ul >li
     {
        display: inline-block;
        margin-right: 20px;
     }
      .chitietsp > .size > ul >li > button
      {
        padding: 10px 20px;
        background: white;
        color: black;
        border: 1px solid pink;
        cursor: pointer;
      }
       .chitietsp > .size > ul >li > button:hover
       {
        border: 1px solid green;
       }

 .chitietsp > .soluong
 {
  padding-top: 85px;
  font-size: 15px;
 }
.is-form {
    overflow:hidden;
    position:relative;
    background-color:#f9f9f9;
    padding:8px 16px;
    text-shadow:1px 1px 1px #fff;
    border:1px solid pink;

}
.is-form.minus{
  margin-left: 50px;
}
.is-form:focus,.input-text:focus {
    outline:none;
}
.input-qty::-webkit-outer-spin-button,.input-qty::-webkit-inner-spin-button {
    -webkit-appearance:none;
    margin:0;
}
  .chitietsp > .soluong  > .input-qty
  {
        width: 35px;
        text-align: center;
        font-size: 14px;
        font-family: times new roman;
        height: 30px;
        border: 1px solid black;
        border-radius: 0px;
    margin-left: -4.5px;
    margin-right: -4.5px;
  }
  .chitietsp > .thanhtoan
  {
        padding-top: 60px;
    display: flex;
    margin-left: 30px;
  }
  .thanhtoan > .them
  {
        border: 1px solid green;
        background: #e9edf3;
        padding: 5px 10px;
    cursor: pointer;
  }
   .thanhtoan > .them > i
   {
        vertical-align: middle;
   }
    .thanhtoan > .mua
  {
        margin-left: 30px;
        border: 1px solid green;
        background: green;
        padding: 8px 40px;
        font-weight: bold;
        color: white;
    cursor: pointer;
  }
  .motasp
  {
        background: white;
        margin-top: 40px;
        margin-left: 160px;
        width: 1160px;
        height: 160px;
  }
   .motasp > .mt1
   {
        padding-top: 15px;
        margin-left: 50px;
        font-size: 22px;
    font-family: times new roman;
    font-weight: bold;
   }
   .motasp > hr
   {
        width: 1000px;
        margin-left: 50px;
        background-color: pink;
   }
   .motasp > .mt2
   {
        padding-top: 25px;
        font-size: 15px;
        font-family: times new roman;
        margin-left: 50px
   }
     .spkhac
  {
        background: white;
        margin-top: 40px;
        margin-left: 160px;
        width: 1160px;
        height: 700px;
  }
    .spkhac > .gtsp
   {
        padding-top: 15px;
        margin-left: 50px;
        font-size: 22px;
    font-family: times new roman;
    font-weight: bold;
   }
   .spkhac > hr
   {
        width: 1000px;
        margin-left: 50px;
        background-color: pink;
        margin-top: 20px;
   }
   .spkhac > .content-giaynu
{
        margin-top: 25px;
}
.spkhac > .content-giaynu > ul
{
        margin:0px;
        padding: 0px;
        list-style: none;
        margin-left: 40px;
}
.spkhac > .content-giaynu img{
        width: 175px;
        height: 175px;
}
.spkhac > .content-giaynu > ul >li
{
        display: inline-block;
        border: 1px solid #7b3e4e;
        padding: 10px;
        margin-right: 13px;
        margin-bottom: 20px;
}
.content-giaynu > ul > li >.ctsp >  .ten{
        font-size: 12.5px;
}
.content-giaynu > ul > li >.ctsp >  .gia{
        margin-left:20px;
        color: green;
        font-weight: bold;
        font-size: 14px;
        }
.content-giaynu > ul > li >.ctsp > .gia >b
{
        text-decoration: line-through;
        color: black;
        font-size: 12px;
}
.content-giaynu > ul > li > .ctsp >.slban
{
        margin-left: 100px;
        font-size: 11px;
}
.content-giaynu a
{
        text-decoration: none;
        color: black;
}
.content-giaynu > ul > li:hover
{
        border: 2px solid green;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 10px;
  right: 10px;
  z-index: 99;
  border:1px solid pink;
  outline: none;
  background-color: green;
  cursor: pointer;
  padding: 6px;
}

#myBtn:hover {
  background-color: #555;
}


</style>