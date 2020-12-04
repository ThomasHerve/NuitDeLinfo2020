<?php

class PlageController extends Controller
{
	public function __construct()
	{
	}

	public function getPlage() {

			// On détermine sur quelle page on se trouve
		if(isset($_GET['page']) && !empty($_GET['page'])){
			$currentPage = (int) strip_tags($_GET['page']);
		}else{
			$currentPage = 1;
		}

        $p=new DTLPlage();
        $ps=$p->getAll();


		return $ps;

	}

	public function index()
	{
		$array = $this->getPlage();
		$this->render("index",$array);
	}

}
