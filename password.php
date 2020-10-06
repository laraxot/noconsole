<<<<<<< HEAD
<?php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 806837a (.)
=======
>>>>>>> 2b721eb (the first commit)

$password = 'password1234';
if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_PW'] !== $password) {
    \header('WWW-Authenticate: Basic realm="NoConsoleComposer"');
    \header('HTTP/1.0 401 Unauthorized');
<<<<<<< HEAD
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
=======
>>>>>>> 2b721eb (the first commit)
    exit;
}
=======
<?php

$password = 'password1234';
if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_PW'] !== $password) {
    \header('WWW-Authenticate: Basic realm="NoConsoleComposer"');
    \header('HTTP/1.0 401 Unauthorized');
    exit;
}
>>>>>>> 49e960a (.)
