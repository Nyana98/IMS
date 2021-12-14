<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Category</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="categories_add.php">
				<div class="row form-group">
					<div class="col-sm-10">
						<label class="control-label modal-label">Category Code:</label>
					</div>
						<div class="col-sm-10">
						<input type="text" class="form-control" name="categories_code" required>
					</div>
					<div class="col-sm-10">
						<label class="control-label modal-label">Categories Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="categories_name" required>
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
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>