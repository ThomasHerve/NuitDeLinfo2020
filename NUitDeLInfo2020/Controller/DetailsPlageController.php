<?php

class DetailsPlageController extends Controller
{
	public function __construct()
	{
	}

	public function index()
	{
		//note nom photo
		$array = [
			"nom" => "ching chong",
			"photo" =>"https://viago.ca/wp-content/uploads/2015/07/Plage-768x432.jpg",
			"description" => "abdoul le maboul est très en colère !",
			"qualiteEau" => "bonne",
			"pollutionEau" => "légère", 
			"etatPlage" => "très bonne"
			];
		$this->render("index",$array);
	}

}
