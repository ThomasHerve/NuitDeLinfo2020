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
            $this->formco();

        } elseif(isset($_POST['creeruser'])){
            $this->formins();

        } else {
            $this->render("index");
        }
        
    }

    public function formco()
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
                
                $dtlusers = new DTLUsers();
                $result =  $dtlusers->getByPseudo($ident, $mdp);

                // Verification retour requete user
                if( $result == NULL) {
                    $array = ["erreur" => "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé"];
                    $this->render("index", $array);

                } else {
                    // on ouvre la session avec $_SESSION:
                    $_SESSION['id'] = $result->id; // la session peut être appelée différemment et son contenu aussi peut être autre chose que le pseudo
                    
                    // retour a l'acceuil
                    header("Location: ?r=site");

                }
            }
        }
    }

    public function formins()
    {   

        if(empty($_POST['identifiantins'])) {
            $array = ["erreurins" => "L'identifiant est vide"];;
            $this->render("index", $array);

        } else {
            if(empty($_POST['mdpins'])) {
                $array = ["erreurins" => "Le mot de passe est vide"];
                $this->render("index", $array);

            } else {

                // le htmlentities() passera les guillemets en entités HTML, ce qui empêchera les injections SQL
                $ident = htmlentities($_POST['identifiantins'], ENT_QUOTES, "ISO-8859-1"); 
                $mdp   = htmlentities($_POST['mdpins'], ENT_QUOTES, "ISO-8859-1");
                
                $dtlusers = new DTLUsers();
                $result =  $dtlusers->SetUsers($ident, $mdp);

                // Verification retour requete user
                if( $result == NULL) {
                    $array = ["infoscreer" => "Cet utilisateur éxiste deja."];
                    $this->render("index", $array);

                } else {
                    // on ouvre la session avec $_SESSION:
                    
                    $_SESSION['id'] = $result[0]; // la session peut être appelée différemment et son contenu aussi peut être autre chose que le pseudo
                    
                    $array = ["infoscreer" => "Utilisateur créé"];
                    $this->render("index", $array);
                }
            }
        }
    }
}