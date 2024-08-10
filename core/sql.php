<?php
	if ($_SERVER['HTTP_HOST'] == 'localhost') {
		// Database for my localhost
		define("DB_HOST", "186.202.152.192"); 	// MySQL Database Host
		define("DB_USER", "kasino@186.202.28.227");			// MySQL Username
		define("DB_PASS", "Mondo123@");  			// MySQL Password
		define("DB_NAME", "Casino");  	// Database Name
	} else {
		// Database for public
		define("DB_HOST", "localhost"); 	// MySQL Database Host
		define("DB_USER", "replace_user");			// MySQL Username
		define("DB_PASS", "replace_password");  	// MySQL Password
		define("DB_NAME", "replace_db");  		// Database Name
	}
?>
