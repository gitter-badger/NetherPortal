<?php
	if(is_file("./src/netherportal/NetherPortal.php")) {
		require './src/netherportal/NetherPortal.php';
	} else
		die('<html>
				<head>
					<title>NetherPortal | Error</title>
				</head>
				<body>
					<center>
						<h1>Unable To Find NetherPortal Installation</h1><hr>
						<p>
							The NetherPortal Source Code could not be found in "'. __DIR__ . DIRECTORY_SEPARATOR .'"!
						</p>
					</center>
				</body>
			 </html>');