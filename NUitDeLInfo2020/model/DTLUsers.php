<?php
include "Users.php";
class DTLUsers {

    function getall(){
        $list_users=array();
        $stm = $db->query("SELECT * FROM users");

        $rows = $stm->fetchAll(PDO::FETCH_NUM);

        foreach($rows as $row) {
            array_push($list_users,new Users($row[0],$row[1],$row[2]);

        }
        return $list_users;

    }

    function getbyid($id){
        $stm = $db->query("SELECT * FROM users where id_user=".$id);
        $rows = $stm->fetchAll(PDO::FETCH_NUM);
        foreach($rows as $row) {
            $user=new Users($row[0],$row[1],$row[2];
        }
        return $user;
    }

    function setUsers($pseudo,$mdp){
        //return l'id nouvellement créer
        $db->exec("insert into USERS(pseudo,mdp) values('".$pseudo."','".$mdp."'),");
        return $db->lastInsertId();
    }

}
