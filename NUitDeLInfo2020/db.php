<?php

$db = new PDO("pgsql:host=localhost;port=5432;dbname=nuit2020test","postgres","pokemon88");
$db->exec("set search_path to framwhop");

function db()
{
	global $db; return $db;
}
