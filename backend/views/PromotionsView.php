<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=promotions&action=create" class="btn btn-primary" style="border-color: green; background-color: green;">Add Banners</a>
    </div>
    <div class="panel panel-primary" style="border-color: green;">
        <div class="panel-heading" style="background-color: gray;">List Banner</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover" style="color: black;border: 2px solid gray;">
                <tr style="border: 3px solid green;">
                    <th style="width: 150px;">Photo</th>
                    
                    <th style="width:150px;"></th>
                </tr>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td style="text-align: left;">
                        <?php if($rows->photo != "" && file_exists("../assets/upload/promotions/".$rows->photo)): ?>
                            <img src="../assets/upload/promotions/<?php echo $rows->photo; ?>" style="width:350px;">
                        <?php endif; ?>
                    </td>
                   
                    <td style="text-align:right;">
                        <button style="border-color: green;"><a href="index.php?controller=promotions&action=update&id=<?php echo $rows->id; ?>">Edit</a></button> &nbsp; 
                        <button style="border-color: gray;"><a href="index.php?controller=promotions&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a></button>
                    </td>
                </tr>
            	<?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <div>
            	<ul class="pagination">
                    <li class="disabled"><a href="#" style="border-color: black; color: black;">Page</a></li>
                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                    <li><a href="index.php?controller=promotions&p=<?php echo $i; ?>" style="border-color: black;"><?php echo $i; ?></a></li>
                    <?php endfor; ?>
                </ul>
            </div>
        </div>
    </div>
</div>