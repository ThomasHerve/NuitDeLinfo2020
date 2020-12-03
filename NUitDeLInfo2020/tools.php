<?php

function __autoload($name)
{
	$dir = "model";
	if (stripos($name, "Controller") !== FALSE)
		$dir = "Controller";
	include_once $dir."/".$name.".php";
}