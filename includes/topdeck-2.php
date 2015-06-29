<? if (dumb_luck("25%")): ?>

	
		<div class="grid_24">
			<article class="teaser-oneliner-breaking">
				<a href="article.php"><i class="icon-attention-alt blink"></i> <span>Breaking</span> <? dummy("text@headline") ?></a>
			</article>
			<!-- <article class="teaser-oneliner-comingup">
				<a href="article.php"><i class="icon-dot-circled blink"></i> <span>Opdateres</span> <? dummy("text@headline") ?></a>
			</article>
			<article class="teaser-oneliner-comingup">
				<a href="article.php"><i class="icon-right-open left-right"></i> <span>Live</span> <? dummy("text@headline") ?></a>
			</article>
			
			<article class="teaser-oneliner-live-sport">
				<a href="article.php"><i class="icon-right-open left-right"></i> <span>Live</span> <? dummy("text@headline") ?></a>
			</article> -->

		</div>
	
<? endif ?>
<div class="r ow">
	<div class="grid_24">
		<article class="teaser cat-news font-1 teaser-breaking">
			<figure class="image-overlay">
				<a href="article.php"><img src="<? dummy("image@940x,16:7") ?>" width="" height="" alt=""  /></a>
			</figure>
			<header>
				<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
				<h1 class="header">
					<a href="article.php"><? dummy("text@headline") ?></a>
				</h1>
				<p><? dummy("text@headline") ?></p>

				<ul class="related-mega">
					<? while (dumb_luck("1-3")): ?>
					<li >
						<figure>
							<img src="<? dummy("image@100x,16:9") ?>" width="" height="" alt="" />
						</figure>
						<div class="teaser-body">
							<a href="article.php">
								<? dummy("text@headline") ?>
							</a>
						</div>
					</li>

					<? endwhile ?>

				</ul>
				<ul class="related list-inline">
					<? while (dumb_luck("1-10")): ?>
					<li><a href="article.php"><? dummy("text@headline") ?></a></li>
					<? endwhile ?>
				</ul>
			</header>
		</article>
	</div>
	
</div>

<div class="ro w">
	<div class="grid_16" id="topdeck">
		
		<article class="teaser teaser-noimage teaser-noimage-breaking <? dummy("text@bt-main-categories") ?>">
				<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
				<h1 class="header">
					<a href="article.php"><i class="icon-dot-circled"></i> <? dummy("text@headline") ?></a></h1>
				</h1>
				<?php include('includes/teaser-related.php'); ?>
		</article>

					
	
	<article class="teaser cat-news font-2">
		<figure>
			<a href="article.php"><img src="<? dummy("image@620x,16:9") ?>" width="620" alt="" /></a>
		</figure>
		<a href="section.php" class="category">Krimi</a>
		<h1 class="header">
		<span class="teaser-tag-live">Live</span>
		<a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
		
	</article>

<!-- 
		<div class="grid_16 alpha omega">
			<article class="teaser  <? dummy("text@bt-main-categories") ?> font-2">
				<figure>
					<a href="article.php"><img src="<? dummy("image@620x,16:9") ?>" width="620" height="348" alt="" /></a>
				</figure>
				<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
				<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				<?php include('includes/teaser-related.php'); ?>
			</article>
		</div>
 -->

		<div class="grid_8 alpha">
			<article class="teaser  <? dummy("text@bt-main-categories") ?> font-4">
				<figure>
					<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
				</figure>
				<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
				<h1 class="header"><a href="article.php"><i class="icon-play"></i> <? dummy("text@headline-bt") ?></a></h1>
				<?php include('includes/teaser-related.php'); ?>
			</article>
		</div>
		<div class="grid_8 omega">
			<article class="teaser <? dummy("text@bt-main-categories") ?> font-4">
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
				<?php include('includes/teaser-related.php'); ?>
			</article>
		</div>


		
		<div class="grid_8 alpha">
			<article class="teaser  <? dummy("text@bt-main-categories") ?> font-4">
				<figure>
					<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
				</figure>
				<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
				<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				
			</article>
		</div>
		<div class="grid_8 omega">
			<article class="teaser  <? dummy("text@bt-main-categories") ?> font-4">
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
		
		<article class="teaser teaser-tipbt">
			Ved du noget?
			<button class="btn btn-news">Send tip <i class="icon-right-open"></i></button> Sms 1929
		</article>

		<aside class="teaser-social">
			Følg BT 
			<button class="btn btn-facebook"><i class="icon-facebook"></i> Facebook</button>
			<button class="btn btn-twitter"><i class="icon-twitter"></i> Twitter</button>
		</aside>
		<article class="teaser teaser-editorial teaser-regular ">
			<span class="editorial-tag">mener:</span>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline") ?></a>
			</h1>
		</article>
	</div>
</div>
<div class="ro w">
	<div class="grid_24">
		<div class="banner mb-40 mt-40">
			<? dummy("ad@940x180") ?>
		</div>
	</div>
</div>