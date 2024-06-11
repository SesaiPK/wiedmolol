<?php
require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../repository/UserRepository.php';

class SecurityController extends AppController
{
    public function login()
    {
        session_start();
        $userRepository = new UserRepository();
        if (!$this->isPost()) {
            return $this->render('login');
        }
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = $userRepository->getByEmail($email);
        if(!$user){
            return $this->render('login', ['messages' => ['User not found']]);
        }
        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['User with this email does not exist!']]);
        }
        if ($user->getPassword() !== $password) {
            return $this->render('login', ['messages' => ['Wrong password!']]);
        }
        $_SESSION['user'] = [
            'id' => $user->getId(), // Assuming the User object has a getId method
            'nickname' => $user->getNickname(), // Assuming the User object has a getNickname method
            'email' => $email,
        ];
        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/homepage");
    }
}