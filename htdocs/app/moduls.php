<?php

session_start();

require_once('db.php');

function get_page(){
	return isset($_GET[page]) ? strtolower($_GET[page]) : 'home';
}

function showunder(){
	isset($_GET['debug']) and $_SESSION['debug']=$_GET['debug'];
	if(!$_SESSION['debug']){
		inc('underdev','pages');
		exit();
	}
}

function finalise (){
	db_close();
}

function inc($filename,$folder='inc'){
	global $template;
	@include "$folder/$filename.php";
}
