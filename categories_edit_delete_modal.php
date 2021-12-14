<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['categories_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Categories</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="categories_edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['categories_id']; ?>">
				<div class="row form-group">
                    <div class="col-sm-10">
                        <label class="control-label modal-label">Categories Code:</label>
                    </div>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="categories_code" value="<?php echo $row['categories_code']; ?>">
                    </div>
					<div class="col-sm-10">
						<label class="control-label modal-label">Categories Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="categories_name" value="<?php echo $row['categories_name']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-10">
						<label class="control-label modal-label">Categories Status:</label>
					</div>
					<div class="col-sm-10">
						<input type="radio" name="categories_status" 
                        <?php if (isset($categories_status) && $categories_status=="Available") echo "checked"; ?>
                        value="Available">&nbsp Available &nbsp &nbsp
                        <input type="radio" name="categories_status" 
                        <?php if (isset($categories_status) && $categories_status=="Not Available") echo "checked"; ?>
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
<div class="modal fade" id="delete_<?php echo $row['categories_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" categories_id="myModalLabel">Delete Categories</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['categories_name']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="categories_delete.php?id=<?php echo $row['categories_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>