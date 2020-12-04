<?php
include_once "Plage.php";
include_once "DTLCom.php";
class DTLPlage {

    function getAll(){
        $list_plage=array();
        $stm = db()->query("SELECT * FROM plage");
        $dtlcom=new DTLCom();
        $rows = $stm->fetchAll(PDO::FETCH_NUM);

        foreach($rows as $row) {
            $plagetemp=new Plage($row[0],$row[1],$row[2],$row[3]);
            $plagetemp->coms=$dtlcom->getByPlageId($row[0]);
            $coms=$dtlcom->getByPlageId($row[0]);
            $note_1=0;
            $note_2=0;
            $note_3=0;
            foreach($coms as $com){
                $note_1+=$com->note_com_eau_chimique;
                $note_2+=$com->note_com_eau_dechet;
                $note_3+=$com->note_com_dechet;
            }
             if(count($coms)>0){
                             $plagetemp->note_eau_chimique=$note_1/count($coms);
                             $plagetemp->note_eau_dechet=$note_2/count($coms);
                             $plagetemp->note_dechet=$note_3/count($coms);
                         }
                         else {
                            $plagetemp->note_eau_chimique=5;
                            $plagetemp->note_eau_dechet=5;
                             $plagetemp->note_dechet=5;
                         }

            array_push($list_plage,$plagetemp);
        }
        return $list_plage;

    }

    function getById($id){
        $stm = db()->query("SELECT * FROM plage where id_plage=".$id);
        $dtlcom=new DTLCom();
        $rows = $stm->fetchAll(PDO::FETCH_NUM);
        $plagetemp=NULL;
        foreach($rows as $row) {
             $plagetemp=new Plage($row[0],$row[1],$row[2],$row[3]);
             $plagetemp->coms=$dtlcom->getByPlageId($row[0]);
             $coms=$dtlcom->getByPlageId($row[0]);
             $note_1=0;
             $note_2=0;
             $note_3=0;
             foreach($coms as $com){
                $note_1+=$com->note_com_eau_chimique;
                $note_2+=$com->note_com_eau_dechet;
                $note_3+=$com->note_com_dechet;
             }
             if(count($coms)>0){
                 $plagetemp->note_eau_chimique=$note_1/count($coms);
                 $plagetemp->note_eau_dechet=$note_2/count($coms);
                 $plagetemp->note_dechet=$note_3/count($coms);
             }
             else {
                $plagetemp->note_eau_chimique=5;
                $plagetemp->note_eau_dechet=5;
                 $plagetemp->note_dechet=5;
             }
        }
         if ($plagetemp!=NULL)
                    return $plagetemp;
                else return NULL;
    }

    function getByNom($nom){
            $stm = db()->query("SELECT * FROM plage where nom_plage='".$nom."'");
            $dtlcom=new DTLCom();
            $rows = $stm->fetchAll(PDO::FETCH_NUM);
            $plagetemp=NULL;
            foreach($rows as $row) {
                 $plagetemp=new Plage($row[0],$row[1],$row[2],$row[3]);
                 $plagetemp->coms=$dtlcom->getByPlageId($row[0]);
                 $coms=$dtlcom->getByPlageId($row[0]);
                 $note_1=0;
                 $note_2=0;
                 $note_3=0;
                 foreach($coms as $com){
                    $note_1+=$com->note_com_eau_chimique;
                    $note_2+=$com->note_com_eau_dechet;
                    $note_3+=$com->note_com_dechet;
                 }
                 if(count($coms)>0){
                     $plagetemp->note_eau_chimique=$note_1/count($coms);
                     $plagetemp->note_eau_dechet=$note_2/count($coms);
                     $plagetemp->note_dechet=$note_3/count($coms);
                 }
                 else {
                    $plagetemp->note_eau_chimique=5;
                    $plagetemp->note_eau_dechet=5;
                     $plagetemp->note_dechet=5;
                 }
            }
             if ($plagetemp!=NULL)
                        return $plagetemp;
                    else return NULL;
        }

    function setPlage($n,$p,$d){
        //return l'id nouvellement créer
        $p=$this->getByNom($n);
        if($p!=NULL)
        {
            return NULL;
        }
        else {
            db()->exec("insert into plage(nom_plage,photo_plage,description_plage)
                               values ('".$n."','".$p."','".$d."');");
                    return db()->lastInsertId();
        }

    }

}
