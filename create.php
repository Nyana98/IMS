

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                
                <div class="card">
                    <div class="card-header">
                     </div> 
                        <div class="card-body">
                        <?php
                            if(isset($_SESSION['status']) && $_SESSION != '')
                            {
                                ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>hi!</strong> <?PHP echo $_SESSION['status']; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>

                                </button>
                            </div>

                               <?php
                                unset($_SESSION['status']);
                            }
                            ?>
                        
                            <form action="code.php" name="create" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                <div class="col-md-6">
                                    <label for="">Image</label>
                                    <input type="file" name="asset_image" required class="form-control">
                                </div>
                                <div class="form-row">
                                <div class="col-md-6">
                                    <label for="">Serial No</label>
                                    <input type="text" name="asset_barcode" required class="form-control" placeholder="Enter serial no">
                                </div>
                                <div class="form-row">
                                <div class="col-md-6">
                                    <label for="">Asset Name</label>
                                    <input type="text" name="asset_name" required class="form-control" placeholder="Enter asset name">
                                </div>
                                <div class="form-group">
                                <div class="col-md-6">
                                    <label for="">Model </label>
                                    <input type="text" name="model_asset" required class="form-control" placeholder="Enter model">
                                </div>
                                <div class="form-group">
                                <div class="col-md-6">
                                    <label for="">Brand </label>
                                    <input type="text" name="brand_name" required class="form-control" placeholder="Enter brand">
                                </div>
                                <div class="form-group">
                                <div class="col-md-6">
                                    <label for="">Category </label>
                                    <input type="text" name="categories_name" required class="form-control" placeholder="Enter category">
                                </div>
                                <div class="form-group">
                                <div class="col-md-6">
                                    <label for="">Quantity</label>
                                    <input type="number" name="quantity" required class="form-control" placeholder="Enter quantity">
                                </div>
                                <div class="form-group">
                                <div class="col-md-6">
                                    <label for="">Status </label>
                                    <input type="text" name="asset_status" required class="form-control" placeholder="Enter ">
                                </div>
                                
                                
                                <div class="form-group">
                                <div class="col-md-6">
                                    <br>
                                        <br>
                                        <button type="submit" name="save_asset_image" class="btn btn-primary">SUBMIT - SAVE</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    
  </body>
</html>