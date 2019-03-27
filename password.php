<?php
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 806837a (.)

$password = 'password1234';
if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_PW'] !== $password) {
    \header('WWW-Authenticate: Basic realm="NoConsoleComposer"');
    \header('HTTP/1.0 401 Unauthorized');
<<<<<<< HEAD
=======
$password = "password1234";
if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_PW'] !== $password)
{
    header('WWW-Authenticate: Basic realm="NoConsoleComposer"');
    header('HTTP/1.0 401 Unauthorized');
>>>>>>> 33a6daa (.)
=======
>>>>>>> 806837a (.)
    exit;
}
