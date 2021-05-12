<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<?php 
          $id = $_SESSION["id"];
          $check = $this->modelCheck($id);
         ?>
<?php if ($check == 0): {
    header("location:index.php?controller=users&action=error&message=noRight");
} ?>
<?php else:  ?>
<div class="col-md-12"> 
    <div style="margin-bottom:5px;">
        <div style="color: black; font-size: 17px; text-decoration: underline;">Thống kê hóa đơn sản phẩm</div>
        <div style=" color: black; font-size: 15px; margin-top: 15px; margin-bottom: 15px;">
            <form method="post" enctype="multipart/form-data" action="index.php?controller=statistical&action=detail">
        Từ <input type="date" name="start" value="<?php echo $date_start ?>"> đến <input type="date" name="finish" value="<?php echo $date_finish ?>"> <input type="submit" value="Thống kê">
         </form></div>
    <div class="panel panel-primary" style="border-color: green;">
        <div class="panel-heading" style="background-color: gray;">Danh sách đơn hàng  
        			( từ 
        				<?php 
                        $date = Date_create($date_start);
                        echo Date_format($date, "d/m/Y"); ?> 
                      đến 
                      	<?php 
                        $date = Date_create($date_finish);
                        echo Date_format($date, "d/m/Y"); ?> )</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover" style="color: black; border: 2px solid green; margin-top: 10px; ">
                <tr style="font-weight: bold;border: 2px solid green;">
                    <th>Khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Ngày mua</th>
                    <th>Thành tiền</th> 
                    <th style="width:150px;">Nhận hàng</th>                   
                    <th style="width:150px; text-align: center;">Trạng thái</th>
                    <th style="width:150px;">Chức năng</th>
                </tr>
                <?php foreach($data as $rows): ?>
                <?php   
                    //lay ban ghi customer
                  $customer = $this->modelGetCustomers($rows->customer_id);
                 ?>
                 <tr>
                     <td><?php echo $customer->fullname; ?></td>
                     <td><?php echo $customer->phone; ?></td>
                     <td>
                        <?php 
                        $date = Date_create($rows->date);
                        echo Date_format($date, "d/m/Y");
                        ?>                            
                        </td>
                     <td><?php echo number_format($rows->price); ?></td>
                     <td style="text-align: center;">
                         <?php if($rows->deliveried == 1): ?>
                            <span class="label label-primary">Đã nhận hàng</span>
                         <?php else: ?>
                            <span class="label label-danger">Chưa nhận hàng</span>
                         <?php endif; ?>
                     </td>
                     <td style="text-align: center;">
                         <?php if(($rows->deliveried == 1) || ($rows->status == 1 && $rows->deliveried == 0) ): ?>
                            <a href="index.php?controller=orders&action=dagiaohang&id=<?php echo $rows->id; ?>" class="label label-info">Đã giao hàng</a>
                         <?php else: ?>
                            <span class="label label-danger">Chưa giao hàng</span>
                         <?php endif; ?>
                     </td>
                     <td style="text-align: center;">
                        <a href="index.php?controller=orders&action=detail&id=<?php echo $rows->id; ?>" class="label label-success">Chi tiết</a>
                        <?php if($rows->status == 0 && $rows->deliveried == 0): ?>
                            <a href="index.php?controller=orders&action=delivery&id=<?php echo $rows->id; ?>" class="label label-info">Giao hàng</a>
                         <?php endif; ?>
                     </td>
                 </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            
                
                <ul class="pagination">
                    <li class="disabled"><a href="#" style="border-color: black; color: black;">Trang</a></li>
                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                    <li><a href="index.php?controller=users&action=read&p=<?php echo $i; ?>" style="border-color: black;"><?php echo $i; ?></a></li>
                    <?php endfor; ?>
                </ul>
            
        </div>
    </div>
</div>
<?php foreach ($revenue as $rows): ?>
<div style="color: black; font-size: 18px; font-weight: bold;"><b style="text-decoration: underline;">Tổng doanh thu</b> : <?php echo number_format($rows->doanhthu) ?>đ</div>
<?php endforeach ?>
<?php endif; ?>