<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['supplier_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Supplier</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="supplier_edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['supplier_id']; ?>">
				<div class="row form-group">
                    <div class="col-sm-10">
                        <label class="control-label modal-label">Supplier Name:</label>
                    </div>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="supplier_name" value="<?php echo $row['supplier_name']; ?>">
                    </div>
					<div class="col-sm-10">
						<label class="control-label modal-label">Supplier Address:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="supplier_address" value="<?php echo $row['supplier_address']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-10">
						<label class="control-label modal-label">Contact Number:</label>
					</div>
					<div class="col-sm-10">
					   <input type="text" class="form-control" name="supplier_contact" value="<?php echo $row['supplier_contact']; ?>">	
                        
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
<div class="modal fade" id="delete_<?php echo $row['supplier_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" supplier_id="myModalLabel">Delete Supplier</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['supplier_name']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="supplier_delete.php?id=<?php echo $row['supplier_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>