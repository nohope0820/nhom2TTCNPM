<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">  	
    <div class="panel panel-primary" style="border-color: green;">
        <div class="panel-heading" style="background-color: gray;">Add edit news</div>
        <div class="panel-body">
            <!-- muon upload duoc file thi phai co thuoc tinh enctype="multipart/form-data" -->
        <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2" style="color: black;">Name</div>
                <div class="col-md-10">
                    <input type="text" style="border-color: green;" value="<?php echo isset($record->name) ? $record->name:''; ?>" name="name" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2" style="color: black;">Description</div>
                <div class="col-md-10">
                    <textarea name="description"><?php echo isset($record->description) ? $record->description:''; ?></textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace("description");
                    </script>
                </div>
            </div>
            <!-- end rows -->  
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2" style="color: black;">Content</div>
                <div class="col-md-10">
                    <textarea name="content"><?php echo isset($record->content) ? $record->content:''; ?></textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace("content");
                    </script>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="checkbox" <?php if(isset($record->hot) && $record->hot == 1): ?> checked <?php endif; ?> name="hot" id="hot"> <label for="hot" style="color: black;">Hot</label>
                </div>
            </div>
            <!-- end rows -->    
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2" style="color: black;">Ảnh</div>
                <div class="col-md-10">
                    <input type="file" name="photo">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <?php if(isset($record->photo) && $record->photo != "" && file_exists("../assets/upload/news/".$record->photo)): ?>
                        <img src="../assets/upload/news/<?php echo $record->photo; ?>" style="width:100px;">
                    <?php endif; ?>
                </div>
            </div>
            <!-- end rows -->      
            <!-- rows -->
            <div class="row" style="margin-top:15px;">
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