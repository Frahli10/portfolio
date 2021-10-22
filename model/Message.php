<?php

class Message extends Model
{
    public function create($req)
    {
        session_start();
        $sql = 'INSERT INTO messages (date, title, message, user_id, `read`) VALUES (:date,:titre,:message, :user_id, :rd)';
        $pre = $this->db->prepare($sql);
        $params = array(
            'date' => $req['date'],
            'titre' => $req['titre'],
            'message' => $req['message'],
            'user_id' => $_SESSION['currentUser']->id,
            'rd' => 0
        );
        print_r($params);
        $r = $pre->execute($params);
    }

}

?>