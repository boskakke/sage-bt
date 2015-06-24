
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
	<div class="row">
		<div class="grid_24">
			<?php include('includes/main-header.php'); ?>
		</div>
	</div>

	<article class="<? dummy("text@bt-main-categories") ?>">
		<div class="row">
			<div class="grid_24">
				
				<header class="article-header">
					<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
					<h1 itemprop="headline"><? dummy("text@headline") ?></h1>
					
					<div class="article-date">
						<time>Onsdag d. <? dummy("text@date") ?> kl. <? dummy("text@time") ?></time>
					</div>

					<div class="social-container">
						<button class="btn btn-lg btn-facebook"><i class="icon-facebook"></i> Del</button>
						<button class="btn btn-lg btn-twitter"><i class="icon-twitter"></i> Tweet</button>
						<button class="btn btn-lg btn-transparent"><i class="icon-print"></i> Print</button>
						<button class="btn btn-lg btn-transparent"><i class="icon-mail"></i> Send</button>
						<button class="btn btn-lg btn-news"><i class="icon-comments"></i> Kommentarer</button>
					</div>
				</header>

				
				
				
				<figure class="article-image">
					<img data-original="<? dummy("image@940x,16:9") ?>" class="lazy" width="940" height="" alt="" />
				</figure>
				
				

			</div>
		</div>

		<div class="row">
			<div class="grid_16">
				<div class="article-byline-container mb-20">
					<? while (dumb_luck("1-2")): ?>
						<div class="article-byline">
							<span class="article-author" itemprop="author" itemscope="" itemtype="http://schema.org/Person"><a href="#" itemprop="name"><? dummy("text@author") ?></a></span>
							<a href="#">Følg</a>
						</div>
					<? endwhile ?>

					
				</div>
				<? while (dumb_luck("3-5")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>
			</div>
		</div>
	</article>	
	


		

</div>


<?php include('includes/main-footer.php'); ?>
<?php include('includes/footer.php'); ?>

</body>
</html>