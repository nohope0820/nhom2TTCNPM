<!-- load file layout chung -->
<?php 
          $id = $_SESSION["id"];
          $check = $this->modelCheck($id);
         ?>
<?php if ($check == 0): {
    header("location:index.php?controller=users&action=error&message=noRight");
} ?>
<?php else:  ?>
<?php $this->layoutPath = "Layout.php"; ?>
<?php 
 $key = $_GET["key"];
 ?>
<div style=" color: black; font-size: 20px; margin-bottom: 15px; font-family: time new roman; text-decoration: underline;">Kết quả tìm kiếm : <?php echo $key; ?></div>
<div class="col-md-12">
    <div class="panel panel-primary" style="border-color: green;">
        <div class="panel-heading" style="background-color: gray;">Danh sách sản phẩm</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover" style="color: black;border: 2px solid gray;">
                <tr style="border: 3px solid green;">
                    <th style="width: 150px;">Ảnh</th>
                    <th>Name</th>
                    <th style="width: 100px;">Giá cũ</th>
                    <th style="width: 100px;">Giá mới</th>
                    <th style="width: 120px;">Khuyến mãi(%)</th>
                    <th style="width:100px;">Danh mục</th>
                    <th style="width:50px; text-align: center;">Hot</th>
                    <th style="width:150px;"></th>
                </tr>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td style="text-align: center;">
                        <?php if($rows->photo != "" && file_exists("../assets/upload/products/".$rows->photo)): ?>
                            <img src="../assets/upload/products/<?php echo $rows->photo; ?>" style="width:120px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $rows->name; ?></td>
                    <td style="text-align: center;">
                        <?php echo number_format($rows->price); ?>
                    </td>
                    <td style="text-align: center;">
                        <?php echo number_format($rows->giamoi); ?>
                    </td>
                    <td style="text-align: center;">
                        <?php echo $rows->discount; ?> %
                    </td>
                    <td style="text-align: center;">
                        <?php echo $this->modelGetCategory($rows->category_id); ?>
                    </td>
                    <td style="text-align: center;">
                        <?php if($rows->hot == 1): ?>
                            <span class="fa fa-check"></span>
                        <?php endif; ?>
                    </td>                
                    <td style="text-align:center;">
                        <button style="border-color: green;"><a href="index.php?controller=products&action=update&id=<?php echo $rows->id; ?>">Sửa</a></button> &nbsp; 
                        <button style="border-color: gray;"><a href="index.php?controller=products&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Xóa</a></button>
                    </td>
                </tr>
            	<?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <div>
            	<ul class="pagination">
                    <li class="disabled"><a href="#" style="border-color: black; color: black;">Trang</a></li>
                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                    <li><a href="index.php?controller=products&p=<?php echo $i; ?>" style="border-color: black;"><?php echo $i; ?></a></li>
                    <?php endfor; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
