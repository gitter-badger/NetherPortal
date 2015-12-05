<?php
  /* $mysqli = new mysqli('localhost', 'my_user', 'my_password', 'my_db');
  if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
  } */
  
  $lang = isset($_GET["lang"])? $_GET["lang"]: "en"; //ru or en!
  $array = parse_ini_file("lang/".$lang.".ini");
  
  $title = 'NetherPortal'; //site title
  $description = 'PocketMine-MP Web Interface and more...'; //site description 
  
  /* Widgets Settings */
  
  $a=0; # change to 1 when add a widget
  $b=1; 
  
  function _widgets($a, $b){
	  if($a == $b){
		  echo '
		    you code
		  '; #code you widgets 
	  }else{
		  echo '
		  connect one of the widgets in config file
		  '; # it does not change!
	  }
  }
