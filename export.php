<?
//require_once('../VCS/includes/midas.inc.php');
$link = mysqli_connect('localhost', 'pdfpoint_db', 'ivTzXIo.~gT9', 'pdfpoint_db');
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt insert query execution
	


  //Export Report Code Start here
if ($_GET['export_report'] == 'yes') {

    $excel_sql = "select * from email_tb group by email_id  order by 1 desc";
	//$result_excel = mysql_query($excel_sql);
	$result_excel = mysqli_query($link, $excel_sql);
    //ob_start();
	//=====================================
	
	header("Pragma: public"); 
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
    	header("Cache-Control: public"); 
    	header("Content-type: application/txt");
	header("Content-Disposition: attachment; filename=aspirant_Report.xls");
	
	
	$arr_columns['email_id']='Email Id';
	//$arr_columns['first_name']='First Name';
	

$arr_headers= array_values($arr_columns);
	foreach($arr_headers as $header){	
		echo $header."\t";		
	}
   while($RowData=mysqli_fetch_array($result_excel,MYSQL_ASSOC))	{
		@extract($RowData);
		
		
				
		$line[0]=$email_id;
        //$line[1]=$vendor_fname;
		
		
		echo "\r\n";		
		foreach($line as $key => $value){		
		   $value=str_replace("\n","",$value);
		   $value=str_replace("\r","",$value);
		   $value=str_replace("\t","",$value);
		   if(is_array($arr_substitutes[$key])){
			 $value = $arr_substitutes[$key][$value];
		   }
		   if(isset($arr_tpls[$key]))			
		   {
			 $code = str_replace('{1}', $value, $arr_tpls[$key]);
			 eval ("\$value = $code;");
		   }
		      echo $value."\t";		
		 }		
	   }
	   
	  
	    exit;
}
//Export Report Code End here

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PDFpoint.com Countdown / Coming Soon, Academic Search Engines...!!! Your Solution is Here...</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<table>
<tr><td colspan="2"></td></tr>
<tr><td>REPORT SHEET::  </td>&nbsp;&nbsp;<td>
                    <a href="export.php?<?php echo $_SERVER['QUERY_STRING']; ?>&export_report_link_id=1&export_report=yes" class="button-1 color2" >EXPORT</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
</table>
</body>
</html>