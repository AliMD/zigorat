<?php

$db = array(
	'con' => '',
	'name'   => 'zigoratws',
	'server' => 'localhost',
	'user'   => 'root',
	'pass'   => ''
);


function db_err(){
	$err_num = mysql_errno();
	$err_msg = mysql_error();
	die("Error $err_num: $err_msg");
}

function db_connect(){
	global $db;
	if($db['con']) return;
	$db['con'] = @mysql_connect($db['server'],$db['user'],$db['pass']) or db_err();
	@mysql_select_db($db['name']) or db_err();
	@mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $db['con']);
}

function db_query($q){
	global $db;
	if(!$db['con']) db_connect();
	$res = @mysql_query($q,$db['con']) or db_err();
	return $res;
}

function db_close(){
	global $db;
	if($db['con']) @mysql_close($db['con']);
}

function db_getrows($table, $sellect = '*', $where = true, $order = '', $limit=1000, $skip=0){
	$order AND $order="ORDER BY $order";
	$res = db_query("SELECT $sellect FROM $table WHERE $where $order LIMIT $skip, $limit");
	while( $row = mysql_fetch_array($res,MYSQL_ASSOC) ) $rows[] = $row;
	return $rows;
}
