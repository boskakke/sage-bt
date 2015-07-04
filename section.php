
<? require_once("../dummy/dummy.php") ?>


<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="UTF-8">
	<title>BT.dk</title>
	<?php include('includes/head.php'); ?>
</head>
<body class="<? dummy("text@bt-main-categories") ?>">

<?php include('includes/testmenu.php'); ?>

<?php include('includes/topbanner.php'); ?>

	<div class="container_24">
		
		<div class="grid_24">
			<?php include('includes/main-header.php'); ?>
		</div>
		
		
		
		<div class="grid_24">
			<div class="section-header ">
	        	<h1>Sundhed</h1>
	    	</div>

	    	<nav class="section-menu">
		        <ul class="deck-menu ">
					<li><a href="#">Politik</a></li>
					<li><a href="#">Krimi</a></li>
					<li><a href="#">Forbrug</a></li>
					<li><a href="#">Plus</a></li>
				</ul>
	    	</nav>
	    </div>

	    <div class="grid_16 section-overview">

        <div class="grid_8 alpha">
	        <article class="teaser  font-3 mb-40">
				<figure>
					<a href="article.php"><img class="lazy" data-original="<? dummy("image/!sport@300x,16:9") ?>" width="940" height="528" alt="" /></a>
				</figure>
				<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
				<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
			</article>
        </div>
        <div class="grid_8 omega">
            <article class="teaser  font-3 mb-40">
				<figure>
					<a href="article.php"><img class="lazy" data-original="<? dummy("image/!sport@300x,16:9") ?>" width="940" height="528" alt="" /></a>
				</figure>
				<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
				<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
			</article>
        </div>

        
        
        <ul class="list_5ish">
			<? while (dumb_luck("24")): ?>

			<li class="grid_5ish">
				<article class="teaser  font-4 ">
					<? if (dumb_luck("75%")): ?><figure><a href="article.php"><img data-original="<? dummy("image@193x,16:9") ?>" width="" height="" alt="" class="lazy" /></a></figure><? endif ?>
					<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
					<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
			    </article>
			</li>
			<? endwhile ?>
		</ul>

		<div class="grid_16 alpha omega loader-container clearfix">
			<div class="loader"></div>
			<span>Loading articles...</span>
		</div>


        
    </div>
    <div class="grid_8">
    	<div class="banner mb-20">
    		<? dummy("ad@300x250") ?>
    	</div>

    	<aside class="box box-theme-1">
			<h1 class="box-title">
				Det læser andre
			</h1>
			<ul class="list list-top">
				<? while (dumb_luck("5")): ?>
				<li class="teaser">
					<div class="list-body">
						<a href="article.php" class="header"><? dummy("text@headline") ?></a>
						<footer><? dummy("text@number") ?> læser lige nu</footer>
					</div>
				</li>
				<? endwhile ?>
			</ul>
		</aside>

    </div>



		


			

	</div>


<?php include('includes/main-footer.php'); ?>
<?php include('includes/footer.php'); ?>

</body>
</html>