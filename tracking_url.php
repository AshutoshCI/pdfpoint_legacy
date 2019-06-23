<?php
/**
 * Created by PhpStorm.
 * User: ashu
 * Date: 10/15/2017
 * Time: 4:50 AM
 */


$clicks = 0;

$rs = mysqli_query($conn, "select * from pdfpoint_article_hits where ah_article = '$articleid' and ah_ip = '$ip'");

if (mysqli_num_rows($rs) == 0) {

    $addQuery = "insert into pdfpoint_article_hits (ah_article, ah_ip, ah_page, ah_click, ah_date) values ('$articleid', '$ip', '$purl', 1, now())";
    if (!$rs = mysqli_query($conn, $addQuery)) {
        echo "Could not create new click counter for this page.";
    } else {
        $clicks = 1;
    }
} else {

    $row = mysqli_fetch_array($rs);
    $clicks = $row['ah_click'] + 1;

    if (!$rs = mysqli_query($conn, "UPDATE pdfpoint_article_hits SET ah_click = $clicks WHERE ah_article = '$articleid' and ah_ip = '$ip'")) {
        echo "Could not save new click count for this page.";
    }
}



/* end the code of page reffral */

