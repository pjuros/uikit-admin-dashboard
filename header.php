<!DOCTYPE html>
<html lang="en" class="uk-height-1-1">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UIkit admin dashboard</title>
	<link href="uikit/css/uikit.almost-flat.min.css" rel="stylesheet">
	<link href="app.css" rel="stylesheet">
	<script src="uikit/js/uikit.min.js"></script>
</head>

<body class="uk-height-1-1">

	<nav class="uk-navbar uk-navbar-attached app-navbar">
		<a href="/" class="uk-navbar-brand">UIkit admin dashboard</a>
		<div class="uk-navbar-flip">
			<div class="uk-navbar-content">
				<i class="uk-icon-user"></i> Some user
			</div>
		</div>
	</nav>

	<div class="uk-grid uk-height-1-1">
		
		<div class="uk-width-medium-1-6 app-sidebar">
			<div class="uk-text-center">
				<form class="uk-form uk-margin-top uk-margin-bottom">
					<div class="uk-form-icon"><i class="uk-icon-search"></i><input type="text"></div>
				</form>
			</div>
			<ul data-uk-nav="" class="uk-nav uk-nav-side uk-nav-parent-icon">
				<li class="uk-nav-divider"></li>
				<li><a href="/"><i class="uk-icon-dashboard uk-icon-justify"></i> Dashboard</a></li>
				<li><a href="tables.php"><i class="uk-icon-table uk-icon-justify"></i> Tables</a></li>
				<li><a href="/"><i class="uk-icon-power-off uk-icon-justify"></i> Logout</a></li>
			</ul>
		</div>
		
		<div class="uk-width-medium-5-6 app-container">