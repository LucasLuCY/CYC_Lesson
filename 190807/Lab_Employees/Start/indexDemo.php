<?php
    include_once("config.php");

    $link = mysqli_connect( $dbhost, $dbuser, $dbpass ) or die ( mysqli_connect_error() );

    $result = mysqli_query ( $link, "set names utf8" );
    mysqli_select_db ( $link, $dbname );

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<script src="scripts/jquery-1.9.1.min.js"></script>
<script src="scripts/jquery.mobile-1.3.2.min.js"></script>
<link rel="stylesheet" href="scripts/jquery.mobile-1.3.2.min.css" />
<link rel="stylesheet" href="styles.css" />
</head>
<body>
<div data-role="page" data-theme="c">

<div data-role="header">
	<h1>Employee Details</h1>
</div>

<div data-role="content">
	<ul data-role="listview" data-filter="true">
			<li>
		<a href="employeeDetails.php?id=1"> 
			<img src="images/james_king.jpg">
			<h4>James King</h4>
			<p>President and CEO </p> <span class="ui-li-count">4</span>
		</a>
		</li>
			<li>
		<a href="employeeDetails.php?id=2"> 
			<img src="images/julie_taylor.jpg">
			<h4>Julie Taylor</h4>
			<p>VP of Marketing </p> <span class="ui-li-count">2</span>
		</a>
		</li>
			<li>
		<a href="employeeDetails.php?id=3"> 
			<img src="images/eugene_lee.jpg">
			<h4>Eugene Lee</h4>
			<p>CFO </p> <span class="ui-li-count">0</span>
		</a>
		</li>
			<li>
		<a href="employeeDetails.php?id=4"> 
			<img src="images/john_williams.jpg">
			<h4>John Williams</h4>
			<p>VP of Engineering </p> <span class="ui-li-count">3</span>
		</a>
		</li>
			<li>
		<a href="employeeDetails.php?id=5"> 
			<img src="images/ray_moore.jpg">
			<h4>Ray Moore</h4>
			<p>VP of Sales </p> <span class="ui-li-count">2</span>
		</a>
		</li>
			<li>
		<a href="employeeDetails.php?id=6"> 
			<img src="images/paul_jones.jpg">
			<h4>Paul Jones</h4>
			<p>QA Manager </p> <span class="ui-li-count">0</span>
		</a>
		</li>
			<li>
		<a href="employeeDetails.php?id=7"> 
			<img src="images/paula_gates.jpg">
			<h4>Paula Gates</h4>
			<p>Software Architect </p> <span class="ui-li-count">0</span>
		</a>
		</li>
			<li>
		<a href="employeeDetails.php?id=8"> 
			<img src="images/lisa_wong.jpg">
			<h4>Lisa Wong</h4>
			<p>Marketing Manager </p> <span class="ui-li-count">0</span>
		</a>
		</li>
			<li>
		<a href="employeeDetails.php?id=9"> 
			<img src="images/gary_donovan.jpg">
			<h4>Gary Donovan</h4>
			<p>Marketing </p> <span class="ui-li-count">0</span>
		</a>
		</li>
			<li>
		<a href="employeeDetails.php?id=10"> 
			<img src="images/kathleen_byrne.jpg">
			<h4>Kathleen Byrne</h4>
			<p>Sales Representative </p> <span class="ui-li-count">0</span>
		</a>
		</li>
			<li>
		<a href="employeeDetails.php?id=11"> 
			<img src="images/amy_jones.jpg">
			<h4>Amy Jones</h4>
			<p>Sales Representative </p> <span class="ui-li-count">0</span>
		</a>
		</li>
			<li>
		<a href="employeeDetails.php?id=12"> 
			<img src="images/steven_wells.jpg">
			<h4>Steven Wells</h4>
			<p>Software Architect </p> <span class="ui-li-count">0</span>
		</a>
		</li>
		</ul>
</div>

</div>
</body>
</html>