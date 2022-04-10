<?php
// DB Params
$clearDBURL = parse_url(getenv("CLEARDB_DATABASE_URL"));

define('DB_HOST', $clearDBURL['url']);
define('DB_USER', $clearDBURL['user']);
define('DB_PASS', $clearDBURL['pass']);
define('DB_NAME', substr($clearDBURL["path"], 1));


// App Root
define('APPROOT', dirname(dirname(__FILE__)));
// URL Root
define('URLROOT', 'http://localhost/shareposts');
// Site Name
define('SITENAME', 'SharePosts');

define('APPVERSION', '1.0.0');
