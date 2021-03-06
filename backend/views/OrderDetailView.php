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
        <input onclick="history.go(-1);" type="button" value="Quay lại" class="btn btn-danger" style="background-color: green;">
    </div>    
    <div class="panel panel-primary">
        <div class="panel-heading" style="background-color: gray;">Chi tiết đơn hàng</div>
        <div class="panel-body">
            <!-- thong tin don hang -->
            <?php
                $order_id = $_GET["id"];
                $order = $this->modelGetOrders($order_id);
                $customer = $this->modelGetCustomers($order->customer_id);
             ?>
            <table class="table" style=" color: black;">
                <tr>
                    <th style="width: 100px;">Họ tên</th>
                    <td><?php echo $customer->fullname; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Địa chỉ</th>
                    <td><?php echo $customer->address; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Điện thoại</th>
                    <td><?php echo $customer->phone; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Tổng giá</th>
                    <td><?php echo number_format($order->price); ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Ngày đặt</th>
                    <td><?php echo $order->date; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Trạng thái</th>
                    <td>
                        <?php if($order->status == 0): ?>
                            <span class="label label-danger">Chưa giao hàng</span>
                        <?php else: ?>
                            <span class="label label-primary">Đã giao hàng</span>
                        <?php endif; ?>
                    </td>
                </tr>
            </table>
            <!-- /thong tin -->
            <table class="table table-bordered table-hover" style="color: black; border: 2px solid green;" >
                <tr style="font-weight: bold;border: 2px solid green;">
                    <th style="width: 100px;">Photo</th>
                    <th>Tên sản phẩm</th>
                    <th style="width: 70px;">Size</th>
                    <th style="width: 100px;">Số lượng</th>
                    <th style="width: 110px;">Giá</th>
                    
                </tr>
                <?php foreach($data as $rows): ?>
                    <?php 
                        //lay ban ghi product tuong ung voi product_id
                        $product = $this->modelGetProducts($rows->product_id);
                     ?>
                <tr>
                    <td style="text-align: center;"><img src="../assets/upload/products/<?php echo $product->photo; ?>" style="width:100px;"></td>
                    <td><?php echo $product->name; ?></td>
                    <td style="text-align: center;"><?php echo $rows->size; ?></td>
                    <td style="text-align: center;"><?php echo $rows->quantity; ?></td>
                    <td style="text-align: center;"><?php echo number_format($rows->giamoi); ?></td>
                    
                </tr>
                <?php endforeach; ?>
            </table>            
        </div>
    </div>
</div>
<?php endif; ?>
