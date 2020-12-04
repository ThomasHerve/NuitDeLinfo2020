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

		//requete sql recupérer le nombre de plage 
		$nbPlages = sizeof($array);

		//nb plages par pages
		$parPage = 3;

		//nombre de page
		$pages = ceil($nbPlages/$parPage);

		//determine le premier élément
		$premier = ($currentPage * $parPage) - $parPage;

		$array = array_slice($array, $premier, 3);

		return $array;

	}

	public function index()
	{
		$array = $this->getPlage();
		//note nom photo
		/*
		$array = [
			["note" => 5,"nom" => "ching chong","photo" =>"https://viago.ca/wp-content/uploads/2015/07/Plage-768x432.jpg"],
			["note" => 4.5,"nom" => "ching chong","photo" =>"https://viago.ca/wp-content/uploads/2015/07/Plage-768x432.jpg"],
			["note" => 2.3,"nom" => "ching chong","photo" =>"https://viago.ca/wp-content/uploads/2015/07/Plage-768x432.jpg"]
		];
		*/
		$this->render("index",$array);
	}

}
