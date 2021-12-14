
<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Product</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="product_add.php" enctype="multipart/form-data">
				<div class="row form-group">
					<div class="col-sm-10">
						<label class="control-label modal-label">Product Image:</label>
					</div>
					<div class="col-sm-10">
						<input type="file" class="form-control" name="file" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-10">
						<label class="control-label modal-label">Serial No:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="product_barcode" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-10">
						<label class="control-label modal-label">Product Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="product_name" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-10">
						<label class="control-label modal-label">Model:</label>	
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="model_type" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-10">
						<label class="control-label modal-label">Brand :</label>	
					</div>
					<div class="col-sm-10">
						<select class="form-control show-tick" name="brand_name" required>
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
				</div>

				<div class="row form-group">
					<div class="col-sm-10">
						<label class="control-label modal-label">Category Name:</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control show-tick" name="categories_name" required>
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
				</div>
				<div class="row form-group">
					<div class="col-sm-10">
						<label class="control-label modal-label">Quantity:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="quantity" required>
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
                        <?php if (isset($product_status) && $product_status=="Not Available") echo "checked"; ?>
                        value="Not Available">&nbsp Not Available
					</div>
                </div>
            </div> 
			</div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>

            </div>

        </div>
    </div>
</div>

