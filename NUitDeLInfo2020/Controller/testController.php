<?php

class testController extends Controller
{
	public function __construct()
	{
	}

	public function index()
	{
		//note nom photo
		$array = [
			["note" => 5,"nom" => "ching chong","photo" =>"https://viago.ca/wp-content/uploads/2015/07/Plage-768x432.jpg"],
			["note" => 5,"nom" => "ching chong","photo" =>"https://viago.ca/wp-content/uploads/2015/07/Plage-768x432.jpg"],
			["note" => 5,"nom" => "ching chong","photo" =>"https://viago.ca/wp-content/uploads/2015/07/Plage-768x432.jpg"]
		];
		$this->render("index",$array);
	}

}
