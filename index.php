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
	// Home page slider
	$template['home_slider_arr'] = db_getrows('home_slider','*',true,'sort',15);
	$template['home_slider'] = gen_home_list($template['home_slider_arr']);

	// Last project
	$last_project = db_getrows('last_project');
	$template['last_project']=$last_project[0];
	$project_id = $template['last_project']['project_id'];
	$target_project = db_getrows('portfolio','*',"id='$project_id'");
	$template['last_project']['target_project']=$target_project[0];
}	$template['last_project_html'] = gen_last_project($template['last_project']);

inc("view",'app');

finalise();
