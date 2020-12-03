<?php
include_once "Users.php";
class DTLUsers {
    //TODO rajouter des majuscules

    function getall(){
        $list_users=array();
        $stm = db()->query("SELECT * FROM users");

        $rows = $stm->fetchAll(PDO::FETCH_NUM);

        foreach($rows as $row) {
            array_push($list_users,new Users($row[0],$row[1],$row[2]));

        }
        return $list_users;

    }

    function getbyid($id){
        $stm = db()->query("SELECT * FROM users where id_user=".$id);
        $rows = $stm->fetchAll(PDO::FETCH_NUM);
        $user=NULL;
        foreach($rows as $row) {
            $user=new Users($row[0],$row[1],$row[2]);
        }
        if ($user!=NULL)
            return $user;
        else return NULL;
    }

    function getbyPseudo($p){
            $stm = db()->query("SELECT * FROM users where pseudo='".$p."'");
            $rows = $stm->fetchAll(PDO::FETCH_NUM);
            $user=NULL;
            foreach($rows as $row) {
                $user=new Users($row[0],$row[1],$row[2]);
            }
            if ($user!=NULL)
                return $user;
            else return NULL;
        }

        //return l'id nouvellement créer
    function setUsers($pseudo,$mdp){
        $p=$this->getbyPseudo($pseudo);
        if($p!=NULL)
        {
            return NULL;
        }
        else {
            db()->exec("insert into USERS(pseudo,mdp) values('".$pseudo."','".$mdp."');");

            return db()->lastInsertId();
        }
    }

}
