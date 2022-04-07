<?php 
	include 'inc/config.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
  <title>Tree house Newsletter</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
 <body>
 


 	<div class="container">
 		<table class="table table-hover">
 			<caption>All submission</caption>
    <tr>
      <th>Name</th>
      <th>Email</th>
    </tr>
    <?php 
    	// Select data from table newsletter
    	$sql = $db->query("SELECT * FROM newsletter ORDER BY id DESC");
    	while ($row = mysqli_fetch_assoc($sql)): // Store variables in variable row
     ?>
     <tr>
     	<!-- Display table data -->
     	<td><?php echo $row['name']; ?></td>
     	<td><?php echo $row['email']; ?></td>
     </tr>
 <?php endwhile; ?>
  </table>

 	</div>


  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

 </body>
 </html>