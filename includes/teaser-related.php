<? if (dumb_luck("50%")): ?>
<ul class="related-mega">
	<? while (dumb_luck("1-2")): ?>
	<li >
		<figure>
			<img src="<? dummy("image@80x,16:9") ?>" width="" height="" alt="" />
		</figure>
		<div class="teaser-body">
			<a href="article.php">
				<? dummy("text@headline") ?>
			</a>
		</div>
	</li>
	<? endwhile ?>
</ul>
<? endif ?>
<ul class="related list-inline">
	<? while (dumb_luck("1-3")): ?>
	<li><a href="article.php"><? dummy("text@headline") ?></a></li>
	<? endwhile ?>
</ul>