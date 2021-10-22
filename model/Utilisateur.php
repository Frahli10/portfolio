<?php

class Utilisateur extends Model
{

    public function create($req)
    {
        $sql = 'INSERT INTO utilisateurs (nom, date_naissance,email, password, salt) VALUES (:nom,:date_naissance,:email,:password,:salt)';
        $pre = $this->db->prepare($sql);
        $r = $pre->execute(array(
            'nom' => $req['nom'],
            'date_naissance' => $req['date_naissance'],
            'password' => $req['password'],
            'salt' => $req['salt'],
            'email' => $req['email']
        ));

        return $r;
    }

}

?>