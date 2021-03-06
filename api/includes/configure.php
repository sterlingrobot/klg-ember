<?php

define('DB_HOST', 'localhost');
define('DB_USERNAME', 'katiegil_web');
define('DB_PASSWORD', '$mjolnir77');
define('DB_DEFAULT', 'katiegil_site');

define('ROOT', 'http://' . $_SERVER['HTTP_HOST']);
define('FS_ROOT', '/home2/katiegil/public_html');

set_include_path($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'includes'
            . PATH_SEPARATOR . get_include_path());

function GenerateUrl ($s) {
  //Convert accented characters, and remove parentheses and apostrophes
  $from = explode (',', "ç,æ,œ,á,é,í,ó,ú,à,è,ì,ò,ù,ä,ë,ï,ö,ü,ÿ,â,ê,î,ô,û,å,e,i,ø,u,(,),[,],/,'");
  $to = explode (',', 'c,ae,oe,a,e,i,o,u,a,e,i,o,u,a,e,i,o,u,y,a,e,i,o,u,a,e,i,o,u,,,,,-,');
  //Do the replacements, and convert all other non-alphanumeric characters to spaces
  $s = preg_replace ('~[^\w\d]+~', '-', str_replace ($from, $to, trim ($s)));
  //Remove a - at the beginning or end and make lowercase
  return strtolower (preg_replace ('/^-/', '', preg_replace ('/-$/', '', $s)));
}

function CheckUrl ($s) {
  // Get the current URL without the query string, with the initial slash
  $myurl = preg_replace ('/\?.*$/', '', $_SERVER['REQUEST_URI']);
  //If it is not the same as the desired URL, then redirect
  if ($myurl != $s) { header("Location: $s", true, 301); exit; }
}
?>
