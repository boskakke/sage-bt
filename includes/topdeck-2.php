<? if (dumb_luck("25%")): ?>

	<div class="row">
		<div class="grid_24">
			<article class="teaser-oneliner-breaking oneliner-size-1">
				<a href="article.php"><span>Breaking</span> <? dummy("text@headline") ?></a>
			</article>
			<!-- <article class="teaser-oneliner-comingup">
				<a href="article.php"><span>Opdateres</span> <? dummy("text@headline") ?></a>
			</article>
			<article class="teaser-oneliner-live">
				<a href="article.php"><span>Live</span> <? dummy("text@headline") ?></a>
			</article>
			<article class="teaser-oneliner-live-sport">
				<a href="article.php"><span>Live</span> <? dummy("text@headline") ?></a>
			</article> -->

		</div>
	</div>
<? endif ?>
<div class="row">
	<div class="grid_24">
		<article class="teaser cat-news font-2 teaser-overlay teaser-text-overlay">
			<figure class="image-overlay">
				<a href="article.php"><img src="<? dummy("image@940x,16:9") ?>" width="" height="" alt=""  /></a>
			</figure>
			<header>
				<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
				<h1 class="header">
					<a href="article.php"><? dummy("text@headline") ?></a>
				</h1>
				<p><? dummy("text@short-teaser") ?></p>
			</header>
		</article>
	</div>
	
</div>

<div class="row">
	<div class="grid_16" id="topdeck">
		
					
		<div class="grid_16 alpha omega">
			<article class="teaser  <? dummy("text@bt-main-categories") ?> font-2">
				<figure>
					<a href="article.php"><img src="<? dummy("image@620x,16:9") ?>" width="620" height="348" alt="" /></a>
				</figure>
				<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
				<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				
			</article>
		</div>


		<div class="grid_8 alpha">
			<article class="teaser teaser-regular <? dummy("text@bt-main-categories") ?> font-4">
				<figure>
					<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
				</figure>
				<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
				<h1 class="header"><a href="article.php"><i class="icon-play"></i> <? dummy("text@headline-bt") ?></a></h1>
			</article>
		</div>
		<div class="grid_8 omega">
			<article class="teaser teaser-regular <? dummy("text@bt-main-categories") ?> font-4">
				<figure>
					<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
				</figure>
				<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
				<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
			</article>
		</div>

		<div class="grid_8 alpha">
			<article class="teaser <? dummy("text@bt-main-categories") ?> font-3">
				<figure>
					<a href="article.php"><img class="lazy" data-original="<? dummy("image@300x,16:9") ?>" width="300" height="303" alt="" /></a>
				</figure>
				<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
				<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				
			</article>
		</div>
					
		<div class="grid_8 omega">
			<article class="teaser <? dummy("text@bt-main-categories") ?> font-3">
				<figure>
					<a href="article.php"><img class="lazy" data-original="<? dummy("image@300x,16:9") ?>" width="300" height="303" alt="" /></a>
				</figure>
				<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
				<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				
			</article>
		</div>


		

		<div class="grid_16 alpha omega ">
			<article class="teaser teaser-noimage <? dummy("text@bt-main-categories") ?>">
				<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
				<h1 class="header">
					<a href="article.php"><i class="icon-dot-circled"></i> <? dummy("text@headline") ?></a></h1>
				</h1>
			</article>
		</div>


		
		<div class="grid_8 alpha">
			<article class="teaser teaser-regular <? dummy("text@bt-main-categories") ?> font-4">
				<figure>
					<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
				</figure>
				<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
				<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				
			</article>
		</div>
		<div class="grid_8 omega">
			<article class="teaser teaser-regular <? dummy("text@bt-main-categories") ?> font-4">
				<figure>
					<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
				</figure>
				<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
				<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				
			</article>
		</div>
		
		

	
	</div>
	<div class="grid_8">
		<?php include('includes/liveticker-1.php') ?>

		<article class="teaser demo-teaser">
			<span>Facebook teaser</span>
		</article>
		<article class="teaser demo-teaser">
			<span>Leder</span>
		</article>
	</div>
</div>
<div class="row">
	<div class="grid_24">
		<div class="banner mb-40 mt-40">
			<? dummy("ad@940x180") ?>
		</div>
	</div>
</div>