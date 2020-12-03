<?php
class Users {
    private $id;
    private $pseudo;
    private $mdp;


    function __construct($i,$p,$m) {
            $this->id=$i;
            $this->pseudo=$p;
            $this->mdp=$m;
        }

    function __get($property) {
         switch ($property) {
             case "id":
                 return $this->id;
                 break;
             case "pseudo":
                 return $this->pseudo;
                 break;
             case "mdp":
                 return $this->mdp;
                 break;
             default:
                throw new Exception('Propriété invalide !');
         }
    }

     function __set($property,$value) {

            switch ($property) {
                     case "pseudo":
                         $this->pseudo = (string) $value;
                         break;
                     case "mdp":
                          $this->mdp = (string) $value;
                         break;
                     default:
                        throw new Exception('Propriété ou valeur invalide !');
            }
     }
}
