<?php
/**
 * Created by PhpStorm.
 * User: ashu
 * Date: 10/15/2017
 * Time: 5:22 AM
 */



function format_date($date)
{
    if($date!=''){
        $mktime	= mktime(0,	0, 0, substr($date,	5, 2), substr($date, 8,	2),	substr($date, 0, 4));
        return date("M j, Y", $mktime);
    }
}

function humanTiming($time)
{

    $time = time() - $time; // to get the time since that moment
    $time = ($time < 1) ? 1 : $time;
    $tokens = array(
        31536000 => 'year',
        2592000 => 'month',
        604800 => 'week',
        86400 => 'day',
        3600 => 'hour',
        60 => 'minute',
        1 => 'second'
    );

    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits . ' ' . $text . (($numberOfUnits > 1) ? 's' : '');
    }

}

function view_article_count($articleId, $conn)
{
    // echo $articleId; echo "<br>"; echo $conn;
    $countSql = "select ah_click from pdfpoint_article_hits where ah_article = '$articleId'";
    $sqlQuery = mysqli_query($conn, $countSql);
    $count = 0;
    while ($rowResult = mysqli_fetch_array($sqlQuery)) {
        $count += $rowResult['ah_click'];
    }
    return $count;
}

