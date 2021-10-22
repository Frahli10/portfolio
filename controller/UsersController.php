<?php

class UsersController extends Controller
{

    public function all()
    {
        $this->loadModel('Utilisateur');
        $users = $this->Utilisateur->find(array());
        $this->set('users', $users);
    }

    public function register()
    {
        $this->layout = 'register';
    }

    public function create()
    {
        $salt = $this->generateSalt();
        $this->layout = 'empty';
        $this->loadModel('Utilisateur');
        $users = $this->Utilisateur->create(array(
            'nom' => $_POST['nom'],
            'email' => $_POST['email'],
            'date_naissance' => $_POST['date'],
            'salt' => $salt,
            'password' => hash('sha256', $_POST['password'] . $salt),
        ));
        $this->set('msg', 'Utilisateur crée avec succès');

    }

    public function login()
    {
        $this->checkAuthenticatedUser();
        $this->layout = 'empty';
        $this->render('login');
    }

    public function confirmlogin()
    {
        $this->loadModel('Utilisateur');
        $user = $this->Utilisateur->findFirst(array(
            'conditions' => 'nom=\'' . $_POST['nom'] . '\''
        ));
        $this->verifyPassword($user);
        $this->layout = 'empty';
    }

    private function generateSalt()
    {
        $randomByte = random_bytes(8);
        return hash('sha256', $randomByte);
    }

    private function verifyPassword($user)
    {
        if ($user !== false) {
            $enteredPassword = hash('sha256', $_POST['password'] . $user->salt);
            if ($enteredPassword !== $user->password) {
                $this->set('error', 'Le mot de passe est erroné');
                header('Location: /myportfolio/users/login?message=error');
            } else {
                session_start();
                $_SESSION['currentUser'] = $user;
                header('Location: /myportfolio/contact');
            }
        } else {
            $this->set('error', 'Le mot de passe est erroné');
            header('Location: /myportfolio/users/login?message=error');
        }
    }
}
