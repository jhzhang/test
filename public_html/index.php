<?php
require_once('smarty.php');
$smarty->assign('hello', 'Hello world');
$smarty->display('index.tpl');
