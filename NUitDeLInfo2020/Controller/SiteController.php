<?php

class SiteController extends Controller
{
	public function __construct()
	{
	}

	public function index()
	{

	    if(isset($_POST['deconnexion'])) {
            $_SESSION['id'] = null;
        }
		$array = ["test1","test2"];
		$this->render("index",$array);
	}

	public function about()
	{
		$this->render("about");
	}
}
