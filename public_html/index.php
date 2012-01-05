<?php
require_once('smarty.php');
require_once ('conn.php');
$smarty->assign('title', 'ASP SHO');


$query = $db -> query ('select * from entity_media limit 20');
$arr = array();
while ($result = $db -> fetchArray($query)) {
	$arr[] = $result;
}

//array loop
$smarty -> assign('arr', $arr);

//string truncation
$smarty->assign('articleTitle', 'Two Sisters Reunite after Eighteen Years at Checkout Counter.');

//string formation
$smarty->assign('number', 23.5787446);

//
$smarty->display('index.tpl');