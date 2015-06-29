
<? require_once("../dummy/dummy.php") ?>


<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="UTF-8">
	<title>BT.dk</title>
	<?php include('includes/head.php'); ?>
</head>
<body>
<?php include('includes/testmenu.php'); ?>

<?php include('includes/topbanner.php'); ?>

<div class="container_24">
	
		<div class="grid_24">
			<?php include('includes/main-header.php'); ?>
		</div>
	

<div class="grid_16 ">
	<article class="teaser cat-news font-2">
		<figure>
			<a href="article.php">
			<span class="teaser-tag-breaking">Breaking</span>
			<img src="<? dummy("image@620x,16:9") ?>" width="620" alt="" /></a>
		</figure>
		<a href="section.php" class="category">Krimi</a>
		<h1 class="header">
		
		<a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
		
	</article>
</div>	

<div class="grid_16 ">
	<article class="teaser cat-news font-2">
		<figure>
			<a href="article.php">
			<span class="teaser-tag-live"><i class="icon-dot-circled blink"></i> Opdateres...</span>
			<img src="<? dummy("image@620x,16:9") ?>" width="620" alt="" /></a>
		</figure>
		<a href="section.php" class="category">Krimi</a>
		<h1 class="header">
		
		<a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
		
	</article>
</div>	


<div class="grid_16 ">
	<article class="teaser cat-sport font-2">
		<figure>
			<span class="teaser-tag-live"><i class="icon-right-open left-right"></i> Live</span>
			<a href="article.php"><img src="<? dummy("image@620x,16:9") ?>" width="620" alt="" /></a>
		</figure>
		<a href="section.php" class="category">Superliga</a>
		<h1 class="header">
			<a href="article.php"><? dummy("text@headline-bt") ?></a>
		</h1>
		
	</article>
</div>	

<div class="grid_16 ">
	<article class="teaser cat-news font-2">
		<figure>
			<span class="teaser-tag-live"><i class="icon-right-open left-right"></i> Live</span>
			<a href="article.php"><img src="<? dummy("image@620x,16:9") ?>" width="620" alt="" /></a>
		</figure>
		<a href="section.php" class="category">Krimi</a>
		<h1 class="header">
		<a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
		
	</article>
</div>	




<br clear="all">
	

		<div class="grid_8">
			<article class="teaser  cat-news  font-4">
				<figure>
					<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
				</figure>
				<a href="section.php" class="category">Krimi</a>
				<h1 class="header"><a href="article.php">
				<span class="teaser-tag-breaking">Breaking</span>
				<? dummy("text@headline-bt") ?></a></h1>
				
			</article>
		</div>

		<div class="grid_8">
			<article class="teaser  cat-news  font-4">
				<figure>
					<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
				</figure>
				<a href="section.php" class="category">Krimi</a>
				<h1 class="header"><a href="article.php">
				<span class="teaser-tag-live">LIVE</span>
				<? dummy("text@headline-bt") ?></a></h1>
				
			</article>
		</div>

		<div class="grid_8">
			<article class="teaser  cat-news  font-4">
				<figure>
					<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
				</figure>
				<a href="section.php" class="category">Krimi</a>
				<h1 class="header"><a href="article.php">
				<span class="teaser-tag-comingup">Opdateres...</span>
				<? dummy("text@headline-bt") ?></a></h1>
				
			</article>
		</div>


		<div class="grid_8">
			<article class="teaser  cat-sport  font-4">
				<figure>
					<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
				</figure>
				<a href="section.php" class="category">Superliga</a>
				<h1 class="header"><a href="article.php">
				<span class="teaser-tag-live">LIVE</span>
				<? dummy("text@headline-bt") ?></a></h1>
				
			</article>
		</div>


	
<br clear="all">

<div class="grid_8">
	<article class="teaser  teaser-regular cat-news font-4">
		<figure>
			<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
		</figure>
		<a href="section.php" class="category">BT Tilbud</a>
		<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
		
	</article>	
</div>

	

		

</div>


<?php include('includes/main-footer.php'); ?>
<?php include('includes/footer.php'); ?>

</body>
</html>