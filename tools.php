
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

<h1 class="demo">Misc css Tools</h1>
<p><code>.img-responsive </code>
	vertical-align: middle;
	max-width: 100%;
	height: auto;</p>

<p><code>.mb-0</code> 
	margin-bottom: 0!important</p>

<p><code>.mb-5 </code>
	margin-bottom: 5px;</p>

<p><code>.mb-10 </code>
	margin-bottom: 10px;</p>

<p><code>.mb-20 </code>
	margin-bottom: 20px!important;</p>

<p><code>.mb-40 </code>
	margin-bottom: 40px!important;</p>

<p><code>.mt-0 </code>
	margin-top: 0!important</p>

<p><code>.mt-20 </code>
	margin-top: 20px!important</p>

<p><code>.mt-40 </code>
	margin-top: 40px!important</p>


<p><code>.bb-20 </code>
	margin-bottom: 10px;<br>
	padding-bottom: 10px;<br>
	border-bottom: 1px solid #ddd;</p>


<h2 class="demo">Responsive grid</h2>

<p>I have made a small, percentage driven, nestable grid.</p>

<p>Nest all rows in a <code>.col-row</code></p>
<code><pre>
&lt;div="col-row"&gt;
	&lt;div class="col_6"&gt; 
		I'm a div
	&lt;/div&gt;

	&lt;div class="col_6"&gt; 
		I'm a div
	&lt;/div&gt;
&lt;/div&gt;
	</pre>
</code>

<div class="col-row testgrid">
	
	<div class="col_1"><span>.col_1</span></div>
	<div class="col_11"><span>.col_11</span></div>
	
	<div class="col_2"><span>.col_2</span></div>
	<div class="col_10"><span>.col_10</span></div>
	
	<div class="col_3"><span>.col_3</span></div>
	<div class="col_9"><span>.col_9</span></div>

	<div class="col_4"><span>.col_4</span></div>
	<div class="col_8"><span>.col_8</span></div>

	<div class="col_5"><span>.col_5</span></div>
	<div class="col_7"><span>.col_7</span></div>


	<div class="col_6"><span>.col_6</span></div>
	
	<div class="col_6">
		
		<div class="col-row">
			<div class="col_6"><span>Nested .col_6</span></div>
			<div class="col_6"><span>Nested .col_6</span></div>
		</div>

	</div>
	
</div>

<br><br><br><br><br><br>

</div>


<?php include('includes/main-footer.php'); ?>
<?php include('includes/footer.php'); ?>

</body>
</html>