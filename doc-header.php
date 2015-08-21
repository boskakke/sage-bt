
<? require_once("../dummy/dummy.php") ?>

<?php $image_size = rand(0,1);
	
?>

<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="UTF-8">
	<title>Header - BT.dk</title>
	<?php include('includes/head.php'); ?>
</head>
<body>
<?php include('includes/testmenu.php'); ?>

<?php include('includes/sticky-menu.php'); ?>

<?php include('includes/topbanner.php'); ?>

<div class="container_24">
		<div class="grid_24">
			<h3 class="demo">Default</h3>
		</div>
		<div class="grid_24">
			<header class="site-header">
	
	<div class="header-top">
		<a href="frontpage.php" title="Til forsiden" class="logo"></a>
		<div class="marketing-banner">
			<a href="#"><strong>Sommertilbud</strong> Prøv BT hver dag i 3 mdr. <span>Klik her</span></a>
		</div>
		<a class="cookies" href="http://www.berlingskemedia.dk/cookie-og-privatlivspolitik/">Privatlivspolitik</a>
	</div>

	<nav>
		<ul class="nav-primary nav-left">
			<li class="menu-item"><a href="section.php">Nyheder</a></li>
			<li class="menu-item"><a href="section.php">Sport</a></li>
			<li class="menu-item menu-item-plus"><a href="section.php"><span>Prøv</span> PLUS</a></li>
			<li class="menu-item "><a href="section.php">BT TV</a></li>
			<li class="menu-item"><a href="#" class="toggle-sitemap">A - Å <i class="icon-down-dir"></i></a></li>
			<li class="menu-item site-search"><a href="#" class="toggle-search show-hide"><i class="icon-search"></i></a>

			<div class="search-form">
				<form action="">
					<input type="search" placeholder="Søg på BT" id="site-search">
					<button class="btn"><i class="icon-search"></i></button>
				</form>
			</div>

			</li>
		</ul>
		<ul class="nav-primary nav-right">
			<li class="site-login"><a href="#" class="show-hide">Log ind</a>
			<div class="login-form header-dropdown">
				<form action="">
					<div class="col-3">
						<label for="login-email">Email</label>
					</div>
					<div class="col-9">
						<input type="email" id="login-email">
					</div>
					<div class="col-3">
						<label for="login-password">Password:</label>
					</div>
					<div class="col-9">
						<input type="password" id="login-password">	
					</div>
					<div class="col-12">
						<label for="remember"><input name="remember_me" type="checkbox" id="remember" required="" checked> Husk mig</label>
					</div>
					
					<button class="btn-block btn btn-news">Log ind <i class="icon-angle-right"></i></button>
					<ul class="clean">
						<li><a href="#"><i class="icon-angle-right"></i> Glemt password</a></li>
						<li><a href="#"><i class="icon-angle-right"></i> Bliv oprettet</a></li>
					</ul>
				</form>
			</div>
			</li>
			<li class="send-tip"><a href="#">Tip os</a></li>
			<li class="follow-bt "><a href="#" class="show-hide"><span>Følg BT:</span> <i class="icon-facebook"></i> <i class="icon-twitter"></i></a>

			<div class="share-options header-dropdown">
				<h2>Følg BT</h2>
				<div>
				<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fditbt&amp;send=false&amp;layout=button_count&amp;width=148&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=182764648520454" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:160px; height:21px;" allowtransparency="true"></iframe>
				</div>
				<div>
				<a href="https://twitter.com/btdk" class="twitter-follow-button" data-show-count="false" data-lang="da" data-dnt="true">Følg @btdk</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</div>
			</div>
			</li>
			
			
		</ul>
	</nav>
	
			
		<?php include('includes/tip-form.php'); ?>


	<section class="header-sitemap" id="header-sitemap">
		
			<h1>Alt indhold på BT.dk</h1>
			<span class="close-layer"><i class="icon-cancel"></i></span>
		
		<div class="col-row">
			<div class="col_2">
					<h2 class="sitemap-header-news"><a href="section.php">Nyheder</a></h2>
					<ul class="sitemap">
						<? while (dumb_luck("10-14")): ?>
							<li><a href="section.php"><? dummy("text@item") ?></a></li>
						<? endwhile ?>
					</ul>
				</div>
				<div class="col_2">
					<h2 class="sitemap-header-sport"><a href="section.php">Sport</a></h2>
					<ul class="sitemap">
						<? while (dumb_luck("10-14")): ?>
							<li><a href="section.php"><? dummy("text@item") ?></a></li>
						<? endwhile ?>
					</ul>
				</div>
				<div class="col_2">
					<h2 class="sitemap-header-entertainment"><a href="section.php">Underholdning</a></h2>
					<ul class="sitemap">
						<? while (dumb_luck("10-14")): ?>
							<li><a href="section.php"><? dummy("text@item") ?></a></li>
						<? endwhile ?>
					</ul>
				</div>
				<div class="col_2">
					<h2 class="sitemap-header-health"><a href="section.php">Sundhed</a></h2>
					<ul class="sitemap">
						<? while (dumb_luck("10-14")): ?>
							<li><a href="section.php"><? dummy("text@item") ?></a></li>
						<? endwhile ?>
					</ul>
				</div>
				<div class="col_2">
					<h2 class="sitemap-header-consumer"><a href="section.php">Forbrug</a></h2>
					<ul class="sitemap">
						<? while (dumb_luck("10-14")): ?>
							<li><a href="section.php"><? dummy("text@item") ?></a></li>
						<? endwhile ?>
					</ul>
				</div>
				<div class="col_2">
					<h2 class="sitemap-header-plus"><a href="section.php">Plus</a></h2>
					<ul class="sitemap">
						<? while (dumb_luck("10-14")): ?>
							<li><a href="section.php"><? dummy("text@item") ?></a></li>
						<? endwhile ?>
					</ul>
				</div>
			</div>
	</section>
	
</header>






		</div>

		<div class="grid_24">
			<h3 class="demo">Logged in</h3>

		</div>
		<div class="grid_24">
			<header class="site-header">
	
	<div class="header-top">
		<a href="frontpage.php" title="Til forsiden" class="logo"></a>
		<div class="marketing-banner">
			<a href="#"><strong>Sommertilbud</strong> Prøv BT hver dag i 3 mdr. <span>Klik her</span></a>
		</div>
		<a class="cookies" href="http://www.berlingskemedia.dk/cookie-og-privatlivspolitik/">Privatlivspolitik</a>
	</div>

	<nav>
		<ul class="nav-primary nav-left">
			<li class="menu-item"><a href="section.php">Nyheder</a></li>
			<li class="menu-item"><a href="section.php">Sport</a></li>
			<li class="menu-item menu-item-plus"><a href="section.php"><span>Prøv</span> PLUS</a></li>
			<li class="menu-item "><a href="section.php">BT TV</a></li>
			<li class="menu-item"><a href="#" class="toggle-sitemap">A - Å <i class="icon-down-dir"></i></a></li>
			<li class="menu-item site-search"><a href="#" class="toggle-search show-hide"><i class="icon-search"></i></a>

			<div class="search-form">
				<form action="">
					<input type="search" placeholder="Søg på BT" id="site-search">
					<button class="btn"><i class="icon-search"></i></button>
				</form>
			</div>

			</li>
		</ul>
		<ul class="nav-primary nav-right">
			<li class="site-login logged-in"><a href="#" class="show-hide">Kevin Walsh <i class="icon-angle-down"></i></a>
			<div class="login-form header-dropdown">
				
					<p>Velkommen Kevin Walsh</p>
					<ul class="list">
						<li>
							<button class="btn-block btn btn-news">Din profil <i class="icon-angle-right"></i></button>		
						</li>
						<li>
							<button class="btn-block btn btn-news">Log ud <i class="icon-angle-right"></i></button>		
						</li>
					</ul>
					
					
					
					
				
			</div>
			</li>
			<li class="send-tip"><a href="#">Tip os</a></li>
			<li class="follow-bt "><a href="#" class="show-hide"><span>Følg BT:</span> <i class="icon-facebook"></i> <i class="icon-twitter"></i></a>

			<div class="share-options header-dropdown">
				<h2>Følg BT</h2>
				<div>
				<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fditbt&amp;send=false&amp;layout=button_count&amp;width=148&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=182764648520454" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:160px; height:21px;" allowtransparency="true"></iframe>
				</div>
				<div>
				<a href="https://twitter.com/btdk" class="twitter-follow-button" data-show-count="false" data-lang="da" data-dnt="true">Følg @btdk</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</div>
			</div>
			</li>
			
			
		</ul>
	</nav>
	
			
		<?php include('includes/tip-form.php'); ?>


	<section class="header-sitemap" id="header-sitemap">
		
			<h1>Alt indhold på BT.dk</h1>
			<span class="close-layer"><i class="icon-cancel"></i></span>
		
		<div class="col-row">
			<div class="col_2">
					<h2 class="sitemap-header-news"><a href="section.php">Nyheder</a></h2>
					<ul class="sitemap">
						<? while (dumb_luck("10-14")): ?>
							<li><a href="section.php"><? dummy("text@item") ?></a></li>
						<? endwhile ?>
					</ul>
				</div>
				<div class="col_2">
					<h2 class="sitemap-header-sport"><a href="section.php">Sport</a></h2>
					<ul class="sitemap">
						<? while (dumb_luck("10-14")): ?>
							<li><a href="section.php"><? dummy("text@item") ?></a></li>
						<? endwhile ?>
					</ul>
				</div>
				<div class="col_2">
					<h2 class="sitemap-header-entertainment"><a href="section.php">Underholdning</a></h2>
					<ul class="sitemap">
						<? while (dumb_luck("10-14")): ?>
							<li><a href="section.php"><? dummy("text@item") ?></a></li>
						<? endwhile ?>
					</ul>
				</div>
				<div class="col_2">
					<h2 class="sitemap-header-health"><a href="section.php">Sundhed</a></h2>
					<ul class="sitemap">
						<? while (dumb_luck("10-14")): ?>
							<li><a href="section.php"><? dummy("text@item") ?></a></li>
						<? endwhile ?>
					</ul>
				</div>
				<div class="col_2">
					<h2 class="sitemap-header-consumer"><a href="section.php">Forbrug</a></h2>
					<ul class="sitemap">
						<? while (dumb_luck("10-14")): ?>
							<li><a href="section.php"><? dummy("text@item") ?></a></li>
						<? endwhile ?>
					</ul>
				</div>
				<div class="col_2">
					<h2 class="sitemap-header-plus"><a href="section.php">Plus</a></h2>
					<ul class="sitemap">
						<? while (dumb_luck("10-14")): ?>
							<li><a href="section.php"><? dummy("text@item") ?></a></li>
						<? endwhile ?>
					</ul>
				</div>
			</div>
	</section>
	
</header>






		</div>
	


</div>



<?php include('includes/footer.php'); ?>



</body>
</html>