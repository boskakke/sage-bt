<? if (dumb_luck("25%")): ?>

	
		<div class="grid_24">
			<article class="teaser-oneliner-breaking">
				<a href="article.php"><span>Breaking</span> <? dummy("text@headline-bt") ?></a>
			</article>			

		</div>
	
<? endif ?>
<div class="r ow">
	<div class="grid_24">
		<article class="teaser cat-news font-1 <? if (dumb_luck("50%")): ?>teaser-breaking<? endif ?> teaser-topstory">
			<figure>
				<a href="article.php"><img src="<? dummy("image@940x,16:7") ?>" width="" height="" alt=""  /></a>
			</figure>
			
				<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
				<h1 class="header">
					<a href="article.php"><? dummy("text@headline-bt") ?></a>
				</h1>
				<p><? dummy("text@teaser") ?></p>

				<ul class="related-mega">
					<? while (dumb_luck("1-3")): ?>
					<li >
						<figure>
							<img src="<? dummy("image@100x,16:9") ?>" width="" height="" alt="" />
						</figure>
						<div class="teaser-body">
							<a href="article.php">
								<? dummy("text@headline-bt") ?>
							</a>
						</div>
					</li>

					<? endwhile ?>

				</ul>
				<? if (dumb_luck("50%")): ?>
				<ul class="related list-inline">
					<? while (dumb_luck("2-5")): ?>
					<li><a href="article.php"><? dummy("text@headline-bt") ?></a></li>
					<? endwhile ?>
				</ul>
				<? endif ?>
		</article>
	</div>
	
</div>

<div class="ro w">
	<div class="grid_16" id="topdeck">
		
		<article class="teaser teaser-noimage teaser-noimage-breaking  font-2 <? dummy("text@bt-main-categories") ?>">
				<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
				<h1 class="header">
					<a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				</h1>
				<?php include('includes/teaser-related.php'); ?>
		</article>

					
	
	<article class="teaser cat-news font-2">
		<figure>
			<a href="article.php"><img src="<? dummy("image@620x,16:9") ?>" width="620" alt="" /></a>
		</figure>
		<a href="section.php" class="category">Krimi</a>
		<h1 class="header">
		<a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
		
	</article>



		<div class="grid_8 alpha">
			<article class="teaser  <? dummy("text@bt-main-categories") ?> font-3">
				<figure>
					<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
				</figure>
				<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
				<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				<?php // include('includes/teaser-related.php'); ?>
			</article>
		</div>
		<div class="grid_8 omega">
			<article class="teaser <? dummy("text@bt-main-categories") ?> font-3">
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
			<article class="teaser teaser-noimage font-2 <? dummy("text@bt-main-categories") ?>">
				<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
				<h1 class="header">
					<a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				</h1>
				<?php include('includes/teaser-related.php'); ?>
			</article>
		</div>


		
		<div class="grid_8 alpha">
			<article class="teaser  <? dummy("text@bt-main-categories") ?> font-3">
				<figure>
					<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
				</figure>
				<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
				<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				
			</article>
		</div>
		<div class="grid_8 omega">
			<article class="teaser  <? dummy("text@bt-main-categories") ?> font-3">
				<figure>
					<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
				</figure>
				<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
				<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
				
			</article>
		</div>
		
		

	
	</div>
	<div class="grid_8">
		<?php include('includes/liveticker-2.php') ?>
		
		

		
		<article class="teaser teaser-editorial font-3">
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
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