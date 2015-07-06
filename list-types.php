
<? require_once("../dummy/dummy.php") ?>


<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="UTF-8">
	<title>List types - BT.dk</title>
	<?php include('includes/head.php'); ?>
</head>
<body>
<?php include('includes/testmenu.php'); ?>









<div class="container_24">

	<div class="grid_24">
		<h1 class="demo">
			List and Box types
		</h1>
	</div>

	

<div class="grid_24">
		<h2 class="demo">
			Lists types
		</h2>
		<p> <code>list-border</code> is optional on all list types
	</div>
	
	<div class="grid_8">
	<h3 class="demo">
		.list .list-top
	</h3>
		<ul class="list list-top">
				<? while (dumb_luck("5")): ?>
				<li class="teaser">
					<div class="list-body">
						<a href="article.php" class="header"><? dummy("text@headline-bt") ?></a>
					</div>
				</li>
				<? endwhile ?>
			</ul>
	</div>

	<div class="grid_8">
	<h3 class="demo">
		.list .list-border .list-top
	</h3>
		<ul class="list list-border list-top">
				<? while (dumb_luck("5")): ?>
				<li class="teaser">
					<div class="list-body">
						
						<a href="article.php" class="header"><? dummy("text@headline-bt") ?></a>
					</div>
				</li>
				<? endwhile ?>
			</ul>
	</div>

	<div class="grid_8">
	<h3 class="demo">
		.list .list-time .list-border
	</h3>
		<ul class="list list-border list-time">
				<? while (dumb_luck("5")): ?>
				<li class="teaser">
					<div class="list-body">
						<time><? dummy("text@time") ?></time>
						<a href="article.php" class="header"><? dummy("text@headline") ?></a>
					</div>
				</li>
				<? endwhile ?>
			</ul>
	</div>

	
	

	<div class="grid_24">
		<h2 class="demo">Box types</h2>	
			The content of a box can contain various lists. All boxes use "<code>box standard</code>" from Bond - combined with a css class '<code>box-theme-X</code>' in the css class field
		
	</div>
		

	<div class="grid_8">
		<h3 class="demo">.box-theme-1</h3>

		<aside class="box box-theme-1">
			<h1 class="box-title">
				Mest læste
			</h1>
			<ul class="list list-border list-top">
				<? while (dumb_luck("7")): ?>
				<li class="teaser">
					<div class="list-body">
						
						<a href="article.php" class="header"><? dummy("text@headline-bt") ?></a>
					</div>
				</li>
				<? endwhile ?>
			</ul>
			
			
		</aside>


	</div>

	<div class="grid_8">
		<h3 class="demo">.box-theme-2</h3>
		<aside class="box box-theme-2">
			<h1 class="box-title">
				Hitter på Facebook
			</h1>
			<ul class="list list-top">
				<? while (dumb_luck("5")): ?>
				<li class="teaser">
					<div class="list-body">
						<a href="article.php" class="header"><? dummy("text@headline-bt") ?></a>
						<footer><i class="icon-thumbs-up"></i> <? dummy("text@number") ?></footer>
					</div>
				</li>
				<? endwhile ?>
			</ul>
			<button href="#" class="btn btn-facebook btn-lg btn-block">Like os på Facebook <i class="icon-thumbs-up"></i></button>
		</aside>

	</div>
	<div class="grid_8">
		<h3 class="demo">.box-theme-3</h3>
		<aside class="box box-theme-3">
						<h1 class="box-title">
							Liste
						</h1>
						<ul class="list list-time list-border">
							<? while (dumb_luck("5")): ?>
							<li class="teaser">
								<div class="list-body">
									<time><? dummy("text@time") ?></time>
									<a href="article.php" class="header"><? dummy("text@headline-bt") ?></a>
								</div>
							</li>
							<? endwhile ?>
						</ul>
						
					
							<div class="text-center deck-footer">
								<a href="#" class="load-more">Hent flere <i class="icon-down-dir"></i></a>
							</div>
				
					</aside>
	</div>
	
	<div class="grid_24">
		
	</div>
	<div class="grid_8">
		<h3 class="demo">.box-theme-4 .box-icon-video</h3>
		<aside class="box box-theme-4 box-icon-video">
			
				<h1 class="box-title">Mest sete TV</h1>
				<article class="teaser teaser-border ">
					<figure><a href="article.php"><img src="<? dummy("image@300x,16:9") ?>"  width="" height="" alt="" /></a></figure>

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

				
				<div class="text-center ">
					<a href="#" class="load-more">Hent flere <i class="icon-down-dir"></i></a>
				</div>
				
				
			</aside>
	</div>


	<div class="grid_8">
		<h3 class="demo">.box-theme-5</h3>
		<aside class="box box-theme-5 ">
			
				<h1 class="box-title">Seneste Gaffa</h1>
				<ul class="list list-border list-top">
				<? while (dumb_luck("7")): ?>
				<li class="teaser">
					<div class="list-body">
						
						<a href="article.php" class="header"><? dummy("text@headline") ?></a>
					</div>
				</li>
				<? endwhile ?>
			</ul>


				
				<div class="text-center ">
					<a href="#" class="load-more">Hent flere <i class="icon-down-dir"></i></a>
				</div>
				
				
			</aside>
	</div>

	

	<div class="grid_8">
		<h3 class="demo">.box-theme-6</h3>
		<aside class="box box-theme-6 ">
			
				<h1 class="box-title">Nyeste sport</h1>
				<ul class="list list-border list-time">
					<? while (dumb_luck("5")): ?>
					<li class="teaser">
						<div class="list-body">
							<time><? dummy("text@time") ?></time>
							<a href="article.php" class="header"><? dummy("text@headline") ?></a>
						</div>
					</li>
					<? endwhile ?>
				</ul>


				
				<div class="text-center ">
					<a href="#" class="load-more">Hent flere <i class="icon-down-dir"></i></a>
				</div>
				
				
			</aside>
	</div>



	
	

</div>


<?php include('includes/main-footer.php'); ?>
<?php include('includes/footer.php'); ?>

</body>
</html>