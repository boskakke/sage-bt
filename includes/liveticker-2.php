<section class="live-ticker-2" id="live-ticker">
		<div class="banner">
			<? dummy("ad@300x250") ?>
		</div>
			<h1>LIGE NU <span>Jourhavende: <? dummy("text@author") ?></span></h1>
			<ul>
				<? while (dumb_luck("5")): ?>
				<? if (dumb_luck("10%")): ?><li class="liveticker-live-sport"><? else: ?>
					<? if (dumb_luck("10%")): ?><li class="liveticker-breaking"><? else: ?>
						<? if (dumb_luck("10%")): ?><li class="liveticker-live"><? else: ?>
							<? if (dumb_luck("10%")): ?><li class="liveticker-comingup"><? else: ?>
	
							<li><? endif ?><? endif ?><? endif ?><? endif ?>
					<time><? dummy("text@time") ?></time>
					
					<h2><a href="article.php"><? dummy("text@headline") ?></a></h2>
					
					
				</li>
				<? endwhile ?>
			</ul>

			<div class="module-padding text-center">
				<button class="btn btn-news btn-block">Hent flere <i class="icon-down-dir"></i></button>
			</div>
		</section>