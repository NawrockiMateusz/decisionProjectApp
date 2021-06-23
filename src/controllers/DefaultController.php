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

    public function register()
    {
        //TODO display start.php
        $this->render('register');
    }

    public function team()
    {
        //TODO display start.php
        $this->render('team');
    }

    public function welcome()
    {
        //TODO display start.php
        $this->render('welcome');
    }

    public function contact()
    {
        //TODO display start.php
        $this->render('contact');
    }


}
