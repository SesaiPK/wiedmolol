<?php

require 'Routing.php';
$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);
Router::get('', 'DefaultController');
Router::get('login','DefaultController');
Router::get('homepage', 'PostController');
Router::get('geraltofrivia', 'DefaultController');
Router::get('yenneferofvengerberg', 'DefaultController');
Router::get('gaunterodimm', 'DefaultController');
Router::get('emhyrvaremreis', 'DefaultController');
Router::post('login', 'SecurityController');
Router::post('register', 'SecurityController');
Router::post('logout', 'SecurityController');
Router::post('createPost', 'PostController');
Router::post('search', 'PostController');
Router::run($path);