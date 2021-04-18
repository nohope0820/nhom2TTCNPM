<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">  	
    <div class="panel panel-primary" style="border-color: green;">
        <div class="panel-heading" style="background-color: gray;">Add edit promotions</div>
        <div class="panel-body">
            <!-- muon upload duoc file thi phai co thuoc tinh enctype="multipart/form-data" -->
        <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
           
            <!-- rows -->
            <div class="row" style="margin-top:15px;">
                <div class="col-md-2" style="color: black;">Ảnh 1</div>
                <div class="col-md-10">
                    <input type="file" name="photo">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:15px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <?php if(isset($record->photo) && $record->photo != "" && file_exists("../assets/upload/promotions/".$record->photo)): ?>
                        <img src="../assets/upload/promotions/<?php echo $record->photo; ?>" style="width:100px;">
                    <?php endif; ?>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2" style="color: black;">Ảnh 2</div>
                <div class="col-md-10">
                    <input type="file" name="photo1">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <?php if(isset($record->photo1) && $record->photo1 != "" && file_exists("../assets/upload/promotions/".$record->photo1)): ?>
                        <img src="../assets/upload/promotions/<?php echo $record->photo1; ?>" style="width:100px;">
                    <?php endif; ?>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2" style="color: black;">Ảnh 3</div>
                <div class="col-md-10">
                    <input type="file" name="photo2">
                </div>
            </div>
            <!-- end rows -->  
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <?php if(isset($record->photo2) && $record->photo2 != "" && file_exists("../assets/upload/promotions/".$record->photo2)): ?>
                        <img src="../assets/upload/promotions/<?php echo $record->photo2; ?>" style="width:100px;">
                    <?php endif; ?>
                </div>
            </div>
            <!-- end rows -->  
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2" style="color: black;">Ảnh 4</div>
                <div class="col-md-10">
                    <input type="file" name="photo3">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <?php if(isset($record->photo3) && $record->photo3 != "" && file_exists("../assets/upload/promotions/".$record->photo3)): ?>
                        <img src="../assets/upload/promotions/<?php echo $record->photo3; ?>" style="width:100px;">
                    <?php endif; ?>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2" style="color: black;">Ảnh 5</div>
                <div class="col-md-10">
                    <input type="file" name="photo4">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <?php if(isset($record->photo4) && $record->photo4 != "" && file_exists("../assets/upload/promotions/".$record->photo4)): ?>
                        <img src="../assets/upload/promotions/<?php echo $record->photo4; ?>" style="width:100px;">
                    <?php endif; ?>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2" style="color: black;">Ảnh 6</div>
                <div class="col-md-10">
                    <input type="file" name="photo5">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <?php if(isset($record->photo5) && $record->photo5 != "" && file_exists("../assets/upload/promotions/".$record->photo5)): ?>
                        <img src="../assets/upload/promotions/<?php echo $record->photo5; ?>" style="width:100px;">
                    <?php endif; ?>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
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