<?php 
//https://github.com/CurosMJ/NoConsoleComposer
include 'password.php';
$base_path = \realpath('../../laravel');
$base_path = \str_replace('\\', '\\\\', $base_path);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>NoConsole</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		<link href="css/style.css" media="all" rel="stylesheet" />
	</head>
	<body>
		<div class="row">
			<div class="col-lg-1"></div> 
			<div class="col-lg-10">
				<h1>NoConsole</h1>
				<hr/>
				<div class="form-inline">
					<fieldset>
						<legend>Composer Commands</legend>
						<button    	onclick="del()" 						class="composer btn btn-success disabled">Self Update</button>
						<input type="text" class="composer form-input" name="package" id="packageComposer">
						<button 	onclick="callComposer('require')" 		class="composer btn btn-success disabled">require</button>
						<button 	onclick="callComposer('remove')" 		class="composer btn btn-success disabled">remove</button>
						<button 	onclick="callComposer('install')" 		class="composer btn btn-success disabled">install</button>
						<button  	onclick="callComposer('update')" 		class="composer btn btn-success disabled">update</button>
						<button   	onclick="callComposer('dump-autoload')" class="composer btn btn-success disabled">dump-autoload</button>
						<button    	onclick="callComposer('show')" 			class="composer btn btn-success disabled">show</button>
						<button    	onclick="callComposer('geoip:update')" 			class="composer btn btn-success disabled">geoip:update</button>
						
					</fieldset>
					<hr/>
					<fieldset>
						<legend>Bower Commands</legend>
						<input type="text" class="bower form-input" name="package" id="packageBower">
						<button 	onclick="callBower('install')" 			class="bower btn btn-info disabled">install</button>
						<button 	onclick="callBower('remove')" 			class="bower btn btn-info disabled">remove</button>
						<button 	onclick="callBower('update')" 			class="bower btn btn-info disabled">update</button>
						<button 	onclick="callBower('list')" 			class="bower btn btn-info disabled">show</button>
					</fieldset>
				</div>  
				<h3>Console Output:</h3>
				<pre id="output" class="well"></pre>
			</div>
			<div class="col-lg-1"></div>
		</div>
	</body>
</html>
