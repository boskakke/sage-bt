<section class="live-ticker-alt-2" id="live-ticker">
		<div class="banner">
			<? dummy("ad@300x250") ?>
		</div>
			<h1>LIVE <span>Jourhavende: <? dummy("text@author") ?></span></h1>
			<ul>
				<? while (dumb_luck("20")): ?>
				<li>
					<time><? dummy("text@time-ago-bt") ?></time>
					<h2><a href="article.php"><? dummy("text@headline") ?></a></h2>
					<? if (dumb_luck("20%")): ?><a href="article.php"><img src="<? dummy("image@250x,16:9") ?>" width="" height="" alt="" /></a><? endif ?>
					<p><? dummy("text@short-teaser") ?></p>
				</li>
				<? endwhile ?>
			</ul>
		</section>