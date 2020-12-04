<?php
class DetailsplageController extends Controller
{
	public function __construct()
	{
	}

	public function index()
	{
	if(isset($_POST['commente']) && isset( $_SESSION['id'])) {

        $c=new DTLCom();
        $c->setCom($_POST['test'], $_SESSION['id'],parameters()["p"],$_POST['rate'],$_POST['rate2'],$_POST['rate3']);
        unset($_POST['commente']);
        $this->index();
    } else {

            $d=new DTLPlage();
            $p=$d->getById(parameters()["p"]);
            $c=new DTLCom();

            $coms=$c->getByPlageId(parameters()["p"]);

            $u=new DTLUsers();
            $pseudo=array();
             foreach($coms as $com){
                $plop=$u->getById($com->id_user);
                array_push($pseudo,$plop->pseudo);
             }

            $array = [
                "id"=>parameters()["p"],
                "nom" => $p->nom_plage,
                "photo" =>$p->photo_plage,
                "description" => $p->desciption_plage,
                "qualiteEau" => $p->note_eau_chimique,
                "pollutionEau" => $p->note_eau_dechet,
                "etatPlage" => $p->note_dechet,
                "coms"=>$coms,
                "pseudo"=>$pseudo
                ];


            $this->render("index",$array);
		}
	}

}
