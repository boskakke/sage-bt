
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
	<div class="row">
		<div class="grid_24">
			<?php include('includes/main-header.php'); ?>
		</div>
	</div>
	
	<div class="row">
		<div class="grid_24 clearfix">
			<h1 class="demo">Decks <small>class names</small></h1>
			<h2 class="demo">.deck-breaking</h2>
		</div>
	</div>
	
	<section class="deck clearfix deck-breaking ">
				<div class="grid_24">
					<h1 class="deck-header deck-header-alt">
						<i class="icon-dot-circled"></i> <strong>TERROR</strong> <span class="small">Sagen minut for minut</span>
					</h1>
				</div>
				
				<div class="row">
					<div class="grid_24">
						<article class="teaser cat-news font-1 mb-40">
							<figure>
								<a href="article.php"><img class="lazy" data-original="<? dummy("image@940x,16:9") ?>" width="940" height="528" alt="" /></a>
							</figure>
							<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
							<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>

							<?php include('includes/teaser-related.php'); ?>

						</article>
					</div>
				</div>

				<? while (dumb_luck("3")): ?>
				<div class="grid_8">
					<article class="teaser cat-news font-3">
						<figure>
							<a href="article.php"><img class="lazy" data-original="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
						</figure>
						<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
						<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						<?php include('includes/teaser-related.php'); ?>
					</article>
				</div>
				<? endwhile ?>
				
				<div class="grid_24">
					<div class="text-center deck-footer">
						<a href="#" class="load-more">Mere terror <i class="icon-down-dir"></i></a>
					</div>
				</div>

			</section><!-- deck -->

			<h2 class="demo">.deck-breaking-black</h2>

			<section class="deck clearfix deck-breaking-black ">
				<div class="grid_24">
					<h1 class="deck-header deck-header-alt">
						<a href="section.php"><i class="icon-dot-circled"></i> <strong>TERROR</strong> <span class="small">Gernimgsmand jagtes i København</span></a>
					</h1>
				</div>
				<div class="row">
					<div class="grid_24">
						<ul class="deck-menu">
							<? while (dumb_luck("7")): ?>
								<li><a href="section.php"><? dummy("text@bt-sub-categories") ?></a></li>
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
						<article class="teaser cat-news font-1 mb-40">
							<figure>
								<a href="article.php"><img class="lazy" data-original="<? dummy("image@940x,16:9") ?>" width="940" height="528" alt="" /></a>
							</figure>
							<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
							<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>

							<?php include('includes/teaser-related.php'); ?>

						</article>
					</div>
				</div>

				<? while (dumb_luck("3")): ?>
				<div class="grid_8">
					<article class="teaser cat-news font-3">
						<figure>
							<a href="article.php"><img class="lazy" data-original="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
						</figure>
						<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
						<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						
					</article>
				</div>
				<? endwhile ?>
				
				<div class="grid_24">
					<div class="text-center deck-footer">
						<a href="#" class="load-more">Mere vold <i class="icon-down-dir"></i></a>
					</div>
				</div>

			</section><!-- deck -->

			<h2 class="demo">.deck-news</h2>
	<section class="deck clearfix deck-news ">
				<div class="grid_24">
					<h1 class="deck-header deck-header-alt">
						<a href="section.php"><strong>#POLITIK</strong> <span class="small">Alt om den nye regering</span></a>
					</h1>
				</div>
				
				<div class="row">
					<div class="grid_24">
						<article class="teaser cat-news font-1 mb-40">
							<figure>
								<a href="article.php"><img class="lazy" data-original="<? dummy("image@940x,16:9") ?>" width="940" height="528" alt="" /></a>
							</figure>
							<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
							<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
							<?php include('includes/teaser-related.php'); ?>
						</article>
					</div>
				</div>

				<? while (dumb_luck("3")): ?>
				<div class="grid_8">
					<article class="teaser cat-news font-3">
						<figure>
							<a href="article.php"><img class="lazy" data-original="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
						</figure>
						<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
						<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						
					</article>
				</div>
				<? endwhile ?>
				
				<div class="grid_24">
					<div class="text-center deck-footer">
						<a href="#" class="load-more">Mere politik <i class="icon-down-dir"></i></a>
					</div>
				</div>

			</section><!-- deck -->

	<h2 class="demo">.deck-sport</h2>
	<section class="deck clearfix deck-sport ">
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
						<article class="teaser cat-sport font-1 mb-40">
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
					<article class="teaser  cat-sport font-3">
						<figure>
							<a href="article.php"><img class="lazy" data-original="<? dummy("image/!sport@300x,16:9") ?>" width="300" height="168" alt="" /></a>
						</figure>
						<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
						<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						
					</article>
				</div>
				<? endwhile ?>
				
				<div class="grid_24">
					<div class="text-center deck-footer">
						<a href="#" class="load-more">Mere sport <i class="icon-down-dir"></i></a>
					</div>
				</div>

			</section><!-- deck -->


			<h2 class="demo">.deck-consumersales .deck-alt</h2>

			<section class="deck clearfix deck-consumersales deck-alt">
				
				<div class="grid_24">
					<h1 class="deck-header ">
						<a href="section.php"><strong>BT SHOP</strong> </a>
					</h1>
				</div>				
				

				<? while (dumb_luck("3")): ?>
				<div class="grid_8">
					<article class="teaser  cat-news font-3">
						<figure>
							<a href="article.php"><img class="lazy" data-original="<? dummy("image/!sport@300x,16:9") ?>" width="300" height="168" alt="" /></a>
						</figure>
						<a href="section.php" class="category">BT Tilbud</a>
						<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						
					</article>
				</div>
				<? endwhile ?>
				
				<div class="grid_24">
					<div class="text-center deck-footer">
						<a href="#" class="load-more">Mere shopping <i class="icon-down-dir"></i></a>
					</div>
				</div>

			</section><!-- deck -->

			<h2 class="demo">.deck-entertainment</h2>

			<section class="deck clearfix deck-entertainment ">
				<div class="grid_24">
					<h1 class="deck-header deck-header-alt">
						<a href="section.php"><span class="slash">/</span><strong>UNDERHOLDNING</strong> <span class="small"><? dummy("text@item") ?></span></a>
					</h1>
				</div>
				<div class="row">
					<div class="grid_24">
						<ul class="deck-menu">
							<? while (dumb_luck("7")): ?>
								<li><a href="section.php"><? dummy("text@bt-sub-categories") ?></a></li>
							<? endwhile ?>
							<li class="menu-more"><a href="section.php">Mere underholdning <i class="icon-angle-down"></i></a>
								<ul>
									<? while (dumb_luck("8")): ?><li><a href="section.php"><? dummy("text@cat-sport") ?></a></li><? endwhile ?>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="grid_24">
						<article class="teaser cat-entertainment font-1 mb-40">
							<figure>
								<a href="article.php"><img class="lazy" data-original="<? dummy("image/@940x,16:9") ?>" width="940" height="528" alt="" /></a>
							</figure>
							<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
							<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						</article>
					</div>
				</div>

				<? while (dumb_luck("3")): ?>
				<div class="grid_8">
					<article class="teaser  cat-entertainment font-3">
						<figure>
							<a href="article.php"><img class="lazy" data-original="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
						</figure>
						<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
						<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						
					</article>
				</div>
				<? endwhile ?>
				
				<div class="grid_24">
					<div class="text-center deck-footer">
						<a href="#" class="load-more">Mere underholdning <i class="icon-down-dir"></i></a>
					</div>
				</div>

			</section><!-- deck -->

			<h2 class="demo">.deck-health</h2>

			<section class="deck clearfix deck-health">
				<div class="grid_24">
					<h1 class="deck-header deck-header-alt">
						<a href="section.php"><span class="slash">/</span><strong>SUNDHED</strong> <span class="small">Marathon klar på fire uger</span></a>
					</h1>
				</div>
				<div class="row">
					<div class="grid_24">
						<ul class="deck-menu">
							<? while (dumb_luck("7")): ?>
								<li><a href="section.php"><? dummy("text@bt-sub-categories") ?></a></li>
							<? endwhile ?>
							<li class="menu-more"><a href="section.php">Mere sundhed <i class="icon-angle-down"></i></a>
								<ul>
									<? while (dumb_luck("8")): ?><li><a href="section.php"><? dummy("text@bt-sub-categories") ?></a></li><? endwhile ?>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="grid_24">
						<article class="teaser cat-health font-1 mb-40">
							<figure>
								<a href="article.php"><img class="lazy" data-original="<? dummy("image/@940x,16:9") ?>" width="940" height="528" alt="" /></a>
							</figure>
							<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
							<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						</article>
					</div>
				</div>

				<? while (dumb_luck("3")): ?>
				<div class="grid_8">
					<article class="teaser cat-health font-3">
						<figure>
							<a href="article.php"><img class="lazy" data-original="<? dummy("image/@300x,16:9") ?>" width="300" height="168" alt="" /></a>
						</figure>
						<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
						<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						
					</article>
				</div>
				<? endwhile ?>
				
				<div class="grid_24">
					<div class="text-center deck-footer">
						<a href="#" class="load-more">Mere sundhed <i class="icon-down-dir"></i></a>
					</div>
				</div>

			</section><!-- deck -->
				
			<h2 class="demo">
				.deck-health .deck-alt
			</h2>
			<section class="deck clearfix deck-health deck-alt">
				<div class="grid_24">
					<h1 class="deck-header deck-header-alt">
						<a href="section.php"><strong>SOMMERFORM</strong> <span class="small">Marathon klar på fire uger</span></a>
					</h1>
				</div>
				
				

				<? while (dumb_luck("3")): ?>
				<div class="grid_8">
					<article class="teaser cat-health font-3">
						<figure>
							<a href="article.php"><img class="lazy" data-original="<? dummy("image/@300x,16:9") ?>" width="300" height="168" alt="" /></a>
						</figure>
						<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
						<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						
					</article>
				</div>
				<? endwhile ?>
				
				

			</section><!-- deck -->


	

<h2 class="demo">.deck-consumer</h2>

			<section class="deck clearfix deck-consumer ">
			

				<div class="grid_24">
					<h1 class="deck-header ">
						<a href="section.php"><span class="slash">/</span><strong>FORBRUG</strong> <span class="small">Spar 25% på din elregning</span></a>
					</h1>
				</div>
				<div class="row">
					<div class="grid_24">
						<ul class="deck-menu">
							<? while (dumb_luck("7")): ?>
								<li><a href="section.php"><? dummy("text@bt-sub-categories") ?></a></li>
							<? endwhile ?>
							<li class="menu-more"><a href="section.php">Mere forbrug <i class="icon-angle-down"></i></a>
								<ul>
									<? while (dumb_luck("8")): ?><li><a href="section.php"><? dummy("text@bt-sub-categories") ?></a></li><? endwhile ?>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="grid_24">
						<article class="teaser cat-consumer font-1 mb-40">
							<figure>
								<a href="article.php"><img class="lazy" data-original="<? dummy("image/@940x,16:9") ?>" width="940" height="528" alt="" /></a>
							</figure>
							<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
							<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						</article>
					</div>
				</div>

				<? while (dumb_luck("3")): ?>
				<div class="grid_8">
					<article class="teaser cat-consumer font-3">
						<figure>
							<a href="article.php"><img class="lazy" data-original="<? dummy("image/@300x,16:9") ?>" width="300" height="168" alt="" /></a>
						</figure>
						<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
						<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						
					</article>
				</div>
				<? endwhile ?>
				
				<div class="grid_24">
					<div class="text-center deck-footer">
						<a href="#" class="load-more">Mere sport <i class="icon-down-dir"></i></a>
					</div>
				</div>

			</section><!-- deck -->
	

<h2 class="demo">.deck-plus</h2>

			<section class="deck clearfix deck-plus">
				<div class="grid_24">
					<h1 class="deck-header deck-header-alt">
						<a href="section.php"><span class="slash">/</span><strong>PLUS</strong> <a href="#"><span class="small">Prøv PLUS i 30 dage </span></a>
					</h1>
				</div>
				<div class="row">
					<div class="grid_24">
						<ul class="deck-menu">
							<? while (dumb_luck("7")): ?>
								<li><a href="section.php"><? dummy("text@cat-sport") ?></a></li>
							<? endwhile ?>
							<li class="menu-more"><a href="section.php">Mere Plus <i class="icon-angle-down"></i></a>
								<ul>
									<? while (dumb_luck("8")): ?><li><a href="section.php"><? dummy("text@cat-sport") ?></a></li><? endwhile ?>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="grid_24">
						<article class="teaser cat-plus font-1 mb-40">
							<figure>
								<a href="article.php"><img class="lazy" data-original="<? dummy("image/@940x,16:9") ?>" width="940" height="528" alt="" /></a>
							</figure>
							<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
							<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						</article>
					</div>
				</div>

				<? while (dumb_luck("3")): ?>
				<div class="grid_8">
					<article class="teaser  cat-plus font-3">
						<figure>
							<a href="article.php"><img class="lazy" data-original="<? dummy("image/@300x,16:9") ?>" width="300" height="168" alt="" /></a>
						</figure>
						<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
						<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						
					</article>
				</div>
				<? endwhile ?>
				
				<div class="grid_24">
					<div class="text-center deck-footer">
						<a href="#" class="load-more">Mere sport <i class="icon-down-dir"></i></a>
					</div>
				</div>

			</section><!-- deck -->
	


		

</div>


<?php include('includes/main-footer.php'); ?>
<?php include('includes/footer.php'); ?>

</body>
</html>