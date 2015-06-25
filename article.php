
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
						<button class="btn btn-lg btn-news"><i class="icon-comments"></i> Kommentarer</button>
						<button class="btn btn-lg btn-transparent"><i class="icon-print"></i> Print</button>
						<button class="btn btn-lg btn-transparent"><i class="icon-mail"></i> Send</button>
					</div>

					<div class="signup-form">
						<form action="">
							<input type="email" class="">
							<button class="btn btn-news">OK</button>
						</form>
					</div>
				</header>

				<div class="banner bb-20"><? dummy("ad@940x180") ?></div>

				
				
				
				<figure class="article-image">
					<img data-original="<? dummy("image@940x,16:9") ?>" class="lazy" width="940" height="" alt="" />
					<figcaption class="image-caption"><? dummy("text@teaser") ?> <span class="caption-photo">Foto: <? dummy("text@author") ?></span></figcaption>
				</figure>
				
				

			</div>
		</div>

		<div class="row">

		<div class="grid_16">
			
			<figure class="article-image">
				<img data-original="<? dummy("image@620x,16:9") ?>" class="lazy" width="620" height="" alt="" />
				<figcaption class="image-caption"><? dummy("text@teaser") ?> <span class="caption-photo">Foto: <? dummy("text@author") ?></span></figcaption>
			</figure>

			<div class="grid_4 alpha">
				<div class="banner mb-20">
					<? dummy("ad@140x250") ?>
				</div>
				<div class="banner">
					<? dummy("ad@140x250") ?>
				</div>
			</div>
			<div class="grid_12 omega">
				<div class="article-byline-container mb-20">
					<? while (dumb_luck("1-2")): ?>
						<div class="article-byline">
							<span class="article-author" itemprop="author" itemscope="" itemtype="http://schema.org/Person"><a href="#" itemprop="name"><? dummy("text@author") ?></a></span>
							<a href="#">Følg</a>
						</div>
					<? endwhile ?>
				</div>
				
				<? while (dumb_luck("1-3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>
				<div class="article-embedded-link">
					<strong>Læs også:</strong> <a href="article.php"><? dummy("text@headline") ?></a>
				</div>
				<? while (dumb_luck("1-3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>
				<aside class="box-poll box-small">
					<h1 class="box-title">
						Afstemning
					</h1>
					<p><? dummy("text@short-teaser") ?></p>
					<form action="">
						
						<div class="form-item">
							<label><input type="radio" value="" name="vote"> <? dummy("text@item") ?></label>
							<label><input type="radio" value="" name="vote"> <? dummy("text@item") ?></label>
						</div>

					</form>

				</aside>
				<? while (dumb_luck("1-3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>
			</div>


		</div>

		<div class="grid_8">
			<aside class="article-fact mb-20">
				<h2>Hvad er Bipolar</h2>
				<? dummy("text@paragraph") ?>
			</aside>

			<div class="banner mb-20">
				<? dummy("ad@300x250") ?>	
			</div>

			<aside class="box box-theme-1">
				<h1 class="box-title">
					Populære lige nu
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
			<aside class="box box-theme-4 box-icon-video">
			
				<h1 class="box-title">Mest populære video</h1>
				<article class="teaser">
					<figure><a href="article.php"><img data-original="<? dummy("image@300x,16:9") ?>" class="lazy" width="" height="" alt="" /></a></figure>

					<h3 class="header">
					<a href="#">
						<? dummy("text@headline") ?>
						</a>
					</h3>

				</article>
				<div class="text-center module-padding">
					<a href="#"  class="load-more">Se alle</a>
				</div>
				
			</aside>
			
			
			
		</div>

			
		</div>
	</article>	
		
	<div class="grid_24">
		<h2>Tophistorier</h2>	
	</div>
	
	<? while (dumb_luck("2")): ?>
	
	<div class="grid_8">
		
		<? while (dumb_luck("5")): ?>

		<article class="teaser teaser-img-left-100 font-6 teaser-regular <? dummy("text@bt-main-categories") ?> no-cat">
			
			<div class="teaser-body">
			<figure><a href="article.php"><img data-original="<? dummy("image@135x,16:9") ?>" class="lazy" width="" height="" alt="" /></a></figure>
				<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
				<h3 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h3>	
			</div>
		</article>

		<? endwhile ?>
	</div>


	<? endwhile ?>

	<div class="grid_8">
		<aside class="box box-theme-3">
			<h1 class="box-title">
				Seneste nyt
			</h1>
			<ul class="list list-time list-border">
				<? while (dumb_luck("5")): ?>
				<li class="teaser">
					<div class="list-body">
						<time><? dummy("text@time") ?></time>
						<a href="article.php" class="header"><? dummy("text@headline") ?></a>
					</div>
				</li>
				<? endwhile ?>
			</ul>
			<div class="text-center module-padding">
				<a href="#" class="load-more">Hent flere</a>
			</div>
		</aside>
	</div>


	<div class="grid_24">
		<div class="banner mb-40">
			<? dummy("ad@940x180") ?>			
		</div>
	</div>

</div>


<?php include('includes/main-footer.php'); ?>
<?php include('includes/footer.php'); ?>

</body>
</html>