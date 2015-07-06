<section class="live-ticker" id="live-ticker">
		<div class="banner">
			<? dummy("ad@300x250") ?>
		</div>
			<h1>LIGE NU <span>Jourhavende: <? dummy("text@author") ?></span></h1>
			<ul>
				<? while (dumb_luck("10")): ?>
				<li>
					<time><? dummy("text@time-ago-bt") ?></time>
					<? if (dumb_luck("20%")): ?><a href="article.php"><img src="<? dummy("image@250x,16:9") ?>"  width="" height="" alt="" /></a><? endif ?>
					<h2><a href="article.php"><? dummy("text@headline") ?></a></h2>
					<? if (dumb_luck("50%")): ?><p><? dummy("text@short-teaser") ?></p><? endif ?>
				</li>
				<? endwhile ?>
			</ul>

			<div class="module-padding">
				<button class="btn btn-news">Hent flere</button>
			</div>
		</section>