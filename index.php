<?php
require_once 'head.php';

// echo $_SESSION['admin'];die();
// echo print_r($_COOKIE);die();



$smarty->assign('a0','關於我們');
$smarty->assign('a1','服務');
$smarty->assign('a2','作品集');
$smarty->assign('a3','聯絡我們');

/*---- 程式結尾-----*/
$smarty->display('theme.tpl');