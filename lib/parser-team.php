<?php

// include_once('lib/curl_query.php');
// require 'lib/phpquery.php';

// $url = 'http://www.goalstream.org/club/690110847#/main';
// $file = curl_get($url);
// $doc = phpquery::newDocument($file);
// $rt = $doc->find(".b-opposition:eq(1) tr:eq(1) td:eq(1) p:eq(0) .rival_club")->text();

include_once('lib/curl_query.php');
require 'lib/phpquery.php';

    $web = 'http://www.goalstream.org/club/690110847#/main';
    $files = curl_get($web);

    $toc = phpquery::newDocument($files);
    $rt = $toc->find(".b-opposition:eq(1) tr:eq(1) td:eq(1) p:eq(0) .rival_club")->text();

?>