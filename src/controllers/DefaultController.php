<?php

require_once 'AppController.php';

class DefaultController extends AppController
{

    public function index()
    {
        //TODO display login.html
        $this->render('login');
    }

    public function start()
    {
        //TODO display start.html
        $this->render('start');
    }
}
