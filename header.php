<!DOCTYPE html>
<html lang="en" class="uk-height-1-1">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UIkit admin dashboard</title>
	<link href="/uikit/css/uikit.almost-flat.min.css" rel="stylesheet">
	<link href="/css/app.css" rel="stylesheet">
	<script src="/js/jquery-3.1.0.min.js"></script>	
	<script src="/uikit/js/uikit.min.js"></script>
</head>

<body class="uk-height-1-1" style="padding-top: 42px;">

	<nav class="uk-navbar uk-navbar-attached app-navbar">
		<a href="/" class="uk-navbar-brand">UIkit admin dashboard</a>
		<div class="uk-navbar-flip">
			<ul class="uk-navbar-nav">
				<li data-uk-dropdown="" class="uk-parent" aria-haspopup="true" aria-expanded="false">
					<a href="#"><i class="uk-icon-user"></i> Some user <i class="uk-icon-caret-down"></i></a>
					<div class="uk-dropdown uk-dropdown-navbar uk-dropdown-top" style="top: 0px; left: 0px;">
						<ul class="uk-nav uk-nav-navbar">
							<li><a href="/"><i class="uk-icon-user uk-icon-justify"></i> Profile</a></li>
							<li><a href="/"><i class="uk-icon-cog uk-icon-justify"></i> Settings</a></li>
							<li class="uk-nav-divider"></li>
							<li><a href="/"><i class="uk-icon-power-off uk-icon-justify"></i> Log out</a></li>
						</ul>
					</div>
				</li>
			</ul>
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
				<li><a href="panels.php"><i class="uk-icon-clone uk-icon-justify"></i> Panels</a></li>
			</ul>
		</div>
		
		<div class="uk-width-medium-5-6 uk-height-1-1 app-container">
