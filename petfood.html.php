<!DOCTYPE html>
<html>
	<head>
		<title>
		Pet Food
		</title>
		<link rel="stylesheet" href="stylesheet.css" type="text/css">
		<meta name="viewport" content="width=device-width, inital-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		
		<div id = "banner">
			
			

				<div id = "leftnavimg" >
					<img src="images/cat.jpg" alt = "cat" width = "116" height = "109" />
				</div>
				
				<div id = "midnav" >
				
					<h1>Pet Food</h1>
				
				</div>

				<div id = "rightnavimg">
					<img src="images/dog.jpg" alt = "dog" width = "116" height = "109" />
				</div>
				
				
				
		</div>
		
		
		
		
	</head>
	<body>
	
	<div class="navbar-static-top navbar-inverse" id="home">
		<div class="container">
			<div class="navbar-brand">
				<a href="index.html"> Pet Shop Supplies </a>				
			</div>				
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
				Menu
			</button>		
			<div class="collapse navbar-collapse navHeaderCollapse">	
				<ul class="nav navbar-nav navbar-right">	
					<li><a href = "about.html">About</a></li>
					<li><a href = "petfood.html">Pet Food</a></li>
					<li><a href = "pets.html">Pets</a></li>			
				</ul>	
			</div>	
		</div>	
	</div>
	
	<div class="jumbotron">
		<div class="container">
			<h1>Pet Shop Supplies</h1>
			<p>Please select a Pet and make a home for your new friend!</p>
			<p>Pet Shop Supplies also supplies Pet products and Accessories</p>
			<p><a href="link to database" class="btn btn-primary btn-lg">Click here to purchase!</a></p>
			
	</div>
	
	
	
	
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
	
		
			
					
			
				<h1>Pet Food</h1>
				<p>Please select pet food from our vast and variety filled range.</p>
				
	<div class="alt1 padding" id="PetFood">		
	<div class="container">
		<?php foreach ($Products as $Product): ?>
		<div class="row padding" id="FishFood">
			<div class="col-md-2">
				<img src="images/pet food/<?php echo $Product['image']; ?>" class="img-circle img-responsive" alt="<?php echo $Product['name']; ?>" width = "116" height = "109"/>
			
			</div>
			
			<div class="col-md-2">
				<h2 class="text-center"><?php echo $Product['cost']; ?></h2>
				<p class="text-justify"><?php echo $Product['name']; ?> <?php echo $Product['cost']; ?></p>
			</div>
			
		</div>
		<hr />
		<?php endforeach; ?>
		

				
	</div>	
</div>	
			
			
			
	
			
			
			
				
		
		
		
		
		
		
		
	</body>
	
	<div id="footer">
	
	<div class="alt2">
				<div class="container">
			<footer>&copy;Aisling Saul <br /><a href="#home">Back to top</a></footer>
				</div>
	
	</div>
	
	</div>
	
</html>