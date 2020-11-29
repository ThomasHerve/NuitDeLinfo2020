<?php

$db = new PDO("pgsql:host=localhost;port=5433;dbname=nargeotl","nargeotl","WeFy06");
$db->exec("set search_path to framwhop");

function db()
{
	global $db; return $db;
}
