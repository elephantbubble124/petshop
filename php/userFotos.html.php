<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
	<head>
		<title>Fotos</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body >
		<div class="container">
			<div id = "welcome">
				<h1>Derek's Fotos</h1>
			</div>
				<ul class="pb-strip">
					<?php foreach ($Fotos as $Foto): ?>
						<li><img src="images/<?php echo $Foto['FotoName']; ?>" /></li>
						<?php echo $Foto['FotoName']; ?>
					<?php endforeach; ?>
				</ul>
			</div>
	</body>
	
</html>