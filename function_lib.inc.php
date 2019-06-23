<?
// connect_db: Updated 31 may 2006
function connect_db()
{
    global $ARR_CFGS;
    if (!isset($GLOBALS['dbcon'])) {

        $GLOBALS['dbcon'] =	mysql_connect($ARR_CFGS["db_host"], $ARR_CFGS["db_user"], $ARR_CFGS["db_pass"]);
        mysql_select_db($ARR_CFGS["db_name"]) or die("Could not connect to database. Please check configuration and ensure MySQL is running.");

    }
}

// db_query: Updated 10 oct 2006
function db_query($sql, $dbcon2 = null)
{
    if($dbcon2==''){
        if(!isset($GLOBALS['dbcon'])) {
            connect_db();
        }
        $dbcon2	= $GLOBALS['dbcon'];
    }
    //$time_before_sql = checkpoint(false);
    //$sql_started_at = date("Y-m-d H:i:s");
    $result	= mysql_query($sql,	$dbcon2) or	die("not connected");
    return $result;
}


// db_scalar: Updated 31 may 2006
function db_scalar($sql, $dbcon2 = null)
{
    if($dbcon2==''){
        if(!isset($GLOBALS['dbcon'])) {
            connect_db();
        }
        $dbcon2	= $GLOBALS['dbcon'];
    }
    $result	= db_query($sql, $dbcon2);
    if ($line =	mysql_fetch_array($result))	{
        $response =	$line[0];
        return $response;
    }
}

function db_row($sql, $dbcon2 = null)
{
    if($dbcon2==''){
        if(!isset($GLOBALS['dbcon'])) {
            connect_db();
        }
        $dbcon2	= $GLOBALS['dbcon'];
    }
    $result	= db_query($sql, $dbcon2) or	die(db_error($sql));
    if ($line =	mysql_fetch_array($result))	{
        return $line;
    }
    return false;
}

function db_object($sql, $dbcon2 = null)
{
    if($dbcon2==''){
        if(!isset($GLOBALS['dbcon'])) {
            connect_db();
        }
        $dbcon2	= $GLOBALS['dbcon'];
    }
    $result	= db_query($sql, $dbcon2) or	die(db_error($sql));
    if ($line =	mysql_fetch_object($result))	{
        return $line;
    }
}

function checkpoint($from_start = false)
{
    global $PREV_CHECKPOINT;
    if($PREV_CHECKPOINT==''){
        $PREV_CHECKPOINT = SCRIPT_START_TIME;
    }
    $cur_microtime = getmicrotime();

    if($from_start) {
        return round($cur_microtime - SCRIPT_START_TIME,4);
    } else {
        $time_taken = $cur_microtime - $PREV_CHECKPOINT;
        $PREV_CHECKPOINT = $cur_microtime;
        return round($time_taken,4);
    }
}

