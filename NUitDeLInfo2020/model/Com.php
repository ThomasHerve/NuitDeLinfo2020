<?php
class Comm {
    private $id_commentaire;
    private $com;
    private $id_user;
    private $id_plage_com;
    private $note_com_eau_chimique;
    private $note_com_eau_dechet;
    private $note_com_dechet;

    function __construct($i,$c,$idu,$idp,$nec,$ned,$nd) {
                $this->id_commentaire=$i;
                $this->com=$c;
                $this->id_user=$idu;
                $this->id_plage_com=$idp;
                $this->note_com_eau_chimique=$nec;
                $this->note_com_eau_dechet=$ned;
                $this->note_com_dechet=$nd;
    }


    function __get($property) {
         switch ($property) {
             case "com":
                 return $this->com;
                 break;
             case "id_user":
                 return $this->id_user;
                 break;
             case "id_plage_com":
                 return $this->id_plage_com;
                 break;
             case "note_com_eau_chimique":
                 return $this->note_com_eau_chimique;
                 break;
             case "note_com_eau_dechet":
                 return $this->note_com_eau_dechet;
                 break;
             case "note_com_dechet":
                 return $this->note_com_dechet;
                 break;
             default:
                throw new Exception('Propriété invalide !');
         }
    }

     function __set($property,$value) {

            switch ($property) {
                     case "com":
                         $this->com=(string) $value;
                        break;
                     case "id_user":
                        $this->id_user=(string) $value;
                        break;
                     case "id_plage_com":
                        $this->id_plage_com=(string) $value;
                        break;
                     case "note_com_eau_chimique":
                        $this->note_com_eau_chimique=(string) $value;
                        break;
                     case "note_com_eau_dechet":
                        $this->note_com_eau_dechet=(string) $value;
                        break;
                     case "note_com_dechet":
                        $this->note_com_dechet=(string) $value;
                        break;
                     default:
                        throw new Exception('Propriété ou valeur invalide !');
            }
     }
}
