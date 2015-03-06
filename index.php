<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bootstrap 101 Template</title>

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/kalendar.css" rel="stylesheet">
		<link href="css/demo.css" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Kalendar.js</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
				<!--
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Dashboard</a></li>
						<li><a href="#">Settings</a></li>
						<li><a href="#">Profile</a></li>
						<li><a href="#">Help</a></li>
					</ul>
				-->
				</div>
			</div>
		</nav>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 ">
							<h2>Vanilla Input</h2>
							<input id="vanillaInput" type="text" class="kalendarInput" placeholder="Username" aria-describedby="sizing-addon1">
						</div>
						<div class="col-md-6 text-right">
							<h2>Left Input</h2>
							<input id="reverseInput" class="kalendarInput" placeholder="Username" aria-describedby="sizing-addon1">
						</div>
					</div>
				
					<h2>Bootstrap Default Input</h2>
					<input id="bootstrapInput" type="text" class="form-control kalendarInput" placeholder="Username" aria-describedby="sizing-addon1">

					<h2>Bootstrap Big Input</h2>
					<div id="bootstrapBigInput" class="input-group input-group-lg kalendarInput">
						<span class="input-group-addon" id="sizing-addon1">@</span>
						<input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
					</div>
					
					<h2>Bootstrap Medium Input</h2>
					<div id="bootstrapMidInput" class="input-group kalendarInput">
						<span class="input-group-addon" id="sizing-addon2">@</span>
						<input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
					</div>

					<h2>Bootstrap Small Input</h2>
					<div id="bootstrapSmallInput" class="input-group input-group-sm kalendarInput">
						<span class="input-group-addon" id="sizing-addon3">@</span>
						<input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon3">
					</div>
				</div>
				<div class="col-md-6">.col-md-6</div>
			</div>
		</div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.11.1.min.js"><\/script>')</script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/kalendar.js"></script>
	</body>
</html>