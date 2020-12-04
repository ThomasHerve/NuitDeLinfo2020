<?php
include_once "Com.php";
class DTLCom {

    function getAll(){
        $list_com=array();
        $stm = db()->query("SELECT * FROM com");

        $rows = $stm->fetchAll(PDO::FETCH_NUM);

        foreach($rows as $row) {
            array_push($list_com,new Comm($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6]));
        }
        return $list_com;

    }

    function getById($id){
        $stm = db()->query("SELECT * FROM com where id_commentaire=".$id);
        $rows = $stm->fetchAll(PDO::FETCH_NUM);
        foreach($rows as $row) {
            $com=new Comm($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6]);
        }
        return $com;
    }

    function getByPlageId($id){
            $list_com=array();
            $stm = db()->query("SELECT * FROM com where id_plage_com=".$id);
            $rows = $stm->fetchAll(PDO::FETCH_NUM);
            foreach($rows as $row) {
                 array_push($list_com,new Comm($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6]));
            }
            return $list_com;
        }

    function getByUserId($id){
            $list_com=array();
            $stm = db()->query("SELECT * FROM com where id_user_com=".$id);
            $rows = $stm->fetchAll(PDO::FETCH_NUM);
            foreach($rows as $row) {
                array_push($list_com,new Comm($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6]));
            }
            return $list_com;
        }

    function setCom($c,$idu,$idp,$nec,$ned,$nd){
        //return l'id nouvellement créer
        db()->exec("insert into com(comm,id_user_com,id_plage_com,note_com_eau_chimique,note_com_eau_dechet,note_com_dechet)
                    values ('".$c."',".$idu.",".$idp.",".$nec.",".$ned.",".$nd.");");
        return db()->lastInsertId();
    }

}
