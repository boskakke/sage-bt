<?php $breaking = rand(0,1); ?>

<div class="menu-sticky <?php if($breaking == '1'): ?> sticky-breaking <?php endif; ?>" id="menussticky">
	<div class="container-wide">
		<a href="frontpage.php" title="Til forsiden" class="branding"></a>
		<div class="teaser teaser-sticky">
			<h3 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h3>	
		</div>
	</div>
</div>
