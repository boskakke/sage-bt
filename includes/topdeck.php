<div class="row">
	<div class="grid_24">
		<article class="teaser-oneliner-breaking">
			<a href="article.php"><span>Breaking</span> <? dummy("text@headline") ?></a>
		</article>
		<article class="teaser-oneliner-comingup">
			<a href="article.php"><span>Opdateres</span> <? dummy("text@headline") ?></a>
		</article>
		<article class="teaser-oneliner-live">
			<a href="article.php"><span>Live</span> <? dummy("text@headline") ?></a>
		</article>
		<article class="teaser-oneliner-live-sport">
			<a href="article.php"><span>Live</span> <? dummy("text@headline") ?></a>
		</article>

	</div>
</div>
<div class="row">
	<div class="grid_24">
		<article class="topstory topstory-upper teaser cat-news">
			<figure>
				<a href="article.php"><img src="<? dummy("image@940x,16:9") ?>" width="" height="" alt="" /></a>
			</figure>
		</article>
	</div>
	
</div>

<div class="row">
	<div class="grid_14 topdeck">
		<div class="topstory topstory-bottom teaser cat-news font-1 <? if (dumb_luck("25%")): ?>teaser-breaking <? endif ?>">

			<div class="header-container">
				<a href="section.php" class="category"><? dummy("text@item") ?></a>
				<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				<? if (dumb_luck("50%")): ?>
				<ul class="related">
					<? while (dumb_luck("0-2")): ?>
						<li class="teaser mega">
							<a href="#" >
							<figure><img class="lazy" data-original="<? dummy("image@125x,16:9") ?>" width="" height="" alt="" /></figure>
							<? dummy("text@headline-bt") ?>
							</a>
						</li>
					<? endwhile ?>

					<? while (dumb_luck("0-2")): ?>
						<li >
							<a href="#" class="">
							<strong>Læs også:</strong> <? dummy("text@headline-bt") ?>
							</a>
						</li>
					<? endwhile ?>
				</ul>
				<? endif ?>
				
			</div>
		</div>

		
		


		<? while (dumb_luck("2")): ?>
		<div class="grid_7 alpha">
			<article class="teaser <? dummy("text@bt-main-categories") ?> font-4">
				<figure>
					<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
				</figure>
				<a href="section.php" class="category"><? dummy("text@item") ?></a>
				<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				<? if (dumb_luck("20%")): ?><p><? dummy("text@short-teaser") ?></p><? endif ?>
			</article>
		</div>
		<div class="grid_7 omega">
			<article class="teaser <? dummy("text@bt-main-categories") ?> font-4">
				<figure>
					<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
				</figure>
				<a href="section.php" class="category"><? dummy("text@item") ?></a>
				<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				<? if (dumb_luck("20%")): ?><p><? dummy("text@short-teaser") ?></p><? endif ?>
			</article>
		</div>
		
		<? if (dumb_luck("50%")): ?>
		<div class="grid_14 alpha omega ">
			<article class="teaser teaser-noimage <? dummy("text@bt-main-categories") ?>">
				<a href="section.php" class="category"><? dummy("text@item") ?></a>
				<h1 class="header">
					<a href="article.php"><? dummy("text@headline") ?></a></h1>
				</h1>
			</article>
		</div>
		<? endif ?>

		<div class="grid_14 alpha omega">
			<article class="teaser teaser-bb <? dummy("text@bt-main-categories") ?> font-2">
				<figure>
					<a href="article.php"><img src="<? dummy("image@620x,16:9") ?>" width="620" height="348" alt="" /></a>
				</figure>
				<a href="section.php" class="category"><? dummy("text@item") ?></a>
				<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				<? if (dumb_luck("20%")): ?><p><? dummy("text@short-teaser") ?></p><? endif ?>
			</article>
		</div>
		<? endwhile ?>


	</div>
	<div class="grid_10">
		<section class="live-ticker">
		<div class="banner">
			<? dummy("ad@300x250") ?>
		</div>
			<h1>LIVE <span>Jourhavende: <? dummy("text@author") ?></span></h1>
			<ul>
				<? while (dumb_luck("20")): ?>
				<li>
					<time><? dummy("text@time-ago-bt") ?></time>
					<h2><a href="article.php"><? dummy("text@headline") ?></a></h2>
					<? if (dumb_luck("20%")): ?><a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="" height="" alt="" /></a><? endif ?>
					<p><? dummy("text@teaser") ?></p>
				</li>
				<? endwhile ?>
			</ul>
		</section>

		
	</div>
</div>
<div class="row">
	<div class="grid_24">
		<div class="banner mb-20">
			<? dummy("ad@940x180") ?>
		</div>
	</div>
</div>