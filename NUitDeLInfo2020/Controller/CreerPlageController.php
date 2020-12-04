<?php 
include "DTLUsers";

$data = NULL;

class CreerPlageController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        if(isset($_POST['creerplage'])) { 
            $this->form($this);
        } else {
            $this->render("index");
        }
        
    }

    public function form()
    {   

        if(empty($_POST['nompplage'])) {
            $array = ["erreur" => "Le nome de la plage est vide"];;
            $this->render("index", $array);

        } else {
            if(empty($_POST['photoplage'])) {
                $array = ["erreur" => "La photo est vide"];
                $this->render("index", $array);

            } else {
                if(empty($_POST['descriplage'])) {
                    $array = ["erreur" => "La description est vide"];
                    $this->render("index", $array);

                } else {
                    
                    // le htmlentities() passera les guillemets en entités HTML, ce qui empêchera les injections SQL
                    $nom    = htmlentities($_POST['nomplage'], ENT_QUOTES, "ISO-8859-1"); 
                    $photo  = htmlentities($_POST['photoplage'], ENT_QUOTES, "ISO-8859-1");
                    $descri = htmlentities($_POST['descriplage'], ENT_QUOTES, "ISO-8859-1");
                    
                    header("Location: ?r=site");

                    // ======= CODE CI-DESSOUS A TESTER UNE FOIS LA CLASSE DTLUsers TERMINÉ ========
                    /*
                    $dtlusers = new DTLUsers();
                    $result =  $dtlusers->setmescouilles($nom, $photo, $descri);

                    // Verification retour requete user
                    if( $result == NULL ) {
                        $array = ["erreur" => "La plage éxiste deja"];
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
}

