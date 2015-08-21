
<? require_once("../dummy/dummy.php") ?>

<?php $image_size = rand(0,1);
	
?>

<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="UTF-8">
	<title>Header - BT.dk</title>
	<?php include('includes/head.php'); ?>
</head>
<body>
<?php include('includes/testmenu.php'); ?>

<?php include('includes/sticky-menu.php'); ?>

<?php include('includes/topbanner.php'); ?>

<div class="container_24">
		<div class="grid_24">
			<h3 class="demo">Default</h3>
		</div>
		<div class="grid_24">
			<?php include('includes/main-header.php'); ?>
		</div>

		<div class="grid_24">
			<h3 class="demo">Logged in</h3>

		</div>
		<div class="grid_24">
			<?php include('includes/main-header.php'); ?>
		</div>
	


</div>



<?php include('includes/footer.php'); ?>



</body>
</html>