<?php

class Controller
{
    public $request;
    public $vars = array();
    public $layout = 'default';
    private $rendered = false;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function render($view)
    {
        if ($this->rendered) {
            return false;
        }
        extract($this->vars);
        if (strpos($view, '/') === 0) {
            $view = ROOT . DS . 'view' . $view . '.php';
        } else {
            $view = ROOT . DS . 'view' . DS . $this->request->controller . DS . $view . '.php';
        }
        ob_start();
        require($view);
        $content_for_layout = ob_get_clean();
        require ROOT . DS . 'view' . DS . 'layout' . DS . $this->layout . '.php';
        $this->rendered = true;
    }

    public function set($key, $value = null)
    {
        if (is_array($key)) {
            $this->vars += $key;
        } else {
            $this->vars[$key] = $value;
        }
    }

    public function loadModel($name)
    {
        $file = ROOT . DS . 'model' . DS . $name . '.php';
        require_once($file);
        if (!isset($this->$name)) {
            $this->$name = new $name();
        } else {
            echo 'pas chargé';
        }
    }

    public function checkAuthenticatedUser()
    {
        session_start();
        if (!isset($_SESSION["currentUser"]) && $this->request->url !== '/users/login') {
            header('location: /myportfolio/users/login');
        }
    }
}

?>