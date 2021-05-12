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
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=news&action=create" class="btn btn-primary" style="border-color: green; background-color: green;">Thêm tin tức</a>
    </div>
    <div class="panel panel-primary" style="border-color: green;">
        <div class="panel-heading" style="background-color: gray;">Danh sách tin tức</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover" style="color: black;border: 2px solid gray;">
                <tr style="color: black; border: 3px solid green;">
                    <th style="width: 120px;">Ảnh</th>
                    <th>Tiêu đề</th>
                    <th style="width:100px; text-align: center;">Hot</th>
                    <th style="width:150px;"></th>
                </tr>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td style="text-align: center;">
                        <?php if($rows->photo != "" && file_exists("../assets/upload/news/".$rows->photo)): ?>
                            <img src="../assets/upload/news/<?php echo $rows->photo; ?>" style="width:120px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $rows->name; ?></td>
                    <td style="text-align: center;">
                        <?php if($rows->hot == 1): ?>
                            <span class="fa fa-check"></span>
                        <?php endif; ?>
                    </td>                
                    <td style="text-align:center;">
                       <button style="border-color: green;"><a href="index.php?controller=news&action=update&id=<?php echo $rows->id; ?>">Sửa</a></button> &nbsp; 
                        <button style="border-color: gray;"><a href="index.php?controller=news&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Xóa</a></button>
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
                    <li><a href="index.php?controller=users&p=<?php echo $i; ?>" style="border-color: black;"><?php echo $i; ?></a></li>
                    <?php endfor; ?>
            	</ul>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>