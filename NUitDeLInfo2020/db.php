<?php

$db = new PDO("pgsql:host=localhost;port=5432;dbname=nuit2020test","postgres","pokemon88");
//$db->exec("set search_path to framwhop");
$stm = $db->query("SELECT * FROM users where id_user=1");

$rows = $stm->fetchAll(PDO::FETCH_NUM);

foreach($rows as $row) {

    printf("$row[0] $row[1] $row[2] p\n");
}
function db()
{
	global $db; return $db;
}
