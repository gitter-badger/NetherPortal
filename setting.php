<?php
  /* $mysqli = new mysqli('localhost', 'my_user', 'my_password', 'my_db');
  if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
  } */
  
  $lang = isset($_GET["lang"])? $_GET["lang"]: "en"; //ru or en! //ru или en!
  $array = parse_ini_file("lang/".$lang.".ini");
  
  $title = 'NetherPortal'; //site title //заголовок сайта
  $description = 'PocketMine-MP Web Interface and more...'; //site description //описание сайта
  
  /* Widgets Settings - Настройки Виджетов */
  
  $a=0; # change to 1 when add a widget - смените на 1,когда добавите виджет
  $b=1; 
  
  function _widgets($a, $b){
	  if($a == $b){
		  echo '
		    you code
		  '; #code you widgets - код вашего виджета
	  }else{
		  echo '
		  connect one of the widgets in config file
		  подключите один из виджетов в конфигурационном файле
		  '; # it does not change! - не изменять!
	  }
  }
