
<?php 

session_start();
if($_SESSION['login']!=true){
  header("Location:login.php");
}


include('layout/header.php') ?>


  <!-- Left side column. contains the logo and sidebar -->
  <?php include('layout/sideber.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        View category
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <?php $db = new mysqli('localhost','root','','project'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>manufacturer Entry</title>
	<style>
		table{

			border-collapse: collapse;

			width: 100%;
			/* width: 400px; */
			/* height: 150px; */

	}
	</style>
</head>
<body>

	<?php 	

	$sql = "SELECT * FROM category";

	$data = $db->query($sql);


	 ?>

	 <table border="1">
	 	<tr>
	 		<th>ID</th>
	 		<th>Product</th>
	 		<th>Price</th>
	 		<th>quantity</th>
	 	</tr>
	 	<?php while ($row = $data->fetch_assoc()) {  ?>
	 		<tr>
	 			<td> <?php echo $row['id']; ?> </td>
	 			<td> <?php echo $row['product']; ?> </td>
	 			<td> <?php echo $row['price']; ?> </td>
	 			<td> <?php echo $row['quantity']; ?> </td>
	 		</tr>
	 <?php	} ?>

	 </table>


	
</body>
</html>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php include('layout/footer.php'); ?>