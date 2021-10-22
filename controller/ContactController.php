<?php

class ContactController extends Controller
{
    function index()
    {
        $this->checkAuthenticatedUser();
        $this->layout = 'home';
    }

    function newmessage()
    {
        $this->layout = 'empty';
        $this->loadModel('Message');
        $this->Message->create(array(
            'date' => date('Y-m-d'),
            'titre' => $_POST['titre'],
            'message' => $_POST['message'],
        ));
        $this->set('msg', 'Message envoyé');
        header('Location: /myportfolio/contact?status=success');
    }
   

}

?>