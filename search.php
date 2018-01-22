<?php 










 ?>


<!DOCTYPE html>
<html>
<head>
	<title>
		
Search Here
	</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		
		<script   src="http://code.jquery.com/jquery-3.3.1.min.js"
				  crossorigin="anonymous"></script>
		

		<script type="text/javascript">
			
			$(document).ready(function(){


				$("#search").keyup(function(){
					var search=$('#search').val();

					$.ajax({
						type:'POST',
						url : 'fetch.php',
						data:{search :search},
						success:function(data){
							$('#result').html(data);
						}

					});


				});


			});


		</script>

</head>
<body>
<div class="container">
	
<form>
	<div class="col-xs-5">
		
			<br>
	<br>
	<br>
	<h2>Search Here</h2>
	<input type="text" name="search" id="search" class="form-control">
	<br>
	<br>
	<br>
	<div id="result">result here</div>
	</div>


</form>

</div>
</body>
</html>