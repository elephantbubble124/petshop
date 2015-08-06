<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
	<head>
		<title>Products</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body >
		<div class="container">
			<div id = "welcome">
				<h1>Products</h1>
			</div>
				<ul class="pb-strip">
					<?php foreach ($Products as $Product): ?>
						<li><img src="images/pet food/<?php echo $Product['image']; ?>" /></li>
						<?php echo $Product['cost']; ?><br/>
						<?php echo $Product['description']; ?>
					<?php endforeach; ?>
				</ul>
			</div>
	</body>
	
</html>