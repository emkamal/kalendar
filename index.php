<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Kalendar jQuery Plugin</title>
		<!-- --
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/kalendar.css" rel="stylesheet">
		<link href="css/prism.css" rel="stylesheet">
		<link href="css/demo.css" rel="stylesheet">
		<!-- -->
		<link href="css/unified.css" rel="stylesheet">
		<!-- -->
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
			<div class="col-md-6 formblock">
					<h1>The Form</h1>
					<form>
						<div class="form-group">
							<label for="fullNameInput">Full name</label>
							<input type="text" class="form-control" id="fullNameInput" placeholder="Full name" value="Elvis Presley">
						</div>
						<div class="form-group">
							<label for="addressInput">Address</label>
							<input type="text" class="form-control" id="addressInput" placeholder="Enter email" value="homeless :'(">
						</div>
						<div class="form-group">
							<div class="row">
							  <div class="col-xs-4">
							  <label for="dateOfBirthInput">Date of Birth</label>
								<input id="dateOfBirthInput" type="text" class="form-control input-lg kalendarInput" placeholder="">
							  </div>
							  <div class="col-xs-4">
							  <label for="dateOfDeathInput">Preferred Date of Death</label>
								<input id="dateOfDeathInput" type="text" class="form-control kalendarInput" placeholder="">
							  </div>
							  <div class="col-xs-4">
							  <label for="dateOfRebirthInput">Preferred Date of Rebirth</label>
								<input id="dateOfRebirthInput" type="text" class="form-control kalendarInput" placeholder="">
							  </div>
							</div>
						</div>
						<div class="form-group">
							<label for="deathCause">Preferred Cause of Death</label>
							<select class="form-control" id="deathCause">
								<option>Violent heart attack</option>
								<option>Drug over dose</option>
								<option>Chokes on banana fritters</option>
								<option>Head shot in a war and then remembered as a war hero</option>
								<option>Listening to Justin Bieber's music</option>
							</select>
						</div>
						<div class="form-group">
							<label for="reincarnationForm">Preferred Reincarnation Form</label>
							<select class="form-control" id="reincarnationForm">
								<option>Rock star</option>
								<option>Actual rock (without star)</option>
								<option>Pig</option>
								<option>Single cell organism</option>
								<option>Digital being</option>
							</select>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox"> I hereby confirm that the data I entered on this reincarnation form proposal is valid and will then be reviewed by God almighty for further reincarnation process
							</label>
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
				<div class="col-md-6 scriptblock">
					<h1>The Script</h1>
					<pre><code class="language-javascript">
$(function() {
	
	/* These are the script which are being used to activate my Kalendar jquery plugin to each input type text beside */
	$("#dateOfBirthInput").kalendar({
		numOfLoadedDays: 180,
		boxPosition: "rightTop", 
		animationStyle: "zoom",
		disabledDates: ["19-3-2015", "28-3-2015"], // for predefined holidays
	});
	$("#dateOfDeathInput").kalendar({
		numOfLoadedDays: 500,
		numOfInitialRows: 3,
		disabledDaysOfWeek: [5,6], // days of week which are disabled
		disabledDates: ["27-3-2015", "30-3-2015"],
		boxPosition: "topMid", 
		dateFormat: "d/m/yy",
		animationStyle: "fade",
		showDateHover: false,
		monthLongLabel: ["January", "February", "Maart", "April", "May", "Juny", "July", "August", "September", "October", "November", "December"],
		monthShortLabel: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
		dayShortLabel: ["Ma", "Di", "Wo", "Do", "Vr", "Za", "Zo"],
	});
	$("#dateOfRebirthInput").kalendar({
		numOfLoadedDays: 50,
		numOfInitialRows: 0,
		disabledDaysOfWeek: [7],
		boxPosition: "leftTop", 
		dateFormat: "dd MONTH yyyy",
		animationStyle: "none",
		showDateHover: false,
		showScrollBar: false,
		showCloseButton: false,
	});
});
					</code></pre>
					<h2>All available options</h2>
					<pre><code class="language-javascript">
var allAvailableOptions = {
	numOfLoadedDays: 180,
	numOfInitialRows: 2,
	boxPosition: "bottomLeft", // bottomLeft, bottomMid, bottomRight, topLeft, topMid, topRight, leftTop, leftMid, leftBottom, rightTop, rightMid, rightBottom
	dateFormat: "dd-mm-yyyy", // d, dd, m, mm, MONTH, MON, yy, yyyy
	showDateHover: true,
	disabledDaysOfWeek: [6,7],
	disabledDates: ["9-3-2015", "30-3-2015"],
	animationStyle: "fade", // zoom, fade, none
	showCloseButton: true,
	showScrollBar: true,
	showScrollHandle: false,
	swipeScroll: false,
	cellBackgroundColor: "",
	cellTextColor: "",
	hoverBackgroundColor: "",
	hoverTextColor: "",
	selectedBackgroundColor: "",
	selectedTextColor: "",
	disabledBackgroundColor: "",
	disabledTextColor: "",
	holidayBackgroundColor: "",
	holidayTextColor: "",
	monthLongLabel: ["January", "February", "March", "April", "May", "Juny", "July", "August", "September", "October", "November", "December"],
	monthShortLabel: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
	dayLongLabel: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
	dayShortLabel: ["Mo", "Tu", "We", "Th", "Fr", "Sa", "Su"],
}
					</code></pre>
				</div>
				
			</div>
		</div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.11.1.min.js"><\/script>')</script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<!-- --
		<script src="js/kalendar.js"></script>
		<script src="js/prism.js"></script>
		<!-- -->
		<script src="js/unified.js"></script>
		<!-- -->
		<script>
			$(function() {
				$("#dateOfBirthInput").kalendar({
					numOfLoadedDays: 180,
					boxPosition: "rightTop", 
					animationStyle: "zoom",
					disabledDates: ["19-3-2015", "28-3-2015"],
				});
				$("#dateOfDeathInput").kalendar({
					numOfLoadedDays: 500,
					numOfInitialRows: 3,
					disabledDaysOfWeek: [5,6],
					disabledDates: ["27-3-2015", "30-3-2015"],
					boxPosition: "topMid", 
					dateFormat: "d/m/yy",
					animationStyle: "fade",
					showDateHover: false,
					monthLongLabel: ["January", "February", "Maart", "April", "May", "Juny", "July", "August", "September", "October", "November", "December"],
					monthShortLabel: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					dayShortLabel: ["Ma", "Di", "Wo", "Do", "Vr", "Za", "Zo"],
				});
				$("#dateOfRebirthInput").kalendar({
					numOfLoadedDays: 50,
					numOfInitialRows: 0,
					disabledDaysOfWeek: [7],
					boxPosition: "leftTop", 
					dateFormat: "dd MONTH yyyy",
					animationStyle: "none",
					showDateHover: false,
					showScrollBar: false,
					showCloseButton: false,
				});
			});
		</script>
	</body>
</html>