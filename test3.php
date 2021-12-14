<!DOCTYPE html>
    <html>
    <head>
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/css/bootstrap-select.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <script type="text/javascript">
            $(document).ready (function(){

                var html = '<tr><td><input class="form-control" type="text" name="product_name[]" required=""></td><td><input class="form-control" type="number" name="quantity[]" required=""></td><td><input class="btn btn-danger" type="button" name="remove" id="remove" value="Remove"></td></tr>';

                var x = 1;

                $("#add").click(function(){
                    $("#dynamic_field").append (html);
                });

                $("#dynamic_field").on ('click', '#remove', function(){
                    $(this). closest ('tr'). remove ();
                });
            
        });

        </script>
    </head>
    <body>
        <div class="container">
            <br />
            <br />
            <div class="card">
                <div class="card-header">LOAN EQUIPMENT</div>
                <div class="card-body">

            <h2 align="center"><a href="http://www.webslesson.info/2016/02/dynamically-add-remove-input-fields-in-php-with-jquery-ajax.html"></a></h2><br />
            <div class="form-group">
                <form name="add_name" id="add_name">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dynamic_field">
                            <tr>
                                <td><input type="text" name="product_name[]" placeholder="Enter Inventory Name" class="form-control inventory_list" /></td>
                                <td><input type="number" name="quantity[]" placeholder="Enter Quantity" class="form-control inventory_list" /></td>
                                <td><button type="button" name="add" id="add" class="btn btn-warning">Add More</button></td>
                            </tr>
                        </table>
                        <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

<script>
$(document).ready(function(){
    var i=1;

    // $('#add').click(function(){
    //     i++;
    //     $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="product_name[]" placeholder="Enter Inventory Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
    // });
    
    $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id"); 
        $('#row'+button_id+'').remove();
    });
    
    $('#submit').click(function(){      
        $.ajax({
            url:"name.php",
            method:"POST",
            data:$('#add_name').serialize(),
            success:function(data)
            {
                alert(data);
                $('#add_name')[0].reset();
            }
        });
    });
    
});
</script>


