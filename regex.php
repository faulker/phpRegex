<?php
switch($_GET['o'])
{
	case 0: //preg_match_all
		pregMatchAll($_GET['r'], $_GET['s']);
		break;
	case 1: //preg_match
		pregMatch($_GET['r'], $_GET['s']);
		break;
	case 2: //preg_split
		pregSplit($_GET['r'], $_GET['s']);
		break;
}

$flag = $_GET['f'];

/*
 *
 */
function pregMatch($regex, $str)
{
	if(isset($flag) && $flag != null && $flag != "")
	{
		@preg_match("$regex", "$str", $match, $flag);
	}
	else
	{
		@preg_match("$regex", "$str", $match);
	}
	print_r($match);
}

/*
 *
 */
function pregMatchAll($regex, $str)
{
	if(isset($flag) && $flag != null && $flag != "")
	{
		@preg_match_all("$regex", "$str", $match, $flag);
	}
	else
	{
		@preg_match_all("$regex", "$str", $match);
	}
	print_r($match);
}

/*
 *
 */
function pregSplit($regex, $str)
{
	if(isset($flag) && $flag != null && $flag != "")
	{
		$match = @preg_split("$regex", "$str", null, $flag);
	}
	else
	{
		$match = @preg_split("$regex", "$str");
	}
	print_r($match);
}


?>