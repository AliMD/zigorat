<?php

session_start();

require_once('app/db.php');

function get_page(){
	return isset($_GET[page]) ? strtolower($_GET[page]) : 'home';
}

function console_log($msg){
	global $console_log_arr;
	$console_log_arr[] = $msg;
}

function console_log_show(){
	global $console_log_arr;
	if(!$console_log_arr) return;
	echo '<script type="text/javascript">try{';
	foreach ($console_log_arr as $log){
		$log=json_encode($log);
		echo "console.log('PHP:',$log);";
	}
	echo '}catch(e){}</script>';
	unset($console_log_arr);
}

function showunder(){
	isset($_GET['debug']) and $_SESSION['debug']=$_GET['debug'];
	if(!$_SESSION['debug']){
		inc('underdev','pages');
		exit();
	}
}

function inc($filename,$folder='inc'){
	global $template;
	@include "$folder/$filename.php";
}

function finalise (){
	db_close();
}

function gen_project($project,$linkclass){
	$project['img'] = array();
	$project['imglinks']='';
	$project['imglen']=0;

	for($i=1;$i<=10;$i++){
		if(strlen($project["img$i"])>3){
			$img = $project["img$i"];
			$project['imglen']++;
			$act = $i==1 ? ' act' : '';
			$project['imglinks'] .= "<a class='links$act $linkclass' href='images/projects/$img' title='$project[excerpt_en]'></a>";
		}
	}

	return "
				<section class='prd' style=\"background-image:url('images/projects/$project[thumb]');\">
					<h1>$project[name_en]</h1>
					<h2>
						<span>$project[imglen]<br />images</span>
					</h2>
					$project[imglinks]
				</section>
			";
}

function gen_projects_list($projects_arr){
	$html = array('','','');
	$len = sizeof($projects_arr);
	for($i=0; $i<$len; $i+=3) {
		for($j=0;$j<3;$j++){
			$projects_arr[$i+$j] and $html[$j] .= gen_project($projects_arr[$i+$j],"prdpic".($i+$j));
		}
	}
	return $html;
}

function gen_customers_list($customers_arr){
	$html = '';
	foreach ($customers_arr as $customerpage) {
		$html .= "<div class='customer_container cover'>
					<div class='left_panel left'>$customerpage[text_en]</div>
					<div class='right_panel' style=\"background-image: url('images/customers/$customerpage[image]');\"></div>
				</div>";
	}
	return $html;
}

function gen_home_list($home_arr){
	$html = '';
	foreach ($home_arr as $homepage) {
		$html .= "<div style=\"background-image:url('images/home_slider/$homepage[image]');\"></div>";
	}
	return $html;
}

function gen_last_project($project){
	$html = "<div class='last_projectsImg'>";
	for($i=1;$i<=10;$i++){
		if(strlen($project["img$i"])>3){
			$img = $project["img$i"];
			$html .= "<div style=\"background-image: url('./images/last_project/$img');\"></div>";
		}
	}
	$html .= "</div><div class='last_projectsDecs'>
				<h4>{$project[target_project][name_en]}</h4>
				<p>$project[description_en]</p>
			</div>";
	return $html;
}
