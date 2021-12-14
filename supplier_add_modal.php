<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Supplier</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="supplier_add.php">
				<div class="row form-group">
					<div class="col-sm-10">
						<label class="control-label modal-label">Supplier Name:</label>
					</div>
						<div class="col-sm-10">
						<input type="text" class="form-control" name="supplier_name" required>
					</div>
					<div class="col-sm-10">
						<label class="control-label modal-label">Supplier Address:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="supplier_address" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-10">
						<label class="control-label modal-label">Contact Number:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="supplier_contact" required>
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