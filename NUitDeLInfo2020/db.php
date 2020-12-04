<?php

$db = new PDO("pgsql:host=51.210.127.195;port=5432;dbname=nuit2020","postgres","sql");
//$db->exec("set search_path to framwhop");


function db()
{
	global $db; return $db;
}
