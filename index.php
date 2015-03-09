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
						<div class="col-md-12 ">
							<h2>Bottom Position</h2>
							<input id="bottomLeft" type="text" class="kalendarInput" placeholder="bottomLeft">
							<input id="bottomMid" type="text" class="kalendarInput" placeholder="bottomMid">
							<input id="bottomRight" type="text" class="kalendarInput" placeholder="bottomRight">
						</div>
						<div class="col-md-12 ">
							<h2>Right Position</h2>
							<input id="rightTop" type="text" class="kalendarInput" placeholder="rightTop">
							<input id="rightMid" type="text" class="kalendarInput" placeholder="rightMid">
							<input id="rightBottom" type="text" class="kalendarInput" placeholder="rightBottom">
						</div>
						<div class="col-md-12 text-right">
							<h2>Left Position</h2>
							<input id="leftTop" type="text" class="kalendarInput" placeholder="leftTop">
							<input id="leftMid" type="text" class="kalendarInput" placeholder="leftMid">
							<input id="leftBottom" type="text" class="kalendarInput" placeholder="leftBottom">
						</div>
						<div class="col-md-12 ">
							<h2>Top Position</h2>
							<input id="topLeft" type="text" class="kalendarInput" placeholder="topLeft">
							<input id="topMid" type="text" class="kalendarInput" placeholder="topMid">
							<input id="topRight" type="text" class="kalendarInput" placeholder="topRight">
						</div>
					</div>
				
					<h2>Bootstrap Default Input</h2>
					<input id="bootstrapInput" type="text" class="form-control kalendarInput" placeholder="Username">

					<h2>Bootstrap Big Input</h2>
					<div id="bootstrapBigInput" class="input-group input-group-lg kalendarInput">
						<span class="input-group-addon" id="sizing-addon1">@</span>
						<input type="text" class="form-control" placeholder="Username">
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
		<script>
			$(function() {
    
				$("#bottomLeft").kalendar({boxPosition: "bottomLeft"});
				$("#bottomMid").kalendar({boxPosition: "bottomMid"});
				$("#bottomRight").kalendar({boxPosition: "bottomRight"});
				$("#topLeft").kalendar({boxPosition: "topLeft"});
				$("#topMid").kalendar({boxPosition: "topMid"});
				$("#topRight").kalendar({boxPosition: "topRight"});
				$("#leftTop").kalendar({boxPosition: "leftTop"});
				$("#leftMid").kalendar({boxPosition: "leftMid"});
				$("#leftBottom").kalendar({boxPosition: "leftBottom"});
				$("#rightTop").kalendar({boxPosition: "rightTop"});
				$("#rightMid").kalendar({boxPosition: "rightMid"});
				$("#rightBottom").kalendar({boxPosition: "rightBottom"});
				$("#bootstrapInput").kalendar({boxPosition: "rightBottom"});
				
			});
		</script>
	</body>
</html>