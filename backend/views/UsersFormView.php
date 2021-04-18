<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">  
	<?php if(isset($_GET["notify"]) && $_GET["notify"] == "emailExists"): ?>
		<!-- <div class="alert alert-warning">Email đã tồn tại</div> -->
		<script type="text/javascript">alert('Email đã tồn tại!');</script>
	<?php endif; ?>
    <div class="panel panel-primary" style="border-color: green;">
        <div class="panel-heading" style="background-color: gray;">Add edit user</div>
        <div class="panel-body">
        <form method="post" action="<?php echo $action; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Name</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->name) ? $record->name:''; ?>" name="name" class="form-control" required style="border-color: green;">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:15px;">
                <div class="col-md-2">Email</div>
                <div class="col-md-10">
                    <input type="email" value="<?php echo isset($record->email) ? $record->email : ''; ?>" name="email" <?php if(isset($record->email)): ?> disabled <?php else: ?> required <?php endif; ?> class="form-control" style="border-color: green;">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:15px;">
                <div class="col-md-2">Password</div>
                <div class="col-md-10">
                    <input type="password" name="password" class="form-control"  style="border-color: green;" <?php if(isset($record->email)): ?> placeholder="Không đổi password thì không nhập thông tin vào ô textbox này" <?php else: ?> required <?php endif; ?>>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:20px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="submit" value="Process" class="btn btn-primary" style="border-color: green; background-color: green;">
                </div>
            </div>
            <!-- end rows -->
        </form>
        </div>
    </div>
</div>