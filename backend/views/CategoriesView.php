<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=categories&action=create" class="btn btn-primary"
         style="border-color: green; background-color: green;">Add user</a>
    </div>
    <div class="panel panel-primary" style="border-color: green;">
        <div class="panel-heading" style="background-color: gray;">List Categories</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover" style="color: black; border: 2px solid green; margin-top: 10px; ">
                <tr style="border: 2px solid green;">
                     <th style="width: 120px;">Photo</th>
                    <th>Name</th>
                    <th style="width:450px;">description</th>
                    <th style="width:180px;"></th>
                </tr>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td style="text-align: center;">
                        <?php if($rows->photo != "" && file_exists("../assets/upload/categories/".$rows->photo)): ?>
                            <img src="../assets/upload/categories/<?php echo $rows->photo; ?>" style="width:100px;">
                        <?php endif; ?>
                    </td>
                    <td style="color: red; font-weight: bold;"><?php echo $rows->name; ?></td>
                    <td><?php echo $rows->description; ?></td>
                    <td style="text-align:center; ">
                        <button style="border-color: green;"><a href="index.php?controller=categories&action=update&id=<?php echo $rows->id; ?>">Edit</a></button> &nbsp; 
                        <button style="border-color: gray;"><a href="index.php?controller=categories&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a></button>
                    </td>
                </tr>
                    <?php 
                        //lay cac danh muc con thuoc danh muc nay
                        $dataSub = $this->modelReadSubCategories($rows->id);
                     ?>
                     <?php foreach($dataSub as $rowsSub): ?>
                        <tr>
                            <td style="padding-left: 60px;"><?php echo $rowsSub->name; ?></td>
                            <td style="text-align:center;">
                                <button style="border-color: green;"><a href="index.php?controller=categories&action=update&id=<?php echo $rowsSub->id; ?>">Edit</a></button> &nbsp; 
                        <button style="border-color: gray;"><a href="index.php?controller=categories&action=delete&id=<?php echo $rowsSub->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a></button>
                            </td>
                        </tr>
                     <?php endforeach; ?>
            	<?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <div>
            	<ul class="pagination">
                    <li class="disabled"><a href="#" style="border-color: black; color: black;">Page</a></li>
                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                    <li><a href="index.php?controller=users&p=<?php echo $i; ?>" style="border-color: black;"><?php echo $i; ?></a></li>
                    <?php endfor; ?>
                </ul>
            </div>
        </div>
    </div>
</div>