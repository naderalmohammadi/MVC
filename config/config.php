<?php

  define('DEBUG', true);

  define('DB_NAME', 'mvc');
  define('DB_USER', 'root');
  define('DB_PASSWORD', '');
  define('DB_HOST', '127.0.0.1');
  //default controller if there isn't one defined in url
  define('DEFAULT_CONTROLLER', 'Home');
  //default layout if there isn't one set in the controller
  define('DEFAULT_LAYOUT', 'default');
  //default site_title if there isn't one set
  define('SITE_TITLE', 'MVC');
  //set this to '/' for a live server
  define('PROOT', '/MVC/');
  // set session name and Cookie name for logged in user
  define('CURRENT_USER_SESSION_NAME', 'dskldfSDSS43434SDdcnvFDFd');
  define('REMEMBER_ME_COOKIE_NAME', 'FssdfD34Fssf5433DSSdd4');
  define('REMEMBER_ME_COOKIE_EXPIRY', 2592000); //time in seconds for cookie to live (30 days)
  // controller name for the restricted access page
  define('ACCESS_RESTRICTED', 'Restricted');
