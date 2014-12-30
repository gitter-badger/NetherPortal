<?php
	session_start();
	ob_start();

	ini_set("display_errors", true);
	
	class NetherPortal {
		public static function init() {
			if(is_dir("./versions")) {
				
			} else 
				NetherPortal::create();
		}
		
		private static function create() {
			@mkdir("./versions");
		}
	}