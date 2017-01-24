<?php

 include_once('../../config/init.php');
 include_once($BASE_DIR .'database/users.php');

$smarty->assign('users', $_POST);
$smarty->assign('datachange', TRUE);

$smarty->display('users/register.tpl');
?>
