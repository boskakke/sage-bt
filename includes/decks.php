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