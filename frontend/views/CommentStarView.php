<?php $this->layoutPath = "LayoutTrangTrong.php"; ?>
    <?php $id = $_GET["id"]; ?>


<div style="margin-left: 200px; margin-top: 80px; background: white; width: 1200px;height: 320px; border:2px solid pink; margin-bottom: 100px;">
<div style="font-size: 20px; font-family: times new roman; font-weight: bold;padding-top: 50px; padding-left: 50px;">Mời Anh/chị đánh giá chất lượng sản phẩm:</div>
<div id="rating" style="padding-top: 35px; padding-left: 350px; padding-bottom: 82px;">
    <input type="radio" id="star5" name="rating" value="5" onclick="window.location.href='index.php?controller=process&action=rating&star=5&id=<?php echo $id; ?>';alert('Cảm ơn:))Đánh giá của anh/chị đã được ghi lại')" />
    <label class = "full" for="star5" title="Tuyệt vời - 5 Sao"></label>
 
    <input type="radio" id="star4" name="rating" value="4"  onclick="window.location.href='index.php?controller=process&action=rating&star=4&id=<?php echo $id; ?>';alert('Cảm ơn:))Đánh giá của anh/chị đã được ghi lại')" />
    <label class = "full" for="star4" title="Rất tốt - 4 sao"></label>
 
    <input type="radio" id="star3" name="rating" value="3"  onclick="window.location.href='index.php?controller=process&action=rating&star=3&id=<?php echo $id; ?>';alert('Cảm ơn:))Đánh giá của anh/chị đã được ghi lại')" />
    <label class = "full" for="star3" title="Tốt - 3 sao"></label>
 
    <input type="radio" id="star2" name="rating" value="2"  onclick="window.location.href='index.php?controller=process&action=rating&star=2&id=<?php echo $id; ?>';alert('Cảm ơn:))Đánh giá của anh/chị đã được ghi lại')" />
    <label class = "full" for="star2" title="Tệ - 2 sao"></label>
 
    <input type="radio" id="star1" name="rating" value="1"  onclick="window.location.href='index.php?controller=process&action=rating&star=1&id=<?php echo $id; ?>';alert('Cảm ơn:))Đánh giá của anh/chị đã được ghi lại')" />
    <label class = "full" for="star1" title="Qúa tệ - 1 sao"></label>
</div>
</div>
<style type="text/css">

/****** Style Star Rating Widget *****/
#rating{border:none;float:left;}
#rating>input{display:none;}/*ẩn input radio - vì chúng ta đã có label là GUI*/
#rating>label:before{margin:10px;font-size:6.25em;font-family:FontAwesome;display:inline-block;content:"\f005";}/*1 ngôi sao*/
#rating>label{color:#ddd;float:right;}


/*thêm màu cho sao đã chọn và các ngôi sao phía trước*/
#rating>input:checked~label,
#rating:not(:checked)>label:hover, 
#rating:not(:checked)>label:hover~label{color:green;}
/* Hover vào các sao phía trước ngôi sao đã chọn*/
#rating>input:checked+label:hover,
#rating>input:checked~label:hover,
#rating>label:hover~input:checked~label,
#rating>input:checked~label:hover~label{color:red;}
</style>
 
