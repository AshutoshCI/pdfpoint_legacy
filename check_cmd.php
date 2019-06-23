<?php

$pathName = 'pdf';
$imgName = 'Basic';

if (!is_dir($pathName)) {
    mkdir($pathName, 0777, true);
	mkdir($pathName.'/img', 0777, true);
}

$finalPdfPath = $pathName."/".$imgName.".pdf";

$finalImagePath = $pathName."/img/".$imgName."-%d.jpg";

$cmd = shell_exec("gs -q -dQUIET -dSAFER -dBATCH -dNOPAUSE -dNOPROMPT -dMaxBitmap=500000000 -dAlignToPixels=0 -dGridFitTT=2 -sDEVICE=jpeg -dTextAlphaBits=4 -dGraphicsAlphaBits=4 -r150  -sOutputFile='$finalImagePath' '$finalPdfPath'");

if($cmd)
{
  echo "failure";
} else{
echo "success";
}
