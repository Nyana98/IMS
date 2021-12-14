<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
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