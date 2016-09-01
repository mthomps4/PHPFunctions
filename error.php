<?php
//Notice -- You probably shouldn't but i'll allow it
// Warning -- Something is wrong but won't cause crash
// Fatal error - What the 'ell man!

//3 Ways to display errors
//php.ini file
//.htaccess file on web server
// from own PHP code

//never show system erros in production to user
// catch and display message instead


//.htaccess usually used on shared server. Apache Config file

//PHP ONLY FILE
// PHP only file Parse errors will stop php from processing
error_reporting(E_ALL);  //report simple running erros (E_ALL || E_NOTICE);
ini_set('display_errors', 1); //Make sure they're on screen
ini_set("html_errors", 1);//HTML formatted errors

$error_levels = array(
  "E_ALL",
  "E_NOTICE",
  "E_WARNING",
  "E_ERROR",
  "E_STRICT",
  "E_DEPRECATED",
  "E_PARSE"
);

foreach ($errors as $error){
  echo $error."<br>";
}
//Can suppress errored lines with the @ symbol

//.htaccess Log File
# log errors
//php_value log_errors 1

# log file for errors
//php_value error_log php-error.txt

//PHP.ini Log file
// log_errors = On
// error_log = "/Applications/MAMP/htdocs/php-error.txt"

 ?>
