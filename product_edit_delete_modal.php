
<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['product_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Inventory</h4></center>
            </div>
            <div class="modal-body">
            <div class="container-fluid">
            <form method="POST" action="product_edit.php" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="id" value="<?php echo $row['product_id']; ?>">
                <div class="row form-group">
                    <div class="col-sm-10">
                        <label class="control-label modal-label">Image:</label>
                    </div>
                        <div class="col-sm-10">
                        <input type="file" class="form-control" name="file" value="<?php echo $row['product_image']; ?>">
                    </div>
                    <div class="col-sm-10">
                        <label class="control-label modal-label">Inventory Name:</label>
                    </div>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="product_name" value="<?php echo $row['product_name']; ?>">
                    </div>
                    <div class="col-sm-10">
                        <label class="control-label modal-label">Serial No:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="product_barcode" value="<?php echo $row['product_barcode']; ?>">
                    </div>
                    <div class="col-sm-10">
                        <label class="control-label modal-label">Model:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="model_type" value="<?php echo $row['model_type']; ?>">
                    </div>
                    <div class="col-sm-10">
                        <label class="control-label modal-label">Brand Name:</label>
                    </div>
                    <div class="col-sm-10">
                        <select class="form-control show-tick" name="brand_name">
                        <?php
                         include "connection.php";   
                         $records = mysqli_query($db, "SELECT brand_name From brands"); 

                         while($data = mysqli_fetch_array($records))
                         {
                            echo "<option value='". $data['brand_name'] ."'>" .$data['brand_name'] ."</option>";  
                         } 
                         
                        ?>    
                        </select>
                    </div>
                    <div class="col-sm-10">
                        <label class="control-label modal-label">Category Name:</label>
                    </div>
                   <div class="col-sm-10">
                        <select class="form-control show-tick" name="categories_name" >
                        <?php
                         include "connection.php";  
                         $records = mysqli_query($db, "SELECT categories_name From categories"); 

                         while($data = mysqli_fetch_array($records))
                         {
                            echo "<option value='". $data['categories_name'] ."'>" .$data['categories_name'] ."</option>";  
                         } 

                        ?>    
                        </select>
                    </div>
                    <div class="col-sm-10">
                        <label class="control-label modal-label">Quantity:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="quantity" value="<?php echo $row['quantity']; ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-10">
                        <label class="control-label modal-label">Status:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="radio" name="product_status" 
                        <?php if (isset($product_status) && $product_status=="Available") echo "checked"; ?>
                        value="Available">&nbsp Available &nbsp &nbsp
                        <input type="radio" name="product_status" 
                        <?php if (isset($product_status) && $brand_status=="Not Available") echo "checked"; ?>
                        value="Not Available">&nbsp Not Available
                    </div>
                </div>
            </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
            </form>
            </div>

        </div>
    </div>
</div>
<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['product_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" product_id="myModalLabel">Delete Product</h4></center>
            </div>
            <div class="modal-body">    
                <p class="text-center">Are you sure you want to Delete</p>
                <h2 class="text-center"><?php echo $row['product_name']; ?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="product_delete.php?id=<?php echo $row['product_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>