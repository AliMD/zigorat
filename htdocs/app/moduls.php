<?php

session_start();

function inc($filename,$folder='inc'){
	global $template;
	@include "$folder/$filename.php";
}

inc('db','app');

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


