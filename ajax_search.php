<?php
include("include/config_pvt.inc.php");

$name=trim($_GET['term']);

$sql_1 = "SELECT * FROM pdfpoint_supersubcategory WHERE (supercategory_title LIKE '%$name%' OR supercategory_keywords LIKE '%$name%') AND supercategory_privileges = 'Show' AND supercategory_privileges != ''";
$sql = mysqli_query($conn, $sql_1);

while ($query3 = mysqli_fetch_array($sql)) {
        $data[] = $query3['supercategory_title'];
    }
   
    echo json_encode($data);
?>