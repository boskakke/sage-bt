
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



<div class="container_24">
	
	
	

<section class="deck clearfix">
			<div class="grid_16">
				
				<article class="teaser <? dummy("text@bt-main-categories") ?> font-1">
					<figure>
						<a href="article.php"><img class="lazy" data-original="<? dummy("image@620x,16:9") ?>" width="620" height="348" alt="" /></a>
					</figure>
					<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
					<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				</article>
				
			</div>
			<div class="grid_8">
				<? while (dumb_luck("2")): ?>
				<article class="teaser <? dummy("text@bt-main-categories") ?> font-5">
					<figure>
						<a href="article.php"><img class="lazy" data-original="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
					</figure>
					<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
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
						<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
						<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
					</article>
					
				</div>

			<? endwhile ?>
			
		</section><!-- deck -->


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
					<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
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
							<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
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
					<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
					<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				</article>
				
			</div>
			<div class="grid_8">
				
				<article class="teaser cat-sport font-5">
					<figure>
						<a href="article.php"><img class="lazy" data-original="<? dummy("image/!sport@300x,16:9") ?>" width="300" height="168" alt="" /></a>
					</figure>
					<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
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
					<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
					<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				</article>
				
			</div>
			<div class="grid_10">
				<? while (dumb_luck("2")): ?>
				<article class="teaser cat-sport font-4">
					<figure>
						<a href="article.php"><img class="lazy" data-original="<? dummy("image/!sport@380x,16:9") ?>" width="380" height="213" alt="" /></a>
					</figure>
					<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
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
						<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
						<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						
					</article>
				</div>
				<? endwhile ?>
			
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
						<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
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



			

	

		

</div>


<?php include('includes/main-footer.php'); ?>
<?php include('includes/footer.php'); ?>

</body>
</html>