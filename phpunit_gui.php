<?php

declare(strict_types=1);
include 'password.php';
define('LARAVEL_DIR', realpath('../../laravel'));
require_once LARAVEL_DIR.'/vendor/autoload.php';

$path = LARAVEL_DIR.'/Modules';
$handle = opendir($path);
echo '<table class="table" border="1" width="100%">
<tr>
<td>';
echo '<ul>';
while (false !== ($entry = readdir($handle))) {
    if ('.' != $entry[0]) {
        //echo '<pre>'.print_r($entry, true).is_dir($path.'/'.$entry).'</pre>';
        echo '<li>'.$entry;
        echo '<ul>';
        $path_tests = $path.'/'.$entry.'/Tests';
        $handle_tests = opendir($path_tests);
        while (false !== ($entry_test = readdir($handle_tests))) {
            if ('.' != $entry_test[0]) {
                echo '<li>'.$entry_test;
                echo '<ul>';
                $path_file_tests = $path_tests.'/'.$entry_test;
                $handle_file_tests = opendir($path_file_tests);
                while (false !== ($entry_file_test = readdir($handle_file_tests))) {
                    $file = $path_file_tests.'/'.$entry_file_test;
                    $file_info = pathinfo($file);
                    $file_info['file'] = $file;
                    if ('php' == $file_info['extension']) {
                        echo '<li>'.$entry_file_test;
                        echo '<ul>';
                        $input = file_get_contents($file);
                        //die($input);
                        $pattern = '/function(.*?)[(]/';
                        preg_match_all($pattern, $input, $matches);
                        foreach ($matches[1] as $match) {
                            $str = 'test';
                            $match = trim($match);
                            if (substr($match, 0, strlen($str)) == $str) {
                                echo '<li>';
                                //echo $match;
                                echo '<form method="POST" action="">
                                    <input type="hidden" name="file" value="'.$file.'">
                                    <input type="hidden" name="func" value="'.$match.'">
                                    <button type="submit">'.substr($match, strlen($str)).'</button>
                                </form>';
                                echo '</li>';
                            }
                        }
                        echo '</ul>';
                        echo '</li>';
                    }
                }
                echo '</ul>';
                echo '</li>';
            }
        }
        echo '</ul>';
        echo '</li>';
    }
}
echo '</ul>';
echo '</td>';
echo '<td valign="top">';

result();
echo '</td>';

echo '</tr>';
echo '</table>';
closedir($handle);

function result() {
    if (! isset($_POST['file']) || ! isset($_POST['func'])) {
        echo 'perform an action';
    }
    echo '<br/> file: '.$_POST['file'];
    echo '<br/> function: '.$_POST['func'];
    echo '<br/>';
    $argv = [
        $_POST['file'],
        '--filter', '^.*::'.$_POST['func'],
        '--configuration', LARAVEL_DIR.'/phpunit.xml',
    ];

    $_SERVER['argv'] = $argv;

    PHPUnit\TextUI\Command::main(false);
}