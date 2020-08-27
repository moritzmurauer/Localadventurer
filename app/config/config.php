<?php
  // DB Params
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', 'root');
  define('DB_NAME', 'localadventurer');



  // App Root
  define('APPROOT', dirname(dirname(__FILE__)));

  // Public Root
  define('PUBLICROOT', str_replace( 'app', 'public', APPROOT ) );

  // URL Root
  define('URLROOT', 'http://localhost:8080/localadventurer');
  // Site Name
  define('SITENAME', 'localadventurer');

  define('APPVERSION', 'Version 1.0.0');
