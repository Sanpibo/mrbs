<?php
ob_start();
unset($_SESSION['REMOTE_USER']);
session_destroy();
setcookie('pyauth', '', time()-(3600 * 24 * 365), '/', 'yorku.ca');
setcookie('mayaauth', '', time()-(3600 * 24 * 365), '/', 'yorku.ca');
header('Location: index.php');
exit;
?>
