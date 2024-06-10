<?php
require_once 'AppController.php';
class DefaultController extends AppController {
    public function index()
    {
        $this->render('login');
    }

    public function login() {
        $this->render('login');
    }
    public function homepage()
    {
        $this->render('homepage');
    }
    public function geraltofrivia()
    {
        $this->render('geraltofrivia');
    }
    public function yenneferofvengerberg()
    {
        $this->render('yenneferofvengerberg');
    }

    public function gaunterodimm()
    {
        $this->render('gaunterodimm');
    }
    public function emhyrvaremreis()
    {
        $this->render('emhyrvaremreis');
    }

}