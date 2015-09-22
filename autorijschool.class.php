<?php
/**
 * Class Autorijschool
 * @Author : Martin Kuik
 * All Rights Reserved
 
 
	Creator Martin Kuik
	 Personal Profile - http://www.facebook.com/MartinKuikHilversum

	Autorijschool Class All in one
	 - Supported by all browsers

	This class is used in this application for the database functions and the search system and more of that stuff.
	This class handels all the functions and creates the objects and variables.
*/
ini_set('display_errors', 1);
error_reporting(E_ALL);
 class Autorijschool
 {
	private $db_connection = null;
    public $errors = array();
    public $messages = array();
	public $logs = array();
	 
	 public function __construct($set_show_messages, $connection){
		 
		 if (empty($connection)) {
            die('The database object is not defined');
        } else {
            $this->db_connection = $connection;
        }
		
		 if ($set_show_messages == true) {
            echo '<font style="color:green;">Class Construct Complete</font></br>';
        }
        if ($set_show_messages == true) {
            echo '<font style="color:green;">Running Autorijschool api Complete</font>';
        }
	 }	 
	 
 }
?>