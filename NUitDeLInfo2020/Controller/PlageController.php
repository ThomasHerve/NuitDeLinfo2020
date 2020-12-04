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

		/*
		$array = [
			["note" => 5,"nom" => "1","photo" =>"https://viago.ca/wp-content/uploads/2015/07/Plage-768x432.jpg"],
			["note" => 4.5,"nom" => "2","photo" =>"https://viago.ca/wp-content/uploads/2015/07/Plage-768x432.jpg"],
			["note" => 2.3,"nom" => "3","photo" =>"https://viago.ca/wp-content/uploads/2015/07/Plage-768x432.jpg"],
			["note" => 5,"nom" => "4","photo" =>"https://viago.ca/wp-content/uploads/2015/07/Plage-768x432.jpg"],
			["note" => 4.5,"nom" => "5","photo" =>"https://viago.ca/wp-content/uploads/2015/07/Plage-768x432.jpg"],
			["note" => 2.3,"nom" => "6","photo" =>"https://viago.ca/wp-content/uploads/2015/07/Plage-768x432.jpg"],
			["note" => 5,"nom" => "7","photo" =>"https://viago.ca/wp-content/uploads/2015/07/Plage-768x432.jpg"],
			["note" => 4.5,"nom" => "8","photo" =>"https://viago.ca/wp-content/uploads/2015/07/Plage-768x432.jpg"],
			["note" => 2.3,"nom" => "9","photo" =>"https://viago.ca/wp-content/uploads/2015/07/Plage-768x432.jpg"],
			["note" => 5,"nom" => "10","photo" =>"https://viago.ca/wp-content/uploads/2015/07/Plage-768x432.jpg"],
			["note" => 4.5,"nom" => "11","photo" =>"https://viago.ca/wp-content/uploads/2015/07/Plage-768x432.jpg"],
			["note" => 2.3,"nom" => "12","photo" =>"https://viago.ca/wp-content/uploads/2015/07/Plage-768x432.jpg"],
			["note" => 5,"nom" => "13","photo" =>"https://viago.ca/wp-content/uploads/2015/07/Plage-768x432.jpg"],
			["note" => 4.5,"nom" => "14","photo" =>"https://viago.ca/wp-content/uploads/2015/07/Plage-768x432.jpg"],
			["note" => 2.3,"nom" => "15","photo" =>"https://viago.ca/wp-content/uploads/2015/07/Plage-768x432.jpg"],
			["note" => 5,"nom" => "16","photo" =>"https://viago.ca/wp-content/uploads/2015/07/Plage-768x432.jpg"],
			["note" => 4.5,"nom" => "17","photo" =>"https://viago.ca/wp-content/uploads/2015/07/Plage-768x432.jpg"],
			["note" => 2.3,"nom" => "18","photo" =>"https://viago.ca/wp-content/uploads/2015/07/Plage-768x432.jpg"]
		];
		*/

		//requete sql recupérer le nombre de plage 
		$nbPlages = sizeof($res);
		
		//nb plages par pages
		$parPage = 3;

		//nombre de page
		$pages = ceil($nbPlages/$parPage);
		
		//determine le premier élément
		$premier = ($currentPage * $parPage) - $parPage;

		$res = array_slice($res, $premier, 3);

		$res =  array(
			"plages" => $res,
			"pages" => $pages
		);

		var_dump($res);

		return $res;

	}

	public function index()
	{
		$array = $this->getPlage();
		$this->render("index",$array);
	}

}
