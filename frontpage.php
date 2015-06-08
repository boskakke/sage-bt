
<? require_once("../dummy/dummy.php") ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BT.dk</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
</head>
<body>
	<div class="container_24">
		
	 	<section class="deck clearfix">
			<div class="grid_16">
				
				<article class="teaser <? dummy("text@bt-main-categories") ?> font-1">
					<figure>
						<a href="article.php"><img src="<? dummy("image@620x,16:9") ?>" width="620" height="348" alt="" /></a>
					</figure>
					<a href="section.php" class="category"><? dummy("text@item") ?></a>
					<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				</article>
				
			</div>
			<div class="grid_8">
				<? while (dumb_luck("2")): ?>
				<article class="teaser <? dummy("text@bt-main-categories") ?> font-5">
					<figure>
						<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
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
							<a href="article.php"><img src="<? dummy("image@460x,16:9") ?>" width="460" height="258" alt="" /></a>
						</figure>
						<a href="section.php" class="category"><? dummy("text@item") ?></a>
						<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
					</article>
					
				</div>

			<? endwhile ?>
			
		</section><!-- deck -->

		<section class="deck clearfix">
			
				<div class="grid_14">
					
					<article class="teaser <? dummy("text@bt-main-categories") ?> font-2">
						<figure>
							<a href="article.php"><img src="<? dummy("image@540x,16:9") ?>" width="540" height="303" alt="" /></a>
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



		<section class="deck deck-cat-sport deck-background clearfix">
			<div class="grid_24">
				<h1 class="deck-header"><span class="slash">/</span>sport</h1>
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
				<? while (dumb_luck("2")): ?>
				<article class="teaser cat-sport font-5">
					<figure>
						<a href="article.php"><img class="lazy" data-original="<? dummy("image/!sport@300x,16:9") ?>" width="300" height="168" alt="" /></a>
					</figure>
					<a href="section.php" class="category"><? dummy("text@item") ?></a>
					<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
					<? if (dumb_luck("20%")): ?><p><? dummy("text@short-teaser") ?></p><? endif ?>
				</article>
				
			<? endwhile ?>
			</div>
		</section><!-- deck -->

		<section class="deck deck-cat-sport deck-border-bottom">
			<div class="grid_24">
				<h1 class="deck-header"><span class="slash">/</span>sport</h1>
			</div>
			<div class="grid_16">
				
				<article class="teaser cat-sport font-1">
					<figure>
						<a href="article.php"><img class="lazy" data-original="<? dummy("image/!sport@620x,16:9") ?>" width="620" height="348" alt="" /></a>
					</figure>
					<a href="section.php" class="category"><? dummy("text@item") ?></a>
					<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				</article>
				
			</div>
			<div class="grid_8">
				<? while (dumb_luck("2")): ?>
				<article class="teaser cat-sport font-5">
					<figure>
						<a href="article.php"><img class="lazy" data-original="<? dummy("image/!sport@300x,16:9") ?>" width="300" height="168" alt="" /></a>
					</figure>
					<a href="section.php" class="category"><? dummy("text@item") ?></a>
					<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
					<? if (dumb_luck("20%")): ?><p><? dummy("text@short-teaser") ?></p><? endif ?>
				</article>
				
			<? endwhile ?>
			</div>
			<div class="grid_24">
				<div class="text-center module-padding">
					<button class="btn btn-sm">Hent flere <i class="icon-angle-down"></i></button>
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
						
						<div class="text-center">
							<button class="btn btn-sm">Hent flere</button>
						</div>
					</aside>
				</div>
			
			</section><!-- deck -->


			<section class="deck clearfix deck-background-health no-cat">
				<div class="grid_24">
					<h1 class="deck-header deck-header-small">
						<strong>I form:</strong> Marathon-klar på fire uger
					</h1>
				</div>
				<? while (dumb_luck("3")): ?>
				<div class="grid_8">
					<article class="teaser teaser-regular <? dummy("text@bt-main-categories") ?> font-3">
						<figure>
							<a href="article.php"><img class="lazy" data-original="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
						</figure>
						<a href="section.php" class="category"><? dummy("text@item") ?></a>
						<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
						
					</article>
				</div>
				<? endwhile ?>
			
			</section><!-- deck -->


	</div>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="/dist/scripts/jquery.lazyload.js"></script>
<script src="/dist/scripts/main.js"></script>

</body>
</html>