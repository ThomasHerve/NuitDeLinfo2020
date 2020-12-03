<?php 
include "DTLUsers";

$data = NULL;

class ConnexionController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        if(isset($_POST['connexion'])) { 
            $this->form($this);
        } else {
            $this->render("index");
        }
        
    }

    public function form()
    {   

        if(empty($_POST['identifiant'])) {
            $array = ["erreur" => "L'identifiant est vide"];;
            $this->render("index", $array);

        } else {
            if(empty($_POST['mdp'])) {
                $array = ["erreur" => "Le mot de passe est vide"];
                $this->render("index", $array);

            } else {

                // le htmlentities() passera les guillemets en entités HTML, ce qui empêchera les injections SQL
                $ident = htmlentities($_POST['identifiant'], ENT_QUOTES, "ISO-8859-1"); 
                $mdp   = htmlentities($_POST['mdp'], ENT_QUOTES, "ISO-8859-1");
                
                header("Location: ?r=site");

                // ======= CODE CI-DESSOUS A TESTER UNE FOIS LA CLASSE DTLUsers TERMINÉ ========

                //on se connecte à la base de données:
                /*
                $dtlusers = new DTLUsers();
                $result =  $dtlusers->getByPseudo($ident, $mdp);

                // Verification retour requete user
                if( len($Requete) == 0) {
                    $array = ["erreur" => "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé"];
                    $this->render("index", $array);

                } else {
                    // on ouvre la session avec $_SESSION:
                    $_SESSION['id'] = result[0]->id(); // la session peut être appelée différemment et son contenu aussi peut être autre chose que le pseudo
                    
                    // retour a l'acceuil

                }
                */
            }
        }
        
    }
}

