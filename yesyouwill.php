<?php
$url = 'http://api.bike-stats.co.uk/service/rest/bikestats?format=json';
$d = file_get_contents($url);

if(isset($_GET['callback']))
{
    header('Content-Type: text/javascript; charset=utf-8');
    echo $_GET['callback'] . '(' . $d . ');';
}
?>
