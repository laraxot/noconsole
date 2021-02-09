<<<<<<< HEAD
<<<<<<< HEAD
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
=======
<?php

declare(strict_types=1);
<<<<<<< HEAD

$password = 'password1234';
if (! isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_PW'] !== $password) {
>>>>>>> 8b75065 (.)
=======
$password = 'admin123';
//$password = getenv('pwd');
if (! isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_PW'] !== $password) {
>>>>>>> 36ca29c (.)
    \header('WWW-Authenticate: Basic realm="NoConsoleComposer"');
    \header('HTTP/1.0 401 Unauthorized');
    exit;
}
<<<<<<< HEAD
>>>>>>> 49e960a (.)
=======
>>>>>>> 8b75065 (.)
=======
<?php

declare(strict_types=1);
$password = 'admin123';
//$password = getenv('pwd');
if (! isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_PW'] !== $password) {
    \header('WWW-Authenticate: Basic realm="NoConsoleComposer"');
    \header('HTTP/1.0 401 Unauthorized');
    exit;
}
<<<<<<< HEAD
>>>>>>> a19dbeb (.)
=======
>>>>>>> 6c13d61 (.)
