<?php

require_once 'AppController.php';

class DefaultController extends AppController
{

    public function index()
    {
        //TODO display login.php
        $this->render('login');
    }

    public function login()
    {
        //TODO display login.php
        $this->render('login');
    }


    public function start()
    {
        //TODO display start.php
        $this->render('start');
    }
}
