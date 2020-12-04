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

		
		$db = db();

		//$sql = "SELECT nom_plage,photo_plage FROM plage";
		$sql = "SELECT nom_plage,photo_plage FROM plage";
		$resultset = $db->prepare($sql);
		$resultset->execute();

		$res = $resultset->fetchAll(PDO::FETCH_ASSOC);
		return $res;

	}

	public function index()
	{
		$array = $this->getPlage();
		$this->render("index",$array);
	}

}
