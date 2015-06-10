
<? require_once("../dummy/dummy.php") ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BT.dk</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
</head>
<body>
<div class="topbanner">

	<div class="banner-left"></div>
	<div class="banner-right"></div>
</div>
	<div class="container_24">
		<div class="row">
			<div class="grid_24">
				<div class="main-header"></div>
			</div>
		</div>
		
		<?php include('includes/topdeck.php'); ?>
		
		<section class="deck clearfix">
			
				<div class="grid_14">
					
					<article class="teaser <? dummy("text@bt-main-categories") ?> font-2">
						<figure>
							<a href="article.php"><img class="lazy" data-original="<? dummy("image@540x,16:9") ?>" width="540" height="303" alt="" /></a>
						</figure>
						<a href="section.php" class="category"><? dummy("text@item") ?></a>
						<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						<p><? dummy("text@short-teaser") ?></p>
					</article>
					
				</div>

				<div class="grid_10">
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
				</div>
		</section><!-- deck -->	
	
	 	<section class="deck clearfix">
			<div class="grid_16">
				
				<article class="teaser <? dummy("text@bt-main-categories") ?> font-1">
					<figure>
						<a href="article.php"><img class="lazy" data-original="<? dummy("image@620x,16:9") ?>" width="620" height="348" alt="" /></a>
					</figure>
					<a href="section.php" class="category"><? dummy("text@item") ?></a>
					<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				</article>
				
			</div>
			<div class="grid_8">
				<? while (dumb_luck("2")): ?>
				<article class="teaser <? dummy("text@bt-main-categories") ?> font-5">
					<figure>
						<a href="article.php"><img class="lazy" data-original="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
					</figure>
					<a href="section.php" class="category"><? dummy("text@item") ?></a>
					<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
					<? if (dumb_luck("20%")): ?><p><? dummy("text@short-teaser") ?></p><? endif ?>
				</article>
				
			<? endwhile ?>
			</div>
		</section><!-- deck -->

		<section class="deck clearfix">
			<? while (dumb_luck("2")): ?>
				<div class="grid_12">
					
					<article class="teaser <? dummy("text@bt-main-categories") ?> font-2">
						<figure>
							<a href="article.php"><img class="lazy" data-original="<? dummy("image@460x,16:9") ?>" width="460" height="258" alt="" /></a>
						</figure>
						<a href="section.php" class="category"><? dummy("text@item") ?></a>
						<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
					</article>
					
				</div>

			<? endwhile ?>
			
		</section><!-- deck -->

		

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
					<a href="section.php" class="category"><? dummy("text@item") ?></a>
					<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				</article>
			</div>
			<div class="grid_8">
				<article class="teaser teaser-bite-2 font-5" >
					<figure>
						<a href="article.php"><img class="lazy" data-original="<? dummy("image/@300x,16:9") ?>" width="300" height="168" alt="" /></a>
					</figure>
					<a href="section.php" class="category"><? dummy("text@item") ?></a>
					<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				</article>
			</div>
			<div class="grid_8">
				<article class="teaser teaser-bite-3 font-5" >
					<figure>
						<a href="article.php"><img class="lazy" data-original="<? dummy("image/@300x,16:9") ?>" width="300" height="168" alt="" /></a>
					</figure>
					<a href="section.php" class="category"><? dummy("text@item") ?></a>
					<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				</article>
			</div>
		</section>

		<section class="deck deck-sport clearfix">
			<div class="grid_24">
				<h1 class="deck-header"><a href="section.php"><span class="slash">/</span><strong>SPORT</strong></a></h1>
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
			<? while (dumb_luck("2")): ?>
			
			<div class="grid_12">
				
				<article class="teaser font-2 cat-sport">
					<figure>
						<a href="article.php"><img class="lazy" data-original="<? dummy("image/!sport@460x,16:9") ?>" width="460" height="258" alt="" /></a>
					</figure>
					<a href="section.php" class="category"><? dummy("text@item") ?></a>
					<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				</article>
				
			</div>

			<? endwhile ?>
			</div>
			<div class="row">
				<? while (dumb_luck("2")): ?>
					<div class="grid_8">
						<article class="teaser cat-sport font-5">
							<figure>
								<a href="article.php"><img class="lazy" data-original="<? dummy("image/!sport@300x,16:9") ?>" width="300" height="168" alt="" /></a>
							</figure>
							<a href="section.php" class="category"><? dummy("text@item") ?></a>
							<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
							<? if (dumb_luck("20%")): ?><p><? dummy("text@short-teaser") ?></p><? endif ?>
						</article>
					</div>
				<? endwhile ?>
				<div class="grid_8">
					<? while (dumb_luck("1-2")): ?>
					<div class="live-widget-soccer">
						<span class="live-label">LIVE</span>
						<div class="team-container">
							<span class="team team-1"><? dummy("text@team") ?></span>
							<span class="team team-2"><? dummy("text@team") ?></span>	
						</div>
						<div class="score-container">
							<span><? dummy("text@score") ?></span>
							<span><? dummy("text@score") ?></span>	
						</div>
						<div class="remaining">
							<span class="time" style="width: <? dummy("text@percent") ?>%"></span>
						</div>
					</div>
				<? endwhile ?>
				</div>
			</div>
			<div class="grid_24">
				<div class="text-center module-padding">
					<a href="#" class="load-more">Hent flere <i class="icon-angle-down"></i></a>
				</div>
			</div>

		</section><!-- deck -->


		<section class="deck deck-sport deck-background clearfix">
			<div class="grid_24">
				<h1 class="deck-header"><a href="section.php"><span class="slash">/</span><strong>SPORT</strong></a></h1>
			</div>
			<div class="grid_16">
				
				<article class="teaser font-1 cat-sport">
					<figure>
						<a href="article.php"><img class="lazy" data-original="<? dummy("image/!sport@620x,16:9") ?>" width="620" height="348" alt="" /></a>
					</figure>
					<a href="section.php" class="category"><? dummy("text@item") ?></a>
					<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				</article>
				
			</div>
			<div class="grid_8">
				
				<article class="teaser cat-sport font-5">
					<figure>
						<a href="article.php"><img class="lazy" data-original="<? dummy("image/!sport@300x,16:9") ?>" width="300" height="168" alt="" /></a>
					</figure>
					<a href="section.php" class="category"><? dummy("text@item") ?></a>
					<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
					<? if (dumb_luck("20%")): ?><p><? dummy("text@short-teaser") ?></p><? endif ?>
				</article>
				
				
				<? while (dumb_luck("1-3")): ?>
					<div class="live-widget-soccer">
						<span class="live-label">LIVE</span>
						<div class="team-container">
							<span class="team team-1"><? dummy("text@team") ?></span>
							<span class="team team-2"><? dummy("text@team") ?></span>	
						</div>
						<div class="score-container">
							<span><? dummy("text@score") ?></span>
							<span><? dummy("text@score") ?></span>	
						</div>
						<div class="remaining">
							<span class="time" style="width: <? dummy("text@percent") ?>%"></span>
						</div>
					</div>
				<? endwhile ?>

			</div>
			<div class="grid_24">
				<div class="text-center module-padding">
					<a href="#" class="load-more">Hent flere <i class="icon-angle-down"></i></a>
				</div>
			</div>
		</section><!-- deck -->

		<section class="deck deck-sport  clearfix">
			<div class="grid_24">
				

				<h1 class="deck-header"><a href="section.php"><span class="slash">/</span><strong>SPORT</strong></a></h1>

				

			</div>
			<div class="grid_14">
				
				<article class="teaser font-1 cat-sport">
					<figure>
						<a href="article.php"><img class="lazy" data-original="<? dummy("image/!sport@620x,16:9") ?>" width="620" height="348" alt="" /></a>
					</figure>
					<a href="section.php" class="category"><? dummy("text@item") ?></a>
					<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				</article>
				
			</div>
			<div class="grid_10">
				<? while (dumb_luck("2")): ?>
				<article class="teaser cat-sport font-4">
					<figure>
						<a href="article.php"><img class="lazy" data-original="<? dummy("image/!sport@380x,16:9") ?>" width="380" height="213" alt="" /></a>
					</figure>
					<a href="section.php" class="category"><? dummy("text@item") ?></a>
					<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
					<? if (dumb_luck("20%")): ?><p><? dummy("text@short-teaser") ?></p><? endif ?>
				</article>
				
			<? endwhile ?>
			</div>
			<div class="grid_24">
				<div class="text-center module-padding">
					<a href="#" class="load-more">Hent flere <i class="icon-angle-down"></i></a>
				</div>
			</div>
		</section><!-- deck -->




			<section class="deck clearfix">
			
				<div class="grid_14">
					
					<article class="teaser <? dummy("text@bt-main-categories") ?> font-2">
						<figure>
							<a href="article.php"><img class="lazy" data-original="<? dummy("image@540x,16:9") ?>" width="540" height="303" alt="" /></a>
						</figure>
						<a href="section.php" class="category"><? dummy("text@item") ?></a>
						<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						<p><? dummy("text@short-teaser") ?></p>
					</article>
					
				</div>

				<div class="grid_10">
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
			
			</section><!-- deck -->

			<section class="deck clearfix">
			
				<div class="grid_14">
					
					<article class="teaser <? dummy("text@bt-main-categories") ?> font-1">
						<figure>
							<a href="article.php"><img class="lazy" data-original="<? dummy("image@540x,16:9") ?>" width="540" height="303" alt="" /></a>
						</figure>
						<a href="section.php" class="category"><? dummy("text@item") ?></a>
						<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						<p><? dummy("text@short-teaser") ?></p>
					</article>
					
				</div>

				<div class="grid_10">
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
						<a href="section.php" class="category"><? dummy("text@item") ?></a>
						<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						
					</article>
				</div>
				<? endwhile ?>
			
			</section><!-- deck -->


			<section class="deck clearfix deck-plus ">
				<div class="grid_24">
				<span class="deck-header-right">Få adgang til alt PLUS <a href="#">Læs mere <i class="icon-angle-right"></i></a></span>
					<h1 class="deck-header ">
						<a href="section.php"><span class="slash">/</span> <strong>PLUS</strong></a>
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

				<? while (dumb_luck("3")): ?>
				<div class="grid_8">
					<article class="teaser teaser-regular cat-plus font-3">
						<figure>
							<a href="article.php"><img class="lazy" data-original="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
						</figure>
						<a href="section.php" class="category"><? dummy("text@item") ?></a>
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

			<section class="deck clearfix deck-news">
				<div class="grid_24">
					<h1 class="deck-header deck-header-small">
						<a href="section.php"><strong>TEMA:</strong> Se&Hør skandalen</a>
						
					</h1>
				</div>
				<? while (dumb_luck("3")): ?>
				<div class="grid_8">
					<article class="teaser teaser-regular cat-news font-3">
						<figure>
							<a href="article.php"><img class="lazy" data-original="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
						</figure>
						<a href="section.php" class="category"><? dummy("text@item") ?></a>
						<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						
					</article>
				</div>
				<? endwhile ?>
			
			</section><!-- deck -->

			<section class="deck clearfix deck-health deck-alt">
				<div class="grid_24">
					<h1 class="deck-header ">
						<a href="section.php"><span class="slash">/</span><strong>LIVSSTIL</strong></a>
						
					</h1>
				</div>
				<? while (dumb_luck("3")): ?>
				<div class="grid_8">
					<article class="teaser teaser-regular cat-news font-3">
						<figure>
							<a href="article.php"><img class="lazy" data-original="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
						</figure>
						<a href="section.php" class="category"><? dummy("text@item") ?></a>
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
						<a href="section.php" class="category"><? dummy("text@item") ?></a>
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



			<section class="deck clearfix deck-entertainment no-cat">
				<div class="grid_24">
					<h1 class="deck-header ">
						<a href="section.php"><strong>MELODI GRAND PRIX</strong> <span class="small">Lorem ipsum</span></a>
						
					</h1>
				</div>
				<? while (dumb_luck("3")): ?>
				<div class="grid_8">
					<article class="teaser teaser-regular cat-entertainment font-3">
						<figure>
							<a href="article.php"><img class="lazy" data-original="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
						</figure>
						<a href="section.php" class="category"><? dummy("text@item") ?></a>
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

			<section class="deck clearfix deck-consumer no-cat">
				<div class="grid_24">
					<h1 class="deck-header deck-header-alt">
						<a href="section.php"><span class="slash">/</span><strong>FORBRUG</strong> <span class="small">Spar 25% på elregningen</span></a>
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
								<a href="article.php"><img class="lazy" data-original="<? dummy("image@940x,16:9") ?>" width="940" height="528" alt="" /></a>
							</figure>
							<a href="section.php" class="category"><? dummy("text@item") ?></a>
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
						<a href="section.php" class="category"><? dummy("text@item") ?></a>
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

			<section class="deck clearfix deck-sport no-cat">
				<div class="grid_24">
					<h1 class="deck-header deck-header-alt">
						<a href="section.php"><span class="slash">/</span><strong>SPORT</strong> <span class="small">Superliga</span></a>
					</h1>
				</div>
				<? while (dumb_luck("3")): ?>
				<div class="grid_8">
					<article class="teaser teaser-regular cat-consumer font-3">
						<figure>
							<a href="article.php"><img class="lazy" data-original="<? dummy("image/!sport@300x,16:9") ?>" width="300" height="168" alt="" /></a>
						</figure>
						<a href="section.php" class="category"><? dummy("text@item") ?></a>
						<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						
					</article>
				</div>
				<? endwhile ?>
				
				<div class="grid_24">
					<div class="text-center module-padding-bottom">
						<a href="section.php" class="load-more">Hent flere <i class="icon-angle-down"></i></a>
					</div>
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
								<footer class="teaser-byline">
									<? dummy("text@author") ?>
								</footer>
								<a href="article.php" class="header">
									<? dummy("text@headline") ?>
								</a>
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

	</div>


<footer class="site-footer">
	<div class="container_24">
		<div class="row">
			<div class="grid_24">
				<div class="footer-social text-center">
					<a href="#" class="btn-social-facebook"><i class="icon-facebook"></i></a>
					<a href="#" class="btn-social-twitter"><i class="icon-twitter"></i></a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="grid_4">
				<a href="#" class="bt-logo logo-footer"></a>
				
				<p class="small">
				Berlingske Media<br>
				Pilestræde 34 <br>
				1147 København K<br>
				Danmark  <br>
				Tlf. +45 3375 7533 <br>
				CVR 29207313</p>

				<p class="small">
				<span class="gray">Chefredaktører:</span><br>
				Olav Skaaning Andersen (ansv.)<br>
				Flemming Fjeldgaard</p>

				<p class="small">
				<span class="gray">Digital chef:</span><br>
				Kevin Walsh </p>

				<p class="small">
				<span class="gray">Digital nyhedschef:</span> <br>
				Lars Westh. </p>
				<a href="#" class="btn btn-alarm">Send tip</a>
			</div>
			<div class="grid_4">
				<h2 class="footer-header-news"><a href="section.php">Nyheder</a></h2>
				<ul class="sitemap">
					<? while (dumb_luck("10-14")): ?>
						<li><a href="section.php"><? dummy("text@item") ?></a></li>
					<? endwhile ?>
				</ul>
			</div>
			<div class="grid_4">
				<h2 class="footer-header-sport"><a href="section.php">Sport</a></h2>
				<ul class="sitemap">
					<? while (dumb_luck("10-14")): ?>
						<li><a href="section.php"><? dummy("text@item") ?></a></li>
					<? endwhile ?>
				</ul>
			</div>
			<div class="grid_4">
				<h2 class="footer-header-entertainment"><a href="section.php">Underholdning</a></h2>
				<ul class="sitemap">
					<? while (dumb_luck("10-14")): ?>
						<li><a href="section.php"><? dummy("text@item") ?></a></li>
					<? endwhile ?>
				</ul>
			</div>
			<div class="grid_4">
				<h2 class="footer-header-health"><a href="section.php">Sundhed</a></h2>
				<ul class="sitemap">
					<? while (dumb_luck("10-14")): ?>
						<li><a href="section.php"><? dummy("text@item") ?></a></li>
					<? endwhile ?>
				</ul>
			</div>
			<div class="grid_4">
				<h2 class="footer-header-consumer"><a href="section.php">Forbrug</a></h2>
				<ul class="sitemap">
					<? while (dumb_luck("10-14")): ?>
						<li><a href="section.php"><? dummy("text@item") ?></a></li>
					<? endwhile ?>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="grid_24">
				<div class="text-center module-padding">
					<p class="small gray"><a href="#" class="cookies">Privatlivspolitik</a> - <a href="#">Ophavsret og vilkår</a> - <a href="#">Generelle handelsbetingelser</a></p>
				</div>
			</div>
		</div>
	</div>
</footer>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="/dist/scripts/jquery.lazyload.js"></script>
<script src="/dist/scripts/main.js"></script>

</body>
</html>