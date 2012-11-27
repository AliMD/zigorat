<?php
error_reporting(E_ALL ^ E_NOTICE);

require_once('app/moduls.php');

showunder();

$template['page'] = get_page();

if($template['page']=='projects_list'){
	$projects_arr = db_getrows('portfolio','*',"category=$_GET[cat]",'sort',30);
	$template['projects'] = gen_projects_list($projects_arr);
}

inc("view",'app');

finalise();
