
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
		
		
		<?php include('includes/topdeck-2.php'); ?>
	

		
			<section class="deck clearfix">
					
				<div class="grid_16">
					<?php include('includes/teasers.php'); ?>
				</div>

				<div class="grid_8">
					<aside class="box box-theme-2">
						<h1 class="box-title">
							Hitter på Facebook
						</h1>
						<ul class="list list-top">
							<? while (dumb_luck("5")): ?>
							<li class="teaser">
								<div class="list-body">
									<a href="article.php" class="header"><? dummy("text@headline") ?></a>
									<footer><i class="icon-thumbs-up"></i> <? dummy("text@number") ?></footer>
								</div>
							</li>
							<? endwhile ?>
						</ul>
						<button href="#" class="btn btn-facebook btn-lg btn-block">Like os på Facebook <i class="icon-thumbs-up"></i></button>
					</aside>

					<div class="banner mb-20">
						<? dummy("ad@300x250") ?>
					</div>

					<article class="demo-teaser teaser">
						<span>
							NyhedsQuiz
						</span>
					</article>
					
				</div>
			</section><!-- deck -->	

		
		

		<div class="row">
			<section class="deck clearfix deck-sport no-cat">
				<div class="grid_24">
					<h1 class="deck-header deck-header-alt">
						<a href="section.php"><span class="slash">/</span><strong>SPORT</strong> <span class="small">Danmarks Sportsavis</span></a>
					</h1>
				</div>
				<div class="row">
					<div class="grid_24">
						<ul class="deck-menu">
							<? while (dumb_luck("7")): ?>
								<li><a href="section.php"><? dummy("text@cat-sport") ?></a></li>
							<? endwhile ?>
							<li class="menu-more"><a href="section.php">Mere sport <i class="icon-angle-down"></i></a>
								<ul>
									<? while (dumb_luck("8")): ?><li><a href="section.php"><? dummy("text@cat-sport") ?></a></li><? endwhile ?>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="grid_24">
						<article class="teaser cat-consumer font-1 mb-40">
							<figure>
								<a href="article.php"><img class="lazy" data-original="<? dummy("image/!sport@940x,16:9") ?>" width="940" height="528" alt="" /></a>
							</figure>
							<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
							<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						</article>
					</div>
				</div>

				<? while (dumb_luck("3")): ?>
				<div class="grid_8">
					<article class="teaser teaser-regular cat-consumer font-3">
						<figure>
							<a href="article.php"><img class="lazy" data-original="<? dummy("image/!sport@300x,16:9") ?>" width="300" height="168" alt="" /></a>
						</figure>
						<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
						<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						
					</article>
				</div>
				<? endwhile ?>
				
				<div class="grid_24">
					<div class="text-center module-padding-bottom">
						<a href="#" class="load-more">Mere sport <i class="icon-open-circle"></i></a>
					</div>
				</div>

			</section><!-- deck -->
		</div>

		
		<div class="row">
			<section class="deck clearfix">
					
				<div class="grid_16">
					<?php include('includes/teasers.php'); ?>
				</div>

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

					<div class="banner mb-20">
						<? dummy("ad@300x250") ?>
					</div>

					
					
				</div>
			</section><!-- deck -->	

		</div>


		<div class="row">
			<section class="deck clearfix deck-plus ">
				<div class="grid_24">
					<h1 class="deck-header deck-header-alt">
						<a href="section.php"><span class="slash">/</span><strong>PLUS</strong></a> <span class="small">Prøv 30 dage gratis - <a href="#">Prøv PLUS</a></span></a>
					</h1>
				</div>
				<div class="row">
					<div class="grid_24">
						<ul class="deck-menu">
							<? while (dumb_luck("6")): ?>
								<li><a href="section.php"><? dummy("text@item") ?></a></li>
							<? endwhile ?>
							<li class="menu-more"><a href="section.php">Mere plus <i class="icon-angle-down"></i></a>
								<ul>
									<? while (dumb_luck("8")): ?><li><a href="section.php"><? dummy("text@item") ?></a></li><? endwhile ?>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="grid_12">
						<article class="teaser cat-plus font-2 mb-40">
							<figure>
								<a href="article.php"><img class="lazy" data-original="<? dummy("image/!plus@620x,16:9") ?>" width="940" height="528" alt="" /></a>
							</figure>
							<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
							<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						</article>
					</div>

					<div class="grid_12">
						<article class="teaser cat-plus font-2 mb-40">
							<figure>
								<a href="article.php"><img class="lazy" data-original="<? dummy("image/!plus@620x,16:9") ?>" width="940" height="528" alt="" /></a>
							</figure>
							<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
							<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						</article>
					</div>

				</div>

				<? while (dumb_luck("3")): ?>
				<div class="grid_8">
					<article class="teaser teaser-regular cat-plus font-3">
						<figure>
							<a href="article.php"><img class="lazy" data-original="<? dummy("image/!plus@300x,16:9") ?>" width="300" height="168" alt="" /></a>
						</figure>
						<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
						<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						
					</article>
				</div>
				<? endwhile ?>
				
				<div class="grid_24">
					<div class="text-center module-padding-bottom">
						<a href="#" class="load-more">Mere PLUS <i class="icon-open-circle"></i></a>
					</div>
				</div>

			</section><!-- deck -->
		</div>

		<div class="row">
			<section class="deck clearfix">
					
				<div class="grid_16">
					<?php include('includes/teasers.php'); ?>
				</div>

				<div class="grid_8">

					<div class="banner mb-20">
						<? dummy("ad@300x250") ?>
					</div>
					
				</div>
			</section><!-- deck -->	

		</div>

	
	 	

		<div class="row">
			<div class="grid_24">
				<div class="banner mb-40 mt-40">
					<? dummy("ad@940x180") ?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="grid_24 ">
			
			

				<h1 class="deck-header">

					<a href="http://www.bite.dk" class="boubles-tricker">
					<span class="bite-bouble-1"></span>
					<span class="bite-bouble-2"></span>
					<span class="bite-bouble-3"></span>

					<span class="no-bouble">www.<strong>BiTE</strong>.dk</span>
					
					</a>

					<span class="deck-header-right">
						Følg BiTE <a href="#"><i class="icon-facebook"></i></a> <a href="#"><i class="icon-twitter"></i></a> <a href="#"><i class="icon-instagramm"></i></a>
					</span>
				</h1>

			</div>
		</div>
		


		<section class="deck deck-bite no-cat ">
		
			<div class="grid_8">
				<article class="teaser teaser-bite-1 font-5" >
					<figure>
						<a href="article.php"><img class="lazy" data-original="<? dummy("image/@300x,16:9") ?>" width="300" height="168" alt="" /></a>
					</figure>
					<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
					<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				</article>
			</div>
			<div class="grid_8">
				<article class="teaser teaser-bite-2 font-5" >
					<figure>
						<a href="article.php"><img class="lazy" data-original="<? dummy("image/@300x,16:9") ?>" width="300" height="168" alt="" /></a>
					</figure>
					<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
					<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				</article>
			</div>
			<div class="grid_8">
				<article class="teaser teaser-bite-3 font-5" >
					<figure>
						<a href="article.php"><img class="lazy" data-original="<? dummy("image/@300x,16:9") ?>" width="300" height="168" alt="" /></a>
					</figure>
					<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
					<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				</article>
			</div>
		</section>

		


		



		<section class="deck clearfix">
		
			<div class="grid_16">
				
				<?php include('includes/teasers.php'); ?>
				
			</div>

			<div class="grid_8">


				<div class="banner mb-20">
					<? dummy("ad@300x250") ?>
				</div>
				
			</div>
		
		</section><!-- deck -->

		
		<section class="deck clearfix deck-health no-cat">
				<div class="grid_24">
					<h1 class="deck-header deck-header-small">
						<strong>I FORM:</strong> Marathon-klar på fire uger
					</h1>
				</div>


				<div class="row">
					<div class="grid_24">
						<ul class="deck-menu">
							<? while (dumb_luck("6")): ?>
								<li><a href="section.php"><? dummy("text@item") ?></a></li>
							<? endwhile ?>
							<li class="menu-more"><a href="section.php">Mere sport <i class="icon-angle-down"></i></a>
								<ul>
									<? while (dumb_luck("8")): ?><li><a href="section.php"><? dummy("text@item") ?></a></li><? endwhile ?>
								</ul>
							</li>
						</ul>
					</div>
				</div>

				<? while (dumb_luck("3")): ?>
				<div class="grid_8">
					<article class="teaser teaser-regular cat-health font-3">
						<figure>
							<a href="article.php"><img class="lazy" data-original="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
						</figure>
						<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
						<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						
					</article>
				</div>
				<? endwhile ?>
			
			</section><!-- deck -->


			<section class="deck clearfix">
			
				<div class="grid_16">
					
					<?php include('includes/teasers.php'); ?>
					
				</div>

				<div class="grid_8">
					<aside class="box box-theme-1">
						<h1 class="box-title">
							Mest læste
						</h1>
						<ul class="list list-border list-top">
							<? while (dumb_luck("7")): ?>
							<li class="teaser">
								<div class="list-body">
									
									<a href="article.php" class="header"><? dummy("text@headline-bt") ?></a>
								</div>
							</li>
							<? endwhile ?>
						</ul>
						
						
					</aside>
				</div>
			
			</section><!-- deck -->

	
			<section class="deck clearfix deck-news ">
				<div class="grid_24">
					<h1 class="deck-header module-padding-bottom"><a href="#"><strong>BLOGS</strong></a></h1>
				</div>
				<div class="grid_24">
					<ul class="list-blogs">
						<? while (dumb_luck("6")): ?>
							<li class="teaser teaser-blogs">
								<figure><a href="#"><img class="lazy" data-original="<? dummy("image/!author-bw@58x,1:1") ?>" width="" height="" alt="" /></a></figure>
								<div class="teaser-body">
									<footer class="teaser-byline">
										<? dummy("text@author") ?>
									</footer>
									<a href="article.php" class="header">
										<? dummy("text@headline") ?>
									</a>
								</div>
							</li>
						<? endwhile ?>
					</ul>		
				</div>
			
				<div class="grid_24">
					<div class="text-center module-padding-bottom">
						<a href="#" class="load-more">Hent flere</a>
					</div>
				</div>

			</section>


			<section class="deck clearfix">
			
				<div class="grid_16">
					
					<?php include('includes/teasers.php'); ?>
					
				</div>

				<div class="grid_8">
					<div class="banner">
						<? dummy("ad@300x250") ?>
					</div>
				</div>
			
			</section><!-- deck -->

			

			<div class="banner mb-40 mt-40">
				<? dummy("ad@940x180") ?>
			</div>
			
			<section class="deck clearfix deck-health deck-alt">
				<div class="grid_24">
					<h1 class="deck-header ">
						<a href="section.php"><span class="slash">/</span><strong>LIVSSTIL</strong></a>
						<span class="deck-header-right"><a href="#"><img src="/dist/images/egmont.png"></a></span>
					</h1>
				</div>
				<? while (dumb_luck("3")): ?>
				<div class="grid_8">
					<article class="teaser teaser-regular cat-news font-3">
						<figure>
							<a href="article.php"><img class="lazy" data-original="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
						</figure>
						<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
						<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						
					</article>
				</div>
				<? endwhile ?>

				<div class="grid_24">
					<div class="text-center module-padding-bottom">
						<a href="#" class="load-more">Hent flere</a>
					</div>
				</div>
			
			</section><!-- deck -->

			
			<div class="row">
				<section class="deck clearfix">
						
					<div class="grid_16">
						<?php include('includes/teasers.php'); ?>
					</div>

					<div class="grid_8">
						<aside class="box box-theme-3">
						<h1 class="box-title">
							Liste
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

						<div class="banner mb-20">
							<? dummy("ad@300x250") ?>
						</div>

						
						
					</div>
				</section><!-- deck -->	

			</div>



			<section class="deck clearfix deck-consumer no-cat">
				<div class="grid_24">
					<h1 class="deck-header deck-header-alt">
						<a href="section.php"><span class="slash">/</span><strong>DIGITAL</strong> </a>
					</h1>
				</div>
				<div class="row">
					<div class="grid_24">
						<ul class="deck-menu">
							<? while (dumb_luck("6")): ?>
								<li><a href="section.php"><? dummy("text@item") ?></a></li>
							<? endwhile ?>
							<li class="menu-more"><a href="section.php">Flere <i class="icon-angle-down"></i></a>
								<ul>
									<? while (dumb_luck("8")): ?><li><a href="section.php"><? dummy("text@item") ?></a></li><? endwhile ?>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="grid_24">
						<article class="teaser cat-consumer font-1 mb-40">
							<figure>
								<a href="article.php"><img class="lazy" data-original="<? dummy("image@940x,16:9") ?>" width="940" height="528" alt="" /></a>
							</figure>
							<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
							<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						</article>
					</div>
				</div>

				<? while (dumb_luck("3")): ?>
				<div class="grid_8">
					<article class="teaser teaser-regular cat-consumer font-3">
						<figure>
							<a href="article.php"><img class="lazy" data-original="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
						</figure>
						<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
						<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						
					</article>
				</div>
				<? endwhile ?>
				
				<div class="grid_24">
					<div class="text-center module-padding-bottom">
						<a href="#" class="load-more">Hent flere</a>
					</div>
				</div>

			</section><!-- deck -->

			<div class="row">
				<section class="deck clearfix">
						
					<div class="grid_16">
						<?php include('includes/teasers.php'); ?>
					</div>

					<div class="grid_8">
						<aside class="box box-theme-3">
						<h1 class="box-title">
							Liste
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

						<div class="banner mb-20">
							<? dummy("ad@300x250") ?>
						</div>

						
						
					</div>
				</section><!-- deck -->	

			</div>

			
			<section class="deck">
				<div class="grid_12">
					<div class="demo-teaser ">
						<span>SYGDOMME</span>
					</div>
				</div>
				<div class="grid_12">
					<div class="demo-teaser ">
						<span>BUGTE BILER</span>
					</div>
				</div>

			</section>

			<section class="deck">
				
				<? while (dumb_luck("6")): ?>
					<div class="grid_4">
						<div class="demo-teaser ">
							<span>POLL</span>
						</div>
					</div>
				<? endwhile ?>
				

			</section>

			

	</div>


<?php include('includes/main-footer.php'); ?>
<?php include('includes/footer.php'); ?>

</body>
</html>