<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['asset_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Asset</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="editasset.php?id=<?php echo $row['asset_id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Image:</label>
					</div>
					<div class="col-sm-10">
                    <img src="<?php echo "upload/".$row['asset_image']; ?>" width="100px" alt="Image">
					</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Serial No:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="asset_barcode" value="<?php echo $row['asset_barcode']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="name" value="<?php echo $row['asset_name']; ?>">
					</div>
				</div>
					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Model:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="model" value="<?php echo $row['model_asset']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Brand:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="brand" value="<?php echo $row['brand_name']; ?>">
					</div>
				</div>
					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Category:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="category" value="<?php echo $row['categories_name']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Quantity:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="quantity" value="<?php echo $row['quantity']; ?>">
					</div>
				</div>
					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Status:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="assetstatus" value="<?php echo $row['asset_status']; ?>">
					</div>
				</div>
				</div>
	
		</div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="editasset" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
                
			</form>
            </div>

        </div>
    </div>
</div>


<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['asset_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Room</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['asset_name'] ; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete_asset.php?id=<?php echo $row['asset_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>