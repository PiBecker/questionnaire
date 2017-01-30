<?php

use Middleware\AuthMiddleware;
use Middleware\GuestMiddleware;

//GuestMiddleware
$app->group('', function(){

  //Auth
  $this->get('/auth/signup', 'AuthController:getSignUp')->setname('auth.signup');
  $this->post('/auth/signup', 'AuthController:postSignUp');

  $this->get('/auth/signin', 'AuthController:getSignIn')->setname('auth.signin');
  $this->post('/auth/signin', 'AuthController:postSignIn');

})->add(new GuestMiddleware($container));

//AuthMiddleware
$app->group('', function(){

  //Auth
  $this->get('/auth/signout', 'AuthController:getSignOut')->setname('auth.signout');

  $this->get('/auth/password/change', 'PasswordController:getChangePassword')->setname('auth.password.change');
  $this->post('/auth/password/change', 'PasswordController:postChangePassword');



})->add(new AuthMiddleware($container));

//Profil
$app->get('/profil', 'ProfilController:index')->setname('auth.profil');

$app->get('/', 'HomepageController:index')->setname('home');
