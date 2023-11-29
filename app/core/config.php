<?php

if($_SERVER["SERVER_NAME"] == "localhost")
{
  /** THIS IS FOR LOCALHOST **/
  /** DATABASE CONFIG **/
  define("DBNAME", "db_practice");
  define("DBHOST", "localhost");
  define("DBUSER", "root");
  define("DBPASSWORD", "");
  define("PORT", 3307);
  
  define("ROOT", "http://localhost/php_mvc/public");
} else 
{
  /** THIS IS FOR DEPLOYMENT IN WEB **/
  define("ROOT", "https://www.unknown.free.nf");
}