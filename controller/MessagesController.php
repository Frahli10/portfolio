<?php

class MessagesController extends Controller
{
    function view()
    {
        $this->loadModel('Message');
        $post = $this->Forum->findFirst(array(
            'conditions' => 'id=1'
        ));
        $this->set('forum', $post);
        $this->render('index');
    }

    function index()
    {

    }


    function all()
    {
        //$this->layout = 'home';
        $this->loadModel('Message');
        $messages = $this->Message->find(array(
        ));
        $this->set('messages', $messages);
    }

    function forum($id)
    {
        $this->layout = 'home';
        $this->loadModel('Forum');
        $post = $this->Forum->findFirst(array(
            'conditions' => 'id=' . $id
        ));
        $this->set('forum', $post);
        $this->render('forum');
    }
}

?>