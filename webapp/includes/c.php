<?php
/* © 2010 Clément Ronzon */
/**
WS that returns a CRS list depending on the search restrictions (optional)
**/
require('application_top.php');
header('Cache-Control: no-cache, must-revalidate');
header('Expires: '.EXPIRATION_DATE);
header('Content-type: application/json; charset=utf-8');

$name = (isset($_GET['n'])) ? urldecode(stripslashes($_GET['n'])) : '';
$name = (isset($_POST['n'])) ? urldecode(stripslashes($_POST['n'])) : $name;

$code = (isset($_GET['c'])) ? urldecode(stripslashes($_GET['c'])) : '';
$code = (isset($_POST['c'])) ? urldecode(stripslashes($_POST['c'])) : $code;

$iso = (isset($_GET['i'])) ? urldecode(stripslashes($_GET['i'])) : '';
$iso = (isset($_POST['i'])) ? urldecode(stripslashes($_POST['i'])) : $iso;

$crs_language = (isset($_GET['l'])) ? ucfirst(urldecode(stripslashes($_GET['l']))) : ucfirst(LANGUAGE_CODE);
$crs_language = (isset($_POST['l'])) ? ucfirst(urldecode(stripslashes($_POST['l']))) : $crs_language;

$supported_languages = array('Fr', 'En', 'Es', 'De', 'It', 'Pl', 'Vi');
$crs_language = in_array($crs_language, $supported_languages) ? $crs_language : 'En';
$sql = "SELECT DISTINCT ";
$sql .= "GROUP_CONCAT(DISTINCT IFNULL(co.".$crs_language."_name, '*".WORLD."') ORDER BY IFNULL(co.".$crs_language."_name, '*".WORLD."') SEPARATOR ', ') AS country, ";
$sql .= "crs.Code AS code, ";
$sql .= "crs.Definition AS def ";
$sql .= "FROM T_crs crs ";
$sql .= "LEFT OUTER JOIN J_country_crs cc ON cc.Id_crs = crs.Id ";
$sql .= "LEFT OUTER JOIN T_country co ON co.Iso = cc.Iso ";
$sql .= "WHERE ";
if (!(isset($_GET['f']) || isset($_POST['f']))) {
  $sql .= "crs.Code = 'WGS84' OR ";
}
$sql .= "(crs.Enabled = 'YES' ";
if ($iso != '') {
	$sql .= "AND ((cc.Iso IS NULL) OR cc.Iso LIKE '".$iso."') ";
}
if ($name != '') {
	$sql .= "AND (crs.Definition LIKE '+title=%".$name."%') ";
}
if ($code != '') {
	$sql .= "AND (crs.Code LIKE '%".$code."%') ";
}
$sql .= ") ";
$sql .= "GROUP BY crs.Code ORDER BY 1";
//echo($sql);
$crs_query = tep_db_query($sql);
$js_var = "{"."\n";
$country = '';
$started = false;
$cstart = false;
$flag = false;
while ($crs = tep_db_fetch_array($crs_query)) {
  $flag = true;
	if ($country != $crs['country']) {
		$country = $crs['country'];
		if ($started) $js_var .= "},"."\n";
		$js_var .= "  \"".$crs['country']."\": {";
		$cstart = true;
	} else {
		$cstart = false;
	}
	$started = true;
	if (!$cstart) $js_var .= ",";
	$js_var .= "\n"."    \"".$crs['code']."\": \"".$crs['def']."\"";
}
$js_var .= "\n"."  }"."\n"."}";
if ($flag) {
  echo $js_var;
} else {
  echo '';
}

?>