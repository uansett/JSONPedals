<?php
$url = 'http://www.tfl.gov.uk/tfl/syndication/feeds/cycle-hire/livecyclehireupdates.xml';
$d = Parse($url);

if(isset($_GET['callback']))
{
    header('Content-Type: text/javascript; charset=utf-8');
    echo $_GET['callback'] . '(' . $d . ');';
}

//Code from user bakkelun on Stackoverflow (http://stackoverflow.com/users/151237/bakkelun)
function Parse($url) {
        $fileContents= file_get_contents($url);
        $fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);
        $fileContents = trim(str_replace('"', "'", $fileContents));
        $simpleXml = simplexml_load_string($fileContents);
        $json = json_encode($simpleXml);

        return $json;
    }
?>
