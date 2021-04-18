<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">  	
    <div class="panel panel-primary" style="border-color: green;">
        <div class="panel-heading" style="background-color: gray;">Add edit category</div>
        <div class="panel-body">
        <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Name</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->name) ? $record->name:''; ?>" name="name" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
             <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Description</div>
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
                <div class="col-md-2">Danh mục cha</div>
                <div class="col-md-10">
                    <select name="parent_id" style="width: 200px;" class="form-control">
                        <option value="0"></option>
                        <?php
                            $categories = $this->modelListCategories($record->id!= null ? $record->id : 0);
                         ?>
                         <?php foreach($categories as $rows): ?>
                            <option <?php if(isset($record->parent_id) && $record->parent_id == $rows->id): ?> selected <?php endif; ?> value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                         <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <!-- end rows -->            
           
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Photo</div>
                <div class="col-md-10">
                    <input type="file" name="photo">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <?php if(isset($record->photo) && $record->photo != "" && file_exists("../assets/upload/categories/".$record->photo)): ?>
                        <img src="../assets/upload/categories/<?php echo $record->photo; ?>" style="width:100px;">
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