<html>
	<head>
		<title></title>
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
								<form action="name.php" method="POST">
								<td><input type="text" name="product_name[]" placeholder="Enter Inventory Name" class="form-control inventory_list" /></td>
								<td><input type="text" name="quantity[]" placeholder="Enter Quantity" class="form-control inventory_list" /></td>
								<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
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
	// 	i++;
	// 	$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="product_name[]" placeholder="Enter Inventory Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
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




