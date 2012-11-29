<?php
error_reporting(E_ALL ^ E_NOTICE);

require_once('app/moduls.php');

showunder();

$template['page'] = $template['menu_url'] = get_page();

if($template['page'] == 'projects_list'){
	$template['menu_url'] = 'projects';
	$template['projects_arr'] = db_getrows('portfolio','*',"category=$_GET[cat]",'sort',30);
	$template['projects'] = gen_projects_list($template['projects_arr']);
}

else if($template['page'] == 'our-customers'){
	$template['customers_arr'] = db_getrows('customers','*',true,'page',15);
	$template['customers'] = gen_customers_list($template['customers_arr']);
}

else if($template['page'] == 'home'){
	$template['home_arr'] = db_getrows('home_slider','*',true,'sort',15);
	$template['home_slider'] = gen_home_list($template['home_arr']);
}

inc("view",'app');

finalise();
