<?php
/* 
	@Author : Martin Kuik
	Autorijschool Drive4Me
*/
session_start();

$compitable_version = '5.3.7';
if (version_compare(PHP_VERSION, $compitable_version, '<')) {
    exit('Sorry, this script does not run on a PHP version smaller than 5.3.7 !');
}

// Generation Settings.
$set_database_check = false;
$set_show_site_info = false;
$set_show_messages = false;

if ($set_show_messages == true ){
	echo '<font style="color:green;"><b>Logging information</b></font></br>';
}

$general_class_name = 'Autorijschool';
$logo_color_code = "rgb(0, 201, 255);";

// Pages
$page_header = "pages/page_header.php";
$page_footer = "pages/page_footer.php";
$page_about = "pages/about.php";
$page_home = "pages/home.php";
$page_lesautos = "pages/lesautos.php";
$general_class = 'autorijschool.class.php';

if (file_exists($general_class)) { if ($set_show_messages == true) { echo '<font style="color:green;">Import Complete : <b>'.$general_class.'</b></font></br>'; } } else exit('<font style="color:red;">Missing : <b>'.$general_class.'</b></font></br>');
if (file_exists($page_header)) { if ($set_show_messages == true) { echo '<font style="color:green;">Import Complete : <b>'.$page_header.'</b></font></br>'; } } else exit('<font style="color:red;">Missing : <b>'.$page_header.'</b></font></br>');
if (file_exists($page_footer)) { if ($set_show_messages == true) { echo '<font style="color:green;">Import Complete : <b>'.$page_footer.'</b></font></br>'; } } else exit('<font style="color:red;">Missing : <b>'.$page_footer.'</b></font></br>');
if (file_exists($page_footer)) { if ($set_show_messages == true) { echo '<font style="color:green;">Import Complete : <b>'.$page_about.'</b></font></br>'; } } else exit('<font style="color:red;">Missing : <b>'.$page_about.'</b></font></br>');

// Connect Class
require_once $general_class;

// Connect database
require_once "configuration/db.config.php";

// Check if the class exists and run it if it.
	if (class_exists($general_class_name)) {
	$api = new Autorijschool($set_show_messages, $connection);
	
		} else exit('<font style="color:red;">Missing The Class : <b>'.$general_class_name.'</b></font></br>');

// Constructing page
require_once $page_header;

if (!isset($_GET['p']) == ''){
	require_once("pages/".$_GET['p'].".php");
} else {
	require_once 'pages/home.php';
}

require_once $page_footer;
?>