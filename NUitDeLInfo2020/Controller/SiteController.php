<?php

class SiteController extends Controller
{
	public function __construct()
	{
	}

	public function index()
	{
		$array = ["test1","test2"];
		$this->render("index",$array);
	}

	public function about()
	{
		$this->render("about");
	}
}
