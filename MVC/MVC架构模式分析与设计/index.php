<?php
	//url��ʽ  index.php?controller=��������&method=������
	require_once('function.php');
//	require_once('config.php');
//	$view = ORG('Smarty/', 'Smarty', $viewconfig);
//	$controller = $_GET['controller'];
//	$method = $_GET['method'];
//	C($controller, $method);

	$controllerAllow=array('test','index');
	$methodAllow=array('test','index','show');
	$controller =in_array( $_GET['controller'],$controllerAllow)?daddslashes($_GET['controller']):'index';
	$method =in_array( $_GET['method'],$methodAllow)?daddslashes($_GET['method']):'index';
	C($controller, $method);
?>