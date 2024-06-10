<?php
require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';

class PostController extends AppController
{
    public function createPost()
    {
        $this->render('createPost');
    }
}