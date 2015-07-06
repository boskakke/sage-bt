
<? require_once("../dummy/dummy.php") ?>


<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="UTF-8">
	<title>Teaser types - BT.dk</title>
	<?php include('includes/head.php'); ?>
</head>
<body>
<?php include('includes/testmenu.php'); ?>









<div class="container_24">

<div class="grid_24">
	<h1 class="demo">
	Buttons
</h1>
</div>


<div class="grid_6">
	
</div>

<div class="grid_24">
<h3 class="demo">Button styles



</h3>
	<button class="btn btn-transparent">.btn-transparent</button>
	<button class="btn btn-news">.btn-news</button>
	<button class="btn btn-breaking">.btn-breaking</button>
	<button class="btn btn-facebook"><i class="icon-facebook"></i> .btn-facebook</button>
	<button class="btn btn-twitter"><i class="icon-twitter"></i> .btn-twitter</button>

</div>

<div class="grid_24">
<h3 class="demo">Button sizes</h3>
	<button class="btn btn-news btn-sm">.btn-sm</button>
	<button class="btn btn-breaking ">Button default</button>
	<button class="btn btn-black btn-lg">.btn-lg</button>

<h3 class="demo">.btn-block</h3>
	<button class="btn btn-news btn-block btn-sm">Button block + small</button>
	<button class="btn btn-breaking btn-block">Button block</button>
	<button class="btn btn-black btn-block btn-lg">Button block + large</button>
	

</div>

<div class="grid_24">
<h3 class="demo">Link with .btn class</h3>
	<a href="#" class="btn btn-news">Im a link with .btn class</a>
	<a href="#" id="hi" class="btn btn-black">My name is Yulia</a>
	<br><br><br><br>
</div>


		

</div>


<?php include('includes/main-footer.php'); ?>
<?php include('includes/footer.php'); ?>

<script>
	$('#hi').on('click', function(e){
		e.preventDefault();
		alert('Hi Yulia!');
	});
</script>
</body>
</html>