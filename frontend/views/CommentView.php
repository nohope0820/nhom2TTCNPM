<?php $this->layoutPath = "LayoutTrangTrong.php"; ?>
    <?php $id = $_GET["id"]; ?>


<div style="margin-left: 200px; margin-top: 70px; background: white; width: 1200px;height: 450px;border: 2px solid pink;">

             
<div style="font-size: 20px; font-family: times new roman; font-weight: bold;padding-top: 30px; padding-left: 50px;">Mời Anh/chị mô tả chất lượng sản phẩm:</div>
     <div style="margin-top: 40px; margin-left: 230px;">
        <form method="post" action="index.php?controller=process&action=commentPost&id=<?php echo $id; ?>">
     	<input type="text" name="name" value="<?php echo $_SESSION["customer_name"]; ?>" disabled style="padding: 12px; width: 270px; margin-bottom: 20px; border: 2px solid;padding-left: 15px;"><br>
     	<textarea type="text" placeholder="Ghi chú" rows="10" name="danhgia" style="padding: 9px; width: 660px; margin-bottom: 20px; border: 2px solid;padding-left: 15px;"></textarea>
     	<input type="submit" name="submit" value="Đăng" style="padding: 10px; background: red; color: white; font-weight: bold;font-size: 15px; margin-left: 625px; margin-top: 15px; border-radius: 5px">
     </form>
     </div>
</div>