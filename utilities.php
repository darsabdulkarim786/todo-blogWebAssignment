<?php
//Consonants;

define("HOST", "localhost");
define("ROOT", "root");
define("ROOT_PASSWORD", "");
define("DB", 'csm_01_blog');
define("TABLE", 'blog_container');


function getConnection()
{
    $dbh = new PDO("mysql:host=localhost;", "root", "");
    $dbh->exec("USE " . DB);
    return $dbh;
}
