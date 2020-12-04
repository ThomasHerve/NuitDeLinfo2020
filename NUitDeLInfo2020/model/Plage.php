<?php
class Plage {
    private $id;
    private $nom_plage;
    private $photo_plage;
    private $desciption_plage;
    //ajouts hors construct
    private $note_eau_chimique;
    private $note_eau_dechet;
    private $note_dechet;
    private $coms;

    function __construct($i,$n,$p,$d) {
                $this->id=$i;
                $this->nom_plage=$n;
                $this->photo_plage=$p;
                $this->desciption_plage=$d;
                }

    function __get($property) {
         switch ($property) {
             case "nom_plage":
                 return $this->nom_plage;
                 break;
             case "photo_plage":
                 return $this->photo_plage;
                 break;
             case "desciption_plage":
                 return $this->desciption_plage;
                 break;
             case "note_eau_chimique":
                              return $this->note_eau_chimique;
                              break;
            case "note_eau_dechet":
                             return $this->note_eau_dechet;
                             break;
            case "note_dechet":
                             return $this->note_dechet;
                             break;
            case "coms":
                return $this->coms;
                break;
             default:
                throw new Exception('Propriété invalide !');
         }
    }

     function __set($property,$value) {

            switch ($property) {
                     case "nom_plage":
                         $this->nom_plage = (string) $value;
                         break;
                     case "photo_plage":
                          $this->photo_plage = (string) $value;
                         break;
                     case "desciption_plage":
                        $this->desciption_plage = (string) $value;
                        break;
                     case "note_eau_chimique":
                        $this->note_eau_chimique = (string) $value;
                        break;
                      case "note_eau_dechet":
                        $this->note_eau_dechet = (integer) $value;
                        break;
                     case "note_dechet":
                         $this->note_dechet = (integer) $value;
                         break;
                     case "coms":
                        $this->coms = $value;
                        break;
                     default:
                        throw new Exception('Propriété ou valeur invalide !');
            }
     }
}
