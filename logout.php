<?php
require_once('config/config.php');
//SSLon();
session_destroy();
session_unset();
//var_dump($_SESSION);
redirect('index.php')
?>



