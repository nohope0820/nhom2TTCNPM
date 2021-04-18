<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=users&action=create" class="btn btn-primary" style="border-color: green; background-color: green;">Add user</a>
    </div>
    <div class="panel panel-primary" style="border-color: green;">
        <div class="panel-heading" style="background-color: gray;">List User</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover" style="color: black; border: 2px solid green; margin-top: 10px; " >
                <tr style="font-weight: bold;border: 2px solid green;">
                    <th style="width: 370px; height: 50px;">Fullname</th>
                    <th>Email</th>
                    <th style="width:150px;">Chỉnh sửa</th>
                </tr>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td style="height: 55px;"><?php echo $rows->name; ?></td>
                    <td><?php echo $rows->email; ?></td>

                    <td style="text-align:center;">
                        <button style="border-color: green;"><a href="index.php?controller=users&action=update&id=<?php echo $rows->id; ?>">Edit</a></button> &nbsp; 
                        <button style="border-color: gray;"><a href="index.php?controller=users&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a></button>
                    </td>
                </tr>
            	<?php endforeach; ?>
            </table>
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