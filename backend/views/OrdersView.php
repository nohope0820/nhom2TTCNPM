<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">    
    <div class="panel panel-primary" style="border-color: green;">
        <div class="panel-heading" style="background-color: gray;">List Orders</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover" style="color: black; border: 2px solid green; margin-top: 10px; ">
                <tr style="font-weight: bold;border: 2px solid green;">
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Price</th> 
                    <th style="width:150px;">Deliveried</th>                   
                    <th style="width:150px; text-align: center;">Status</th>
                    <th style="width:150px;">Delivery</th>
                </tr>
                <?php foreach($listRecord as $rows): ?>
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
                <li class="page-item">
                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                    <a href="index.php?controller=users&action=read&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                    <?php endfor; ?>
                </li>
            </ul>
        </div>
    </div>
</div>