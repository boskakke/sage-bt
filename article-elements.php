
<? require_once("../dummy/dummy.php") ?>

<?php $image_size = rand(0,1);
	
?>

<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="UTF-8">
	<title>Article - BT.dk</title>
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
				
				

				


				
				
					<h3 class="demo">Large slider <small>bt.dk > article > imagesize > large</small></h3>
		
					<?php include('includes/article-slider.php'); ?>
						
					<h3 class="demo">Large image</h3>

					<figure class="article-image">
						
						<img data-original="<? dummy("image@940x,16:9") ?>" class="lazy" width="940" height="" alt="" />
						<figcaption class="image-caption"><? dummy("text@teaser") ?> <span class="caption-photo">Foto: <? dummy("text@author") ?></span></figcaption>
						<a href="#" class="image-overlay" title="Se stort billede"><i class="icon-resize-full"></i></a>
					</figure>
		
				
				

			</div>
		

		<div class="r ow">

		<div class="grid_16">
			
		
					<h3 class="demo">Small slider <small>bt.dk > article > imagesize > large</small></h3>
					<?php include('includes/article-slider-small.php'); ?>
					
					<h3 class="demo">Default image</h3>
					<figure class="article-image">
						<a href="#" class="image-overlay" title="Se stort billede"><i class="icon-resize-full"></i></a>
						<img data-original="<? dummy("image@620x,16:9") ?>" class="lazy" width="620" height="" alt="" />
						<figcaption class="image-caption"><? dummy("text@teaser") ?> <span class="caption-photo">Foto: <? dummy("text@author") ?></span></figcaption>
					</figure>
		

			
			<div class="grid_16 alpha article-content">
				
				<h3 class="demo"> Summary <small>First paragraph is always bold from css. So just display in a regular <code>P</code>-tag</small></h3>
				<p><? dummy("text@paragraph") ?></p>

				<? while (dumb_luck("1-3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>

				<div class="article-embedded-link">
					<strong>Læs også:</strong> <a href="article.php"><? dummy("text@headline") ?></a>
				</div>
				<? while (dumb_luck("1-3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>

				<h3 class="demo">Poll</h3>
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
				
				<h3 class="demo">Embedded image <small>Show embedded images in natural ratio</small></h3>
				<figure class="article-image">
					<img src="<? dummy("image@620x,") ?>" width="" height="" alt="" />
					<figcaption class="image-caption"><? dummy("text@teaser") ?> <span class="caption-photo">Foto: <? dummy("text@author") ?></span></figcaption>
				</figure>

				

			</div>


		</div>

		<div class="grid_8">

			<h3 class="demo">Fact box </h3>
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

			
			
			
			
			
		</div>

			
		</div>
	</article>	
		
	
	
	
	

	

	
	

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