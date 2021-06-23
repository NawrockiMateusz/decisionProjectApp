<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';


class SecurityController extends AppController
{
    public function login()
    {
        $sessionControll = new SessionController();
        $userRepository = new UserRepository();

        if(!$this->isPost()){
        return $this->render('login');
        }

        $email = $_POST["email"];
        $password = md5($_POST["password"]);

        $user = $userRepository->getUser($email);

        if(!$user){
            return $this->render('login', ['messages' => ['User not exist']]);
        }

        if ($user->getEmail() !== $email){
            return $this->render('login', ['messages' => ['User with this email not exist!']]);
        }

        if ($user->getPassword() !== $password) {
            return $this->render('login', ['messages' => ['Wrong password']]);
        }

        $sessionControll->setCookie($user->getEmail());


        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/welcome");


    }

    public function logOut(){
        $sessionControll = new SessionController();
        $sessionControll->deleteCoockieInDatabase();

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/login");
    }
}
