<?php
    // include_once('lib/curl_query.php');
    // require 'lib/phpquery.php';

    // $url = 'http://www.goalstream.org/club/690110847#/main';
    // $file = curl_get($url);

    // $doc = phpquery::newDocument($file);
    // $rt = $doc->find(".b-opposition:eq(1) tr:eq(1) td:eq(1) p:eq(0) .rival_club")->text();
    // $tbl = $doc->find(".b-sidebar-widget__table");
?>


<?php
    include_once('curl_query.php');
    require 'phpquery.php';

    $url = 'http://www.goalstream.org/season/1036652/2bdebddd#/main';
    $file = curl_get($url);
    $doc = phpquery::newDocument($file);

    
    $tbl = $doc->find(".b-sidebar-widget__table");

    

    $tbl->find('tbody tr:eq(0), tbody tr:eq(9), tbody tr:eq(10), tbody tr:eq(11),
    tbody tr:eq(12), tbody tr:eq(13), tbody tr:eq(14), tbody tr:eq(15), 
    tbody tr:eq(16), tbody tr:eq(17), tbody tr:eq(18). tbody tr:eq(19),
    tbody tr:eq(20), tbody tr:eq(21), tbody tr:eq(22), tbody tr:eq(23),
    tbody tr:eq(24), tbody tr:eq(25), tbody tr:eq(26), tbody tr:eq(27),
    tbody tr:eq(28), tbody tr:eq(29), tbody tr:eq(30), tbody tr:eq(31),
    tbody tr:eq(32), tbody tr:eq(33), tbody tr:eq(34), tbody tr:eq(35)')->remove(); 
    $tbl->find('tbody tr:eq(8), tbody tr:eq(9)')->remove();
    $tbl->find('img')->remove();

    $tbl->find('tbody')->addClass("table");
    $tbl->find('.club a')->addClass("club-link");
    $tbl->find('td')->addClass("club-number");


    $web = 'http://www.goalstream.org/club/690110847#/main';
    $files = curl_get($web);

    $toc = phpquery::newDocument($files);
    $te = $toc->find(".b-opposition:eq(1) tr:eq(1) td:eq(1) p:eq(0) .rival_club a")->text();
    $f = curl_get($te);
    

  

    
    

    $date = $toc->find(".b-opposition:eq(1) tr:eq(1) td:eq(1) p:eq(1) a")->text();   
?>






<!-- <?php

// include_once('lib/curl_query.php');
// require 'lib/phpquery.php';

// $url = 'http://www.goalstream.org/club/690110847#/main';
// $file = curl_get($url);
// $doc = phpquery::newDocument($file);
// $rt = $doc->find(".b-opposition:eq(1) tr:eq(1) td:eq(1) p:eq(0) .rival_club")->text();

?> -->


