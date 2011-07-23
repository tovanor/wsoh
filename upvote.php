<?php
$username = $_GET['u'];
$r = new HttpRequest('http://localhost:4567/addInteresting', HttpRequest::METH_POST);
$r->addPostFields(array('username' => $username));
$r->send();
?>
<html><head>
<meta http-equiv="refresh" content="1;url='index.php'">
</head></html>
