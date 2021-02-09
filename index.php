<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 806837a (.)
=======
>>>>>>> 2b721eb (the first commit)
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
		<script type="text/javascript">
			$(document).ready(function(){
				checkComposer();
			});
			function urlComposer(){
				return 'mainComposer.php';
			}
			function callComposer(func){
				$("#output").append("\nplease wait...\n");
				$("#output").append("\n===================================================================\n");
				$("#output").append("Executing Started");
				$("#output").append("\n===================================================================\n");
				$.post('mainComposer.php',
						{
							"package":$("#packageComposer").val(),
							"command":func,
							"function": "command"
						},
				function(data){
					$("#output").append(data);
					$("#output").append("\n===================================================================\n");
					$("#output").append("Execution Ended");
					$("#output").append("\n===================================================================\n");
				}
				);
			}
			function callBower(func){
				$("#output").append("\nplease wait...\n");
				$("#output").append("\n===================================================================\n");
				$("#output").append("Executing Started");
				$("#output").append("\n===================================================================\n");
				$.post('mainBower.php',
						{
							//"path":$("#path").val(),
							"package":$("#packageBower").val(),
							"command":func,
							"function": "command"
						},
				function(data){
					$("#output").append(data);
					$("#output").append("\n===================================================================\n");
					$("#output").append("Execution Ended");
					$("#output").append("\n===================================================================\n");
				}
				);
			}
			function checkComposer(){
				$("#output").append('\nloading...\n');
				$.post(urlComposer(),
						{
							"function": "getStatus",
							"password": $("#password").val()
						},
				function(data) {
					if (data.composer_extracted){
						$("#output").html("Ready. All commands are available.\n");
						$("button.composer").removeClass('disabled');
						$("button.bower").removeClass('disabled');
					}
					else if(data.composer){
						$.post(urlComposer(),
								{
									"password": $("#password").val(),
									"function": "extractComposer",
								},
								function(data) {
									$("#output").append(data);
									window.location.reload();
								}, 'text');
					}else{
						$("#output").html("Please wait till composer is being installed...\n");
						$.post(urlComposer(),
								{
									"password": $("#password").val(),
									"function": "downloadComposer",
								},
								function(data) {
									$("#output").append(data);
									check();
								}, 'text');
					}
				});
			}
		</script>
		<style>
			#output
			{
				width:100%;
				height:650px;
				overflow-y:scroll;
				overflow-x:hidden;
			} 
			fieldset { 
				display: block;
				margin-left: 2px;
				margin-right: 2px;
				padding-top: 0.35em;
				padding-bottom: 0.625em;
				padding-left: 0.75em;
				padding-right: 0.75em;
				border: 1px groove lightgray;
			}
		</style>
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
<?php
include 'password.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>NoConsoleComposer</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                check();
            });
            function url()
            {
                return 'main.php';
            }
            function call(func)
            {
                $("#output").append("\nplease wait...\n");
                $("#output").append("\n===================================================================\n");
                $("#output").append("Executing Started");
                $("#output").append("\n===================================================================\n");
                $.post('main.php',
                        {
                            "path":$("#path").val(),
                            "command":func,
                            "function": "command"
                        },
                function(data)
                {
                    $("#output").append(data);
                    $("#output").append("\n===================================================================\n");
                    $("#output").append("Execution Ended");
                    $("#output").append("\n===================================================================\n");
                }
                );
            }
            function check()
            {
                $("#output").append('\nloading...\n');
                $.post(url(),
                        {
                            "function": "getStatus",
                            "password": $("#password").val()
                        },
                function(data) {
                    if (data.composer_extracted)
                    {
                        $("#output").html("Ready. All commands are available.\n");
                        $("button").removeClass('disabled');
                    }
                    else if(data.composer)
                    {
                        $.post(url(),
                                {
                                    "password": $("#password").val(),
                                    "function": "extractComposer",
                                },
                                function(data) {
                                    $("#output").append(data);
                                    window.location.reload();
                                }, 'text');
                    }
                    else
                    {
                        $("#output").html("Please wait till composer is being installed...\n");
                        $.post(url(),
                                {
                                    "password": $("#password").val(),
                                    "function": "downloadComposer",
                                },
                                function(data) {
                                    $("#output").append(data);
                                    check();
                                }, 'text');
                    }
                });
            }
        </script>
        <style>
            #output
            {
                width:100%;
                height:350px;
                overflow-y:scroll;
                overflow-x:hidden;
            }
        </style>
    </head>
    <body>
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <h1>NoConsoleComposer</h1>
                <hr/>
                <h3>Commands:</h3>
                <div class="form-inline">
                    <button id="self-update" onclick="del()" class="btn btn-success disabled">Update Composer</button><br /><br />
                    <input type="text" id="path" style="width:300px;" class="form-control disabled" placeholder="absolute path to project directory"/>
                    <button id="install" onclick="call('install')" class="btn btn-success disabled">install</button>
                    <button id="update" onclick="call('update')" class="btn btn-success disabled">update</button>
                    <button id="update" onclick="call('dump-autoload')" class="btn btn-success disabled">dump-autoload</button>
                </div>
                <h3>Console Output:</h3>
                <pre id="output" class="well"></pre>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </body>
>>>>>>> 33a6daa (.)
=======
>>>>>>> 806837a (.)
=======
>>>>>>> 2b721eb (the first commit)
</html>
=======
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
		<script type="text/javascript">
			$(document).ready(function(){
				checkComposer();
			});
			function urlComposer(){
				return 'mainComposer.php';
			}
			function callComposer(func){
				$("#output").append("\nplease wait...\n");
				$("#output").append("\n===================================================================\n");
				$("#output").append("Executing Started");
				$("#output").append("\n===================================================================\n");
				$.post('mainComposer.php',
						{
							"package":$("#packageComposer").val(),
							"command":func,
							"function": "command"
						},
				function(data){
					$("#output").append(data);
					$("#output").append("\n===================================================================\n");
					$("#output").append("Execution Ended");
					$("#output").append("\n===================================================================\n");
				}
				);
			}
			function callBower(func){
				$("#output").append("\nplease wait...\n");
				$("#output").append("\n===================================================================\n");
				$("#output").append("Executing Started");
				$("#output").append("\n===================================================================\n");
				$.post('mainBower.php',
						{
							//"path":$("#path").val(),
							"package":$("#packageBower").val(),
							"command":func,
							"function": "command"
						},
				function(data){
					$("#output").append(data);
					$("#output").append("\n===================================================================\n");
					$("#output").append("Execution Ended");
					$("#output").append("\n===================================================================\n");
				}
				);
			}
			function checkComposer(){
				$("#output").append('\nloading...\n');
				$.post(urlComposer(),
						{
							"function": "getStatus",
							"password": $("#password").val()
						},
				function(data) {
					if (data.composer_extracted){
						$("#output").html("Ready. All commands are available.\n");
						$("button.composer").removeClass('disabled');
						$("button.bower").removeClass('disabled');
					}
					else if(data.composer){
						$.post(urlComposer(),
								{
									"password": $("#password").val(),
									"function": "extractComposer",
								},
								function(data) {
									$("#output").append(data);
									window.location.reload();
								}, 'text');
					}else{
						$("#output").html("Please wait till composer is being installed...\n");
						$.post(urlComposer(),
								{
									"password": $("#password").val(),
									"function": "downloadComposer",
								},
								function(data) {
									$("#output").append(data);
									check();
								}, 'text');
					}
				});
			}
		</script>
		<style>
			#output
			{
				width:100%;
				height:650px;
				overflow-y:scroll;
				overflow-x:hidden;
			} 
			fieldset { 
				display: block;
				margin-left: 2px;
				margin-right: 2px;
				padding-top: 0.35em;
				padding-bottom: 0.625em;
				padding-left: 0.75em;
				padding-right: 0.75em;
				border: 1px groove lightgray;
			}
		</style>
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
>>>>>>> 49e960a (.)
=======
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
>>>>>>> 3e9282f (.)
=======
<?php
=======
=======
>>>>>>> a19dbeb (.)
<?php
/**
 * https://github.com/CurosMJ/NoConsoleComposer.
 */
declare(strict_types=1);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 79a6b79 (.)
//https://github.com/CurosMJ/NoConsoleComposer
=======
=======
>>>>>>> a19dbeb (.)

require_once 'DotEnv.php';
(new DotEnv(__DIR__.'/.env'))->load();

<<<<<<< HEAD
>>>>>>> 36ca29c (.)
include 'password.php';
$base_path = \realpath('../../laravel');
$base_path = \str_replace('\\', '\\\\', $base_path);
<<<<<<< HEAD
<<<<<<< HEAD
=======
$artisan_cmds = ['route:list', 'view:clear'];
>>>>>>> 79a6b79 (.)
=======
=======
include 'password.php';
$base_path = \realpath('../../laravel');
$base_path = \str_replace('\\', '\\\\', $base_path);
>>>>>>> a19dbeb (.)

$cmds = [
    //'NoConsole' => ['check'],
    'Composer' => ['require', 'remove', 'install', 'update', 'dump-autoload',
        'show', 'check', 'geoip:update',
        //'getStatus',//is a function not a command
    ],
    'Bower' => ['install', 'remove', 'update', 'list'],
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1da66e5 (first)
    'Artisan' => ['exe',
        'route:list',
        'route:clear', 'view:clear', 'optimize:clear', 'cache:clear', 'config:clear',
        'config:cache',
        'migrate',
        'route:cache', 'vendor:publish',
<<<<<<< HEAD
        'storage:link',
    ],
];
>>>>>>> e03e7a1 (.)
=======
    'Artisan' => ['route:list', 'view:clear', 'migrate'],
=======
    ],
>>>>>>> 1da66e5 (first)
];
>>>>>>> a19dbeb (.)
?>
<!DOCTYPE html>
<html>

<head>
    <title>NoConsole</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<<<<<<< HEAD
<<<<<<< HEAD
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
=======
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<<<<<<< HEAD
<<<<<<< HEAD
    <script type="text/javascript" src="js/script.js<?php echo '?rnd='.rand(1, 100); ?>"></script>
>>>>>>> b10f238 (.)
=======
    <script type="text/javascript" src="js/script.js<?php echo '?rnd='.rand(1, 100); ?>">
=======
    <script type="text/javascript"
        src="js/script.js<?php echo '?rnd='.rand(1, 100); ?>">
>>>>>>> f681c50 (.)
    </script>
>>>>>>> e03e7a1 (.)
=======
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript"
        src="js/script.js<?php echo '?rnd='.rand(1, 100); ?>">
    </script>
>>>>>>> a19dbeb (.)
    <link href="css/style.css" media="all" rel="stylesheet" />
</head>

<body>
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <h1>NoConsole</h1>
            <hr />
            <div class="form-inline">
<<<<<<< HEAD
<<<<<<< HEAD
                <fieldset>
                    <legend>Composer Commands</legend>
                    <button onclick="del()" class="composer btn btn-success disabled">Self Update</button>
                    <input type="text" class="composer form-input" name="package" id="packageComposer">
                    <button onclick="callComposer('require')" class="composer btn btn-success disabled">require</button>
                    <button onclick="callComposer('remove')" class="composer btn btn-success disabled">remove</button>
                    <button onclick="callComposer('install')" class="composer btn btn-success disabled">install</button>
                    <button onclick="callComposer('update')" class="composer btn btn-success disabled">update</button>
                    <button onclick="callComposer('dump-autoload')"
                        class="composer btn btn-success disabled">dump-autoload</button>
                    <button onclick="callComposer('show')" class="composer btn btn-success disabled">show</button>
                    <button onclick="callComposer('geoip:update')"
                        class="composer btn btn-success disabled">geoip:update</button>

                </fieldset>
                <hr />
                <fieldset>
                    <legend>Bower Commands</legend>
                    <input type="text" class="bower form-input" name="package" id="packageBower">
                    <button onclick="callBower('install')" class="bower btn btn-info disabled">install</button>
                    <button onclick="callBower('remove')" class="bower btn btn-info disabled">remove</button>
                    <button onclick="callBower('update')" class="bower btn btn-info disabled">update</button>
                    <button onclick="callBower('list')" class="bower btn btn-info disabled">show</button>
                </fieldset>
                <hr />
                <fieldset>
                    <legend>Artisan Commands</legend>
<<<<<<< HEAD
                    <input type="text" class="bower form-input" name="cmd">
                    <button onclick="callArtisan('exe')" class="bower btn btn-info disabled">Exe</button>
                    <button onclick="callArtisan('remove')" class="bower btn btn-info disabled">remove</button>
                    <button onclick="callArtisan('update')" class="bower btn btn-info disabled">update</button>
                    <button onclick="callArtisan('list')" class="bower btn btn-info disabled">show</button>
=======
                    <!--
                    <input type="text" class="bower form-input" name="cmd">
                    <button onclick="callArtisan('exe')" class="bower btn btn-info disabled">Exe</button>
                    -->
                    <button onclick="callArtisan('route:list')" class="bower btn btn-info">route:list</button>
                    <button onclick="callArtisan('view:clear')" class="bower btn btn-info">view:clear</button>
=======
=======
>>>>>>> a19dbeb (.)
                <button onclick="check()">check</button>
                <button onclick="downloadComposer()">downloadComposer</button>
                <button onclick="extractComposer()">extractComposer</button>
                <?php
                    $html = '';
                    foreach ($cmds as $pack => $pack_cmds) {
                        $html .= '<fieldset>
                    <legend>'.$pack.' Commands</legend>
<<<<<<< HEAD
<<<<<<< HEAD
                    <input type="text" class="form-input" name="package" id="'.$pack.'_text" style="width:100%">&nbsp;<br/>';
=======
                    <input type="text" class="form-input" name="package" id="'.strtolower($pack).'_text">&nbsp;';
>>>>>>> a19dbeb (.)
=======
                    <input type="text" class="form-input" name="package" id="'.$pack.'_text" style="width:100%">&nbsp;<br/>';
>>>>>>> 1da66e5 (first)
                        foreach ($pack_cmds as $cmd) {
                            $html .= '<button onclick="callPack(\''.$cmd.'\',\''.$pack.'\')" class="btn btn-success">'.$cmd.'</button>&nbsp;';
                        }
                        $html .= '</fieldset>';
                    }
                    echo $html;
                ?>
<<<<<<< HEAD
>>>>>>> c457f98 (.)

>>>>>>> 79a6b79 (.)
                </fieldset>
=======

>>>>>>> a19dbeb (.)
            </div>
            <h3>Console Output:</h3>
            <pre id="output" class="well"></pre>
        </div>
        <div class="col-lg-1"></div>
    </div>
</body>

<<<<<<< HEAD
</html>
<<<<<<< HEAD
>>>>>>> 3a8d2b8 (.)
=======
>>>>>>> 79a6b79 (.)
=======
</html>
>>>>>>> a19dbeb (.)
