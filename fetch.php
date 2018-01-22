<?php 

//id,name,email.city,gender
require_once 'db.php';
$search=$_POST['search'];

if ($search=='') {
	echo 'No data found';
}else{
// $search=$_POST['search'];
$query="SELECT * FROM simple WHERE name Like '%$search%'  
		OR email LIKE '%$search% ' 
		OR city  LIKE '%$search%'
		OR gender LIKE '%$search%'  ";



	$params = array();
	$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
	$result=sqlsrv_query( $connection, $query, $params, $options );
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
		<script type="text/javascript src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>

<table class="table table-bordered">
	<tr>
		<th>Id </th>
		<th>Name</th>
		<th>email</th>
		<th>city</th>
		<th>Gender</th>
	</tr>

	<?php 

	while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
      	
				echo '<tr>';
				echo '<td>'.$row['id']. '</td>';
				echo '<td>'.$row['name']. '</td>';
				echo '<td>'.$row['email']. '</td>';
				echo '<td>'.$row['city']. '</td>';
				echo '<td>'.$row['gender']. '</td>';
				echo '</tr>';

		}


}


	 ?>


</table>



</body>
</html>
