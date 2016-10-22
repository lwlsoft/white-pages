<?php

require_once("../conf/config.inc.php");
require_once(SMARTY);

$smarty = new Smarty();

$smarty->setTemplateDir('../templates/');
$smarty->setCompileDir('../templates_c/');
$smarty->setConfigDir('../configs/');
$smarty->setCacheDir('../cache/');
$smarty->debugging = $debug;

$smarty->assign('logo',$logo);
$smarty->assign('background_image',$background_image);

$smarty->assign('title','White Pages');

$smarty->display('index.tpl');

?>
