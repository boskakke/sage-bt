
<? require_once("../dummy/dummy.php") ?>

<?php $image_size = rand(0,1);
	
?>

<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="UTF-8">
	<title>BT.dk</title>
	<?php include('includes/head.php'); ?>
</head>
<body>
<?php include('includes/testmenu.php'); ?>

<?php include('includes/sticky-menu.php'); ?>

<?php include('includes/topbanner.php'); ?>

<div class="container_24">
	
		<div class="grid_24">
			<?php include('includes/main-header.php'); ?>
		</div>
	

	<article class="<? dummy("text@bt-main-categories") ?>">
		<div class="r ow">
			<div class="grid_24">
				
				<header class="article-header">
					<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
					<span class="article-date">
						<time>Onsdag d. <? dummy("text@date") ?> kl. <? dummy("text@time") ?> <? if (dumb_luck("50%")): ?>- <strong>Opdateret</strong> Onsdag d. <? dummy("text@date") ?> kl. <? dummy("text@time") ?><? endif ?></time>
					</span>

					<h1 itemprop="headline"><? dummy("text@headline") ?></h1>
					
					

					<div class="article-byline-container mb-20">
					<? while (dumb_luck("1-2")): ?>
						<div class="article-byline">
							<figure><img src="<? dummy("image/!author@35x,1:1") ?>" width="" height="" alt="" /></figure>
							<span class="article-author" itemprop="author" itemscope="" itemtype="http://schema.org/Person"><a href="#" itemprop="name"><? dummy("text@author") ?></a></span>
							<a href="#">Følg</a>
						</div>
					<? endwhile ?>
					</div>


					<div class="social-container">
						<button class="btn btn-lg btn-facebook"><i class="icon-facebook"></i> Del</button>
						<button class="btn btn-lg btn-twitter"><i class="icon-twitter"></i> Tweet</button>
						<button class="btn btn-lg btn-news"><i class="icon-comments"></i> Kommentarer</button>
						<button class="btn btn-lg btn-transparent"><i class="icon-print"></i> Print</button>
						<button class="btn btn-lg btn-transparent"><i class="icon-mail"></i> Send</button>
					</div>

					<div class="signup-form">
						<form action="">
							<input type="email" class="">
							<button class="btn btn-news">OK</button>
						</form>
					</div>
				</header>

				<div class="banner bb-20"><? dummy("ad@940x180") ?></div>


				
				
				<?php if($image_size == 0): ?>
					<? if (dumb_luck("50%")): ?>
					<?php include('includes/article-slider.php'); ?>
					<? else: ?>
					<figure class="article-image">
						
						<img data-original="<? dummy("image@940x,16:9") ?>" class="lazy" width="940" height="" alt="" />
						<figcaption class="image-caption"><? dummy("text@teaser") ?> <span class="caption-photo">Foto: <? dummy("text@author") ?></span></figcaption>
						<a href="#" class="image-overlay" title="Se stort billede"><i class="icon-resize-full"></i></a>
					</figure>
					<? endif ?>
				<?php endif; ?>
				
				

			</div>
		

		<div class="r ow">

		<div class="grid_16">
			
			<?php if($image_size == 1): ?>
				<? if (dumb_luck("50%")): ?>
					<?php include('includes/article-slider-small.php'); ?>
				<? else: ?>
					<figure class="article-image">
						<a href="#" class="image-overlay" title="Se stort billede"><i class="icon-resize-full"></i></a>
						<img data-original="<? dummy("image@620x,16:9") ?>" class="lazy" width="620" height="" alt="" />
						<figcaption class="image-caption"><? dummy("text@teaser") ?> <span class="caption-photo">Foto: <? dummy("text@author") ?></span></figcaption>
					</figure>
				<?php endif; ?>
			<?php endif; ?>

			<div class="grid_4 alpha">
				<div class="banner mb-20">
					<? dummy("ad@140x250") ?>
				</div>
				<div class="banner">
					<? dummy("ad@140x250") ?>
				</div>
			</div>
			<div class="grid_12 omega article-content">
				
				
				<? while (dumb_luck("1-3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>

				<div class="article-embedded-link">
					<strong>Læs også:</strong> <a href="article.php"><? dummy("text@headline") ?></a>
				</div>
				<? while (dumb_luck("1-3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>
				<aside class="box box-poll box-small box-theme-1">
					<h1 class="box-title">
						Afstemning
					</h1>
					<p><? dummy("text@short-teaser") ?></p>
					<form action="">
						
						<div class="form-item">
							<label><input type="radio" value="" name="vote"> <? dummy("text@item") ?></label>
						</div>
						<div class="form-item">
							<label><input type="radio" value="" name="vote"> <? dummy("text@item") ?></label>
						</div>
						
						<div class="text-center module-padding">
							<button class="btn-news btn">Stem</button>	
						</div>
						
						

					</form>

				</aside>
				<? while (dumb_luck("1-3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>

				<figure class="article-image">
					<img src="<? dummy("image@620x,") ?>" width="" height="" alt="" />
				</figure>

				

			</div>


		</div>

		<div class="grid_8">
			<aside class="article-fact mb-20">
				<h2 class="fact-header">Hvad er Bipolar</h2>
				<figure>
					<img src="<? dummy("image@300x,") ?>" width="" height="" alt="" />
				</figure>
				<? while (dumb_luck("1-2")): ?><p><? dummy("text@teaser") ?></p><? endwhile ?>
				<ul>
					<? while (dumb_luck("1-3")): ?>
					<li>
						<? dummy("text@item") ?>
					</li>
					<? endwhile ?>
				</ul>

				<ol>
					<? while (dumb_luck("1-3")): ?>
					<li>
						<? dummy("text@item") ?>
					</li>
					<? endwhile ?>
				</ol>
			</aside>

			<div class="banner mb-20">
				<? dummy("ad@300x250") ?>	
			</div>

			<aside class="box box-theme-1">
				<h1 class="box-title">
					Det læser andre
				</h1>
				<ul class="list list-top">
					<? while (dumb_luck("5")): ?>
					<li class="teaser">
						<div class="list-body">
							<a href="article.php" class="header"><? dummy("text@headline") ?></a>
							<footer><? dummy("text@number") ?> læser lige nu</footer>
						</div>
					</li>
					<? endwhile ?>
				</ul>
			
			</aside>
			<aside class="box box-theme-4 box-icon-video">
			
				<h1 class="box-title">Mest sete TV</h1>
				<article class="teaser teaser-border ">
					<figure><a href="article.php"><img data-original="<? dummy("image@300x,16:9") ?>" class="lazy" width="" height="" alt="" /></a></figure>

					<h3 class="header">
					<a href="#">
						<? dummy("text@headline") ?>
						</a>
					</h3>
				</article>
				<article class="teaser teaser-regular font-5 teaser-border">
					<h3 class="header">
					<a href="#">
						<? dummy("text@headline") ?>
						</a>
					</h3>
				</article>

				<article class="teaser teaser-regular font-5 teaser-border">
					<h3 class="header">
					<a href="#">
						<? dummy("text@headline") ?>
						</a>
					</h3>
				</article>

				<div class="text-center module-padding">
					<a href="#"  class="load-more">Se alle</a>
				</div>
				
			</aside>
			
			
			
		</div>

			
		</div>
	</article>	
		
	<div class="row">
		

		<div class="grid_24">
			<aside class="marketing-offer summer-offer">
				<p><a href="#"><span class="branding"></span><strong>Sommertilbud </strong>- Prøv BT hver dag i 3 måneder <span>Læs mere</span></a> </p>	
			</aside>
			
		</div>	
	</div>
	
	
	<div class="row">
	
	<div class="grid_16">
		<ul class="tabs">
			<li class="tab-active tab-teasers"><a href="#">Tophistorier</a></li>
			<li class="tab-comments"><span>Kommentarer <i class="comments-count"><? dummy("text@number") ?></i></span></li>
		</ul>
		
		<aside class="tab-content tab-content-teasers tab-content-active box box-theme-2 box-small-alt" id="tab-content-teasers">
		
			<ul class="teaser-list-300">
			<? while (dumb_luck("8")): ?>
				<li class="teaser teaser-img-left-100 font-6 teaser-regular <? dummy("text@bt-main-categories") ?> no-cat">
					<figure><a href="article.php"><img data-original="<? dummy("image@115x,16:9") ?>" class="lazy" width="" height="" alt="" /></a></figure>
					<div class="teaser-body">
						<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
						<h3 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h3>	
					</div>
				</li>	
			<? endwhile ?>
			</ul>
			
			<h1 class="box-title">Hitter på Facebook</h1>

			<ul class="teaser-list-300 list-top-cirle">
			<? while (dumb_luck("4")): ?>
				<li class="teaser  font-5 teaser-regular <? dummy("text@bt-main-categories") ?> no-cat">
					<figure><a href="article.php"><img data-original="<? dummy("image@300x,16:9") ?>" class="lazy" width="" height="" alt="" /></a></figure>
					<div class="teaser-body">
						<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
						<h3 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h3>	
						<footer><i class="icon-thumbs-up"></i> <? dummy("text@number") ?> likes</footer>
					</div>
				</li>	
			<? endwhile ?>
			</ul>

		</aside>
		<aside class="tab-content box box-theme-2 box-small-alt" id="tab-content-comments">
			<div id="disqus_thread"></div>		
		</aside>
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
	</div>
	
	</div>

	<div class="row">
		<div class="grid_24">
			<div class="banner mb-40">
				<? dummy("ad@940x180") ?>			
			</div>
		</div>
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

</div>


<?php include('includes/main-footer.php'); ?>
<?php include('includes/footer.php'); ?>

<script type="text/javascript">
    
    var disqus_shortname = 'btredesign';
    
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
</script>

</body>
</html>