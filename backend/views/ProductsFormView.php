<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">  	
    <div class="panel panel-primary" style="border-color: green;">
        <div class="panel-heading" style="background-color: gray;">Add edit products</div>
        <div class="panel-body">
            <!-- muon upload duoc file thi phai co thuoc tinh enctype="multipart/form-data" -->
        <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:10px;">
                <div class="col-md-2" style="color: black;">Name</div>
                <div class="col-md-10">
                    <input type="text" style="border-color: green;" value="<?php echo isset($record->name) ? $record->name:''; ?>" name="name" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:15px;">
                <div class="col-md-2" style="color: black;">Giá</div>
                <div class="col-md-10">
                    <input type="number" style="border-color: green;" value="<?php echo isset($record->price) ? $record->price:''; ?>" min="0" step="0.01" name="price" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:15px;">
                <div class="col-md-2" style="color: black;">New_price</div>
                <div class="col-md-10">
                    <input type="number" style="border-color: green;" value="<?php echo isset($record->giamoi) ? $record->giamoi:''; ?>" name="giamoi" class="form-control" min="0" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:15px;">
                <div class="col-md-2" style="color: black;">% Khuyến mãi</div>
                <div class="col-md-10">
                    <input type="number" style="border-color: green;" value="<?php echo isset($record->discount) ? $record->discount:''; ?>" name="discount" class="form-control" min="0" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:15px;">
                <div class="col-md-2" style="color: black;">Danh mục</div>
                <div class="col-md-10">
                    <select name="category_id" class="form-control" style="width:200px;border-color: green;">   
                    <?php 
                        $categories = $this->modelListCategory();
                     ?>                     
                     <?php foreach($categories as $rows): ?>
                        <option <?php if(isset($record->category_id)&&$record->category_id==$rows->id): ?> selected <?php endif; ?> value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                        <?php 
                            $categoriesSub = $this->modelListCategorySub($rows->id);
                         ?>
                         <?php foreach($categoriesSub as $rowsSub): ?>
                            <option <?php if(isset($record->category_id)&&$record->category_id==$rowsSub->id): ?> selected <?php endif; ?> value="<?php echo $rowsSub->id; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rowsSub->name; ?></option>
                         <?php endforeach; ?>
                    <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:15px;">
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
            <div class="row" style="margin-top:10px;">
                <div class="col-md-2" style="color: black;">Size1</div>
                <div class="col-md-10" style="width: 100px;">
                    <input type="text" style="border-color: green;" value="<?php echo isset($record->size1) ? $record->size1:''; ?>" name="size1" class="form-control">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:10px;">
                <div class="col-md-2" style="color: black;">Size2</div>
                <div class="col-md-10" style="width: 100px;">
                    <input type="text" style="border-color: green;" value="<?php echo isset($record->size2) ? $record->size2:''; ?>" name="size2" class="form-control">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:10px;">
                <div class="col-md-2" style="color: black;">Size3</div>
                <div class="col-md-10" style="width: 100px;">
                    <input type="text" style="border-color: green;" value="<?php echo isset($record->size3) ? $record->size3:''; ?>" name="size3" class="form-control">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:10px;">
                <div class="col-md-2" style="color: black;">Size4</div>
                <div class="col-md-10" style="width: 100px;">
                    <input type="text" style="border-color: green;" value="<?php echo isset($record->size4) ? $record->size4:''; ?>" name="size4" class="form-control">
                </div>
            </div>
            <!-- end rows -->
             <!-- rows -->
            <div class="row" style="margin-top:10px;">
                <div class="col-md-2" style="color: black;">Size5</div>
                <div class="col-md-10" style="width: 100px;">
                    <input type="text" style="border-color: green;" value="<?php echo isset($record->size5) ? $record->size5:''; ?>" name="size5" class="form-control">
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
            <div class="row" style="margin-top:15px;">
                <div class="col-md-2" style="color: black;">Ảnh</div>
                <div class="col-md-10">
                    <input type="file" name="photo">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:15px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <?php if(isset($record->photo) && $record->photo != "" && file_exists("../assets/upload/products/".$record->photo)): ?>
                        <img src="../assets/upload/products/<?php echo $record->photo; ?>" style="width:100px;">
                    <?php endif; ?>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2" style="color: black;">Ảnh 1</div>
                <div class="col-md-10">
                    <input type="file" name="photo1">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <?php if(isset($record->photo1) && $record->photo1 != "" && file_exists("../assets/upload/products/".$record->photo1)): ?>
                        <img src="../assets/upload/products/<?php echo $record->photo1; ?>" style="width:100px;">
                    <?php endif; ?>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2" style="color: black;">Ảnh 2</div>
                <div class="col-md-10">
                    <input type="file" name="photo2">
                </div>
            </div>
            <!-- end rows -->  
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <?php if(isset($record->photo2) && $record->photo2 != "" && file_exists("../assets/upload/products/".$record->photo2)): ?>
                        <img src="../assets/upload/products/<?php echo $record->photo2; ?>" style="width:100px;">
                    <?php endif; ?>
                </div>
            </div>
            <!-- end rows -->  
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2" style="color: black;">Ảnh 3</div>
                <div class="col-md-10">
                    <input type="file" name="photo3">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <?php if(isset($record->photo3) && $record->photo3 != "" && file_exists("../assets/upload/products/".$record->photo3)): ?>
                        <img src="../assets/upload/products/<?php echo $record->photo3; ?>" style="width:100px;">
                    <?php endif; ?>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2" style="color: black;">Ảnh 4</div>
                <div class="col-md-10">
                    <input type="file" name="photo4">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <?php if(isset($record->photo4) && $record->photo4 != "" && file_exists("../assets/upload/products/".$record->photo4)): ?>
                        <img src="../assets/upload/products/<?php echo $record->photo4; ?>" style="width:100px;">
                    <?php endif; ?>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2" style="color: black;">Ảnh 5</div>
                <div class="col-md-10">
                    <input type="file" name="photo5">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <?php if(isset($record->photo5) && $record->photo5 != "" && file_exists("../assets/upload/products/".$record->photo5)): ?>
                        <img src="../assets/upload/products/<?php echo $record->photo5; ?>" style="width:100px;">
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