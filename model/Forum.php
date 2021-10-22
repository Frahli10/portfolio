<?php

class Forum extends Model
{
    public function findAllWithUser()
    {
        $sql = 'SELECT f.id, f.titre, f.article, u.nom FROM forums AS f JOIN utilisateurs AS u ON u.id=f.user_id';
        $pre = $this->db->prepare($sql);
        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_OBJ);
    }
}

?>