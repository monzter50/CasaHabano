<?php 
require 'twig.php';
$cookie =  $_COOKIE["adult"];
$params = array(
	'title' => 'Casa Habano | Cozumel',
	'op'=>$op,
	'content'=>$cozumel,
	'cookie'=>$cookie

);
$template = $twig->load('destination.twig');
echo $template->render($params);

?>