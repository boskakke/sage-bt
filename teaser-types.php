
<? require_once("../dummy/dummy.php") ?>


<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="UTF-8">
	<title>Teaser types - BT.dk</title>
	<?php include('includes/head.php'); ?>
</head>
<body>
<?php include('includes/testmenu.php'); ?>









<div class="container_24">

<div class="grid_24">
	<h1 class="demo">
	Presentation tags: <small>Background colors</small>
</h1>
</div>

<div class="grid_24">
	<h3 class="demo">Tools</h3>

	<p><code>.nocat</code> Hides the category</p>

	<p><code>.teaser-regular</code> Shows header font in regular</p>

</div>

<div class="grid_24">
<h2 class="demo">
	Default
</h2>
</div>

<div class="row">
	<div class="grid_16 ">
		<article class="teaser cat-news font-2 ">
			<figure>
				
				<a href="article.php"><img src="<? dummy("image@620x,16:9") ?>" width="620" alt="" /></a>
			</figure>
			<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
	</div>	
	<div class="grid_8">
		<article class="teaser cat-news font-3 ">
			<figure>
				
				<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" alt="" /></a>
			</figure>
			<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
		<article class="teaser cat-news font-3 teaser-noimage">
			
			<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
	</div>
</div>

<div class="grid_24">
<h2 class="demo">
	.teaser-breaking 
	<small>(Remember tag if teaser has image)</small>
</h2>
</div>

<div class="row">
	<div class="grid_16 ">
		<article class="teaser cat-news font-2 teaser-breaking">
			<figure>
				<span class="teaser-tag-breaking">Breaking</span>
				<a href="article.php"><img src="<? dummy("image@620x,16:9") ?>" width="620" alt="" /></a>
			</figure>
			<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
	</div>	
	<div class="grid_8">
		<article class="teaser cat-news font-3 teaser-breaking">
			<figure>
				<span class="teaser-tag-breaking">Breaking</span>
				<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" alt="" /></a>
			</figure>
			<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
		<article class="teaser cat-news font-3 teaser-breaking teaser-noimage">
			
			<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
	</div>
</div>

<div class="grid_24">
	
<h2 class="demo">
	<small>.teaser-black</small>
</h2>
</div>

<div class="row">
	<div class="grid_16 ">
		<article class="teaser cat-news font-2 teaser-black">
			<figure>
				
				<a href="article.php"><img src="<? dummy("image@620x,16:9") ?>" width="620" alt="" /></a>
			</figure>
			<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
	</div>	
	<div class="grid_8">
		<article class="teaser cat-news font-3 teaser-black">
			<figure>
				
				<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" alt="" /></a>
			</figure>
			<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
		<article class="teaser cat-news font-3 teaser-black teaser-noimage">
			
			<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
	</div>
</div>
<div class="grid_24">
<h2 class="demo">
	<small>.teaser-news</small>
</h2>
</div>

<div class="row">
	<div class="grid_16 ">
		<article class="teaser cat-news font-2 teaser-news">
			<figure>
				
				<a href="article.php"><img src="<? dummy("image@620x,16:9") ?>" width="620" alt="" /></a>
			</figure>
			<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
	</div>	
	<div class="grid_8">
		<article class="teaser cat-news font-3 teaser-news">
			<figure>
				
				<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" alt="" /></a>
			</figure>
			<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
		<article class="teaser cat-news font-3 teaser-news teaser-noimage">
			
			<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
	</div>
</div>

<div class="grid_24">
<h2 class="demo">
	<small>.teaser-entertainment</small>
</h2>
</div>

<div class="row">
	<div class="grid_16 ">
		<article class="teaser cat-news font-2 teaser-entertainment">
			<figure>
				
				<a href="article.php"><img src="<? dummy("image@620x,16:9") ?>" width="620" alt="" /></a>
			</figure>
			<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
	</div>	
	<div class="grid_8">
		<article class="teaser cat-news font-3 teaser-entertainment">
			<figure>
				
				<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" alt="" /></a>
			</figure>
			<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
		<article class="teaser cat-news font-3 teaser-entertainment teaser-noimage">
			
			<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
	</div>
</div>

<div class="grid_24">
<h2 class="demo">
	<small>.teaser-sport</small>
</h2>
</div>

<div class="row">
	<div class="grid_16 ">
		<article class="teaser cat-news font-2 teaser-sport">
			<figure>
				
				<a href="article.php"><img src="<? dummy("image@620x,16:9") ?>" width="620" alt="" /></a>
			</figure>
			<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
	</div>	
	<div class="grid_8">
		<article class="teaser cat-news font-3 teaser-sport">
			<figure>
				
				<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" alt="" /></a>
			</figure>
			<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
		<article class="teaser cat-news font-3 teaser-sport teaser-noimage">
			
			<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
	</div>
</div>

<div class="grid_24">
<h2 class="demo">
	<small>.teaser-health</small>
</h2>
</div>

<div class="row">
	<div class="grid_16 ">
		<article class="teaser cat-news font-2 teaser-health">
			<figure>
				
				<a href="article.php"><img src="<? dummy("image@620x,16:9") ?>" width="620" alt="" /></a>
			</figure>
			<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
	</div>	
	<div class="grid_8">
		<article class="teaser cat-news font-3 teaser-health">
			<figure>
				
				<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" alt="" /></a>
			</figure>
			<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
		<article class="teaser cat-news font-3 teaser-health teaser-noimage">
			
			<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
	</div>
</div>

<div class="grid_24">
<h2 class="demo">
	<small>.teaser-consumer</small>
</h2>
</div>

<div class="row">
	<div class="grid_16 ">
		<article class="teaser cat-news font-2 teaser-consumer">
			<figure>
				
				<a href="article.php"><img src="<? dummy("image@620x,16:9") ?>" width="620" alt="" /></a>
			</figure>
			<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
	</div>	
	<div class="grid_8">
		<article class="teaser cat-news font-3 teaser-consumer">
			<figure>
				
				<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" alt="" /></a>
			</figure>
			<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
		<article class="teaser cat-news font-3 teaser-consumer teaser-noimage">
			
			<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
	</div>
</div>


<div class="grid_24">
<h2 class="demo">
	<small>.teaser-plus</small>
</h2>
</div>

<div class="row">
	<div class="grid_16 ">
		<article class="teaser cat-news font-2 teaser-plus">
			<figure>
				
				<a href="article.php"><img src="<? dummy("image@620x,16:9") ?>" width="620" alt="" /></a>
			</figure>
			<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
	</div>	
	<div class="grid_8">
		<article class="teaser cat-news font-3 teaser-plus">
			<figure>
				
				<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" alt="" /></a>
			</figure>
			<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
		<article class="teaser cat-news font-3 teaser-plus teaser-noimage">
			
			<a href="section.php" class="category"><? dummy("text@bt-sub-categories") ?></a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
	</div>
</div>


<div class="grid_24">
	
<h2 class="demo">
	<small>.teaser-sport</small>
</h2>
</div>

<div class="row">
	<div class="grid_16 ">
		<article class="teaser cat-sport font-2 teaser-sport">
			<figure>
				
				<a href="article.php"><img src="<? dummy("image/!sport@620x,16:9") ?>" width="620" alt="" /></a>
			</figure>
			<a href="section.php" class="category">Superliga</a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
	</div>	
	<div class="grid_8">
		<article class="teaser cat-news font-3 teaser-sport">
			<figure>
				
				<a href="article.php"><img src="<? dummy("image/!sport@300x,16:9") ?>" width="300" alt="" /></a>
			</figure>
			<a href="section.php" class="category">Superliga</a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
		<article class="teaser cat-news font-3 teaser-sport teaser-noimage">
			
			<a href="section.php" class="category">Superliga</a>
			<h1 class="header">
				<a href="article.php"><? dummy("text@headline-bt") ?></a>
			</h1>
			
		</article>
	</div>
</div>

	
		

<div class="grid_24">
	<h1 class="demo">Oneliners</h1>
	<h2 class="demo">
		<small>.teaser-oneliner-breaking</small>
	</h2>
</div>
<div class="grid_24">
	<article class="teaser-oneliner-breaking">
				<a href="article.php"><i class="icon-attention-alt blink"></i> <span>Breaking</span> <? dummy("text@headline-bt") ?></a>
			</article>
			
	<h2 class="demo">
	<small>.teaser-oneliner-comingup</small>
</h3>
			<article class="teaser-oneliner-comingup">
				<a href="article.php"><i class="icon-dot-circled blink"></i> <span>Opdateres</span> <? dummy("text@headline-bt") ?></a>
			</article>

			<h2 class="demo">
	
	<small>.teaser-oneliner-comingup ("live")</small>
	
</h3>

			<article class="teaser-oneliner-comingup">
				<a href="article.php"><i class="icon-dot-circled blink"></i> <span>Live</span> <? dummy("text@headline-bt") ?></a>
			</article>
			<h2 class="demo">

	<small>.teaser-oneliner-live-sport</small>
</h3>

			<article class="teaser-oneliner-live-sport">
				<a href="article.php"><i class="icon-dot-circled blink"></i> <span>Live</span> <? dummy("text@headline-bt") ?></a>
			</article>
</div>	

<div class="grid_24">
	<h1 class="demo">Teaser tags</h1>
</div>

<div class="grid_24">
	<h2 class="demo">
		Breaking-tag
	</h2>
</div>
<div class="grid_16 ">
	<article class="teaser cat-news font-2 teaser-breaking">
		<figure>
			<a href="article.php">
			<span class="teaser-tag-breaking">Breaking</span>
			<img src="<? dummy("image@620x,16:9") ?>" width="620" alt="" /></a>
		</figure>
		<a href="section.php" class="category">Krimi</a>
		<h1 class="header">
		
		<a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
		
	</article>
</div>	
<div class="grid_8">
	<article class="teaser cat-news font-3 teaser-breaking">
		<figure>
			<a href="article.php">
			<span class="teaser-tag-breaking">Breaking</span>
			<img src="<? dummy("image@300x,16:9") ?>" width="620" alt="" /></a>
		</figure>
		<a href="section.php" class="category">Krimi</a>
		<h1 class="header">
		
		<a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
		
	</article>
</div>

<div class="grid_24">
	<h2 class="demo">
		Coming up-tag
	</h2>
</div>

<div class="grid_16 ">
	<article class="teaser cat-news font-2">
		<figure>
			<a href="article.php">
			<span class="teaser-tag-live"><i class="icon-dot-circled blink"></i> Opdateres...</span>
			<img src="<? dummy("image@620x,16:9") ?>" width="620" alt="" /></a>
		</figure>
		<a href="section.php" class="category">Krimi</a>
		<h1 class="header">
		
		<a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
		
	</article>
</div>	

<div class="grid_8 ">
	<article class="teaser cat-news font-3">
		<figure>
			<a href="article.php">
			<span class="teaser-tag-live"><i class="icon-dot-circled blink"></i> Opdateres...</span>
			<img src="<? dummy("image@620x,16:9") ?>" width="300" alt="" /></a>
		</figure>
		<a href="section.php" class="category">Krimi</a>
		<h1 class="header">
		
		<a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
		
	</article>
</div>	



<div class="grid_24">
	<h2 class="demo">
		Live-tag
	</h2>
</div>
<div class="grid_16 ">
	<article class="teaser cat-news font-2">
		<figure>
			<span class="teaser-tag-live"><i class="icon-dot-circled blink"></i> Live</span>
			<a href="article.php"><img src="<? dummy("image@620x,16:9") ?>" width="620" alt="" /></a>
		</figure>
		<a href="section.php" class="category">Krimi</a>
		<h1 class="header">
		<a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
		
	</article>
</div>	
<div class="grid_8">
	
	<article class="teaser cat-news font-3">
		<figure>
			<span class="teaser-tag-live"><i class="icon-dot-circled blink"></i> Live</span>
			<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" alt="" /></a>
		</figure>
		<a href="section.php" class="category">Krimi</a>
		<h1 class="header">
		<a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
		
	</article>

</div>

<div class="grid_24">
	<h2 class="demo">
		Tip-tag
	</h2>
</div>
<div class="grid_16 ">
	<article class="teaser cat-news font-2">
		<figure>
			<a href="article.php"><img src="<? dummy("image@620x,16:9") ?>" width="620" alt="" /></a>
		</figure>
		<a href="section.php" class="category">Krimi</a>
		<span class="teaser-tag-tip"><b>Tip BT</b>  SMS 1929</span>
		<h1 class="header">

		<a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
		
	</article>
</div>	
<div class="grid_8">
	
	<article class="teaser cat-news font-3">
		<figure>
			
			<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" alt="" /></a>
		</figure>
		<a href="section.php" class="category">Krimi</a>
		<span class="teaser-tag-tip"><b>Tip BT</b>  SMS 1929</span>
		<h1 class="header">
		<a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
		
	</article>

</div>

<div class="grid_24">
	<h2 class="demo">
		Live-tag when article category is "sport"
	</h2>
</div>

<div class="grid_16 ">
	<article class="teaser cat-sport font-2">
		<figure>
			<span class="teaser-tag-live"><i class="icon-dot-circled blink"></i> Live</span>
			<a href="article.php"><img src="<? dummy("image@620x,16:9") ?>" width="620" alt="" /></a>
		</figure>
		<a href="section.php" class="category">Superliga</a>
		<h1 class="header">
			<a href="article.php"><? dummy("text@headline-bt") ?></a>
		</h1>
		
	</article>

</div>	
<div class="grid_8">
		<article class="teaser cat-sport font-3">
		<figure>
			<span class="teaser-tag-live"><i class="icon-dot-circled blink"></i> Live</span>
			<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" alt="" /></a>
		</figure>
		<a href="section.php" class="category">Superliga</a>
		<h1 class="header">
			<a href="article.php"><? dummy("text@headline-bt") ?></a>
		</h1>
		
	</article>
</div>



<div class="grid_24">
	<h2 class="demo">
		Consumer sales <small>(note "teaser-regular" to make font less bold)</small>
	</h2>
</div>
	

<div class="grid_8">
	<article class="teaser  teaser-regular cat-news font-4">
		<figure>
			<a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="300" height="168" alt="" /></a>
		</figure>
		<a href="section.php" class="category">BT Tilbud</a>
		<h1 class="header"><a href="article.php"><? dummy("text@headline-bt") ?></a></h1>
		
	</article>	
</div>

	

		

</div>


<?php include('includes/main-footer.php'); ?>
<?php include('includes/footer.php'); ?>

</body>
</html>