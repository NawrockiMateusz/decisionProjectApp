<?php

require_once __DIR__.'/../repository/newUserRepository.php';

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];


newUserRepository::register($username,$email,$password);
