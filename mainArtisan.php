<?php

\define('ROOT_DIR', \realpath('../../laravel'));
\set_time_limit(10000);
\ini_set('memory_limit', -1);  //could be forbidden on server

include 'password.php';
if (! isset($_POST['function'])) {
    die('You must specify a function');
}
if (! \function_exists($_POST['function'])) {
    die('Function not found');
} else {
    \call_user_func($_POST['function']);
}

function command() {
    //command_string();
    //command_array();
    require_once ROOT_DIR.'/vendor/autoload.php';
    $app = require_once ROOT_DIR.'/bootstrap/app.php';
    //$app->withFacades();
    $kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

    //$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
    /*
    $status = $kernel->handle(
    $input = new Symfony\Component\Console\Input\ArgvInput(),
    new Symfony\Component\Console\Output\ConsoleOutput()
);
*/
    $vars = ['command' => 'route:list'];
    $status = $kernel->handle(
        $input = new Symfony\Component\Console\Input\ArrayInput($vars),
        new Symfony\Component\Console\Output\ConsoleOutput()
    );

    //$app = new  \Illuminate\Container\Container();
    //$app->singleton('app', 'Illuminate\Container\Container');
    //\Illuminate\Support\Facades\Facade::setFacadeApplication($app);

    echo \Illuminate\Support\Facades\Artisan::call('route:list', []);
    echo 'FINE??';
}