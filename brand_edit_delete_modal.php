<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['brand_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Brand</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="brand_edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['brand_id']; ?>">
				<div class="row form-group">
                    <div class="col-sm-10">
                        <label class="control-label modal-label">Brand Code:</label>
                    </div>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="brand_code" value="<?php echo $row['brand_code']; ?>">
                    </div>
					<div class="col-sm-10">
						<label class="control-label modal-label">Brand Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="brand_name" value="<?php echo $row['brand_name']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-10">
						<label class="control-label modal-label">Brand Status:</label>
					</div>
					<div class="col-sm-10">
						<input type="radio" name="brand_status" 
                        <?php if (isset($brand_status) && $brand_status=="Available") echo "checked"; ?>
                        value="Available">&nbsp Available &nbsp &nbsp
                        <input type="radio" name="brand_status" 
                        <?php if (isset($brand_status) && $brand_status=="Not Available") echo "checked"; ?>
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
<div class="modal fade" id="delete_<?php echo $row['brand_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" brand_id="myModalLabel">Delete Brand</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['brand_name']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="brand_delete.php?id=<?php echo $row['brand_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>