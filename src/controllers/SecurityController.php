<?php
require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../repository/UserRepository.php';

class SecurityController extends AppController
{
    private $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }

    public function login()
    {
        session_start();
        if (!$this->isPost()) {
            return $this->render('login');
        }
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = $this->userRepository->getByEmail($email);
        if (!$user) {
            return $this->render('login', ['messages' => ['User not found']]);
        }
        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['User with this email does not exist!']]);
        }
        if (!password_verify($password, $user->getPassword())) {
            return $this->render('login', ['messages' => ['Wrong password!']]);
        }
        $_SESSION['user'] = [
            'id' => $user->getId(), // Assuming the User object has a getId method
            'nickname' => $user->getNickname(), // Assuming the User object has a getNickname method
            'email' => $email,
            'role' => $user->getRole(),
        ];
        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/homepage");
    }

    public function register()
    {
        if (!$this->isPost()) {
            return $this->render('register');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmedPassword = $_POST['confirmedPassword'];
        $name = $_POST['name'];

        if ($password !== $confirmedPassword) {
            return $this->render('register', ['messages' => ['Please provide proper password']]);
        }
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $user = new User(null, $email, $hashedPassword, $name, 0);

        $this->userRepository->addUser($user);

        return $this->render('login', ['messages' => ['You\'ve been succesfully registrated!']]);
    }

    public function logout(): void
    {
        session_start();
        session_destroy();
        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/homepage");
    }

    public function profile()
    {
        session_start();
        if (!isset($_SESSION['user'])) {
            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/login");
        }
        $email = $_SESSION['user']['email'];
        $user = $this->userRepository->getByEmail($email);

        $this->render('profile', ['user' => $user]);
    }

    public function changePassword()
    {
        session_start();
        if (!$this->isPost()) {
            return $this->render('profile');
        }
        $currentPassword = $_POST['current_password'];
        $newPassword = $_POST['new_password'];
        $userId = $_SESSION['user']['id'];
        $email = $_SESSION['user']['email'];
        $user = $this->userRepository->getByEmail($email);

        if ($this->userRepository->verifyPassword($userId, $currentPassword)) {
            $this->userRepository->updatePassword($userId, password_hash($newPassword, PASSWORD_BCRYPT));
            header('Location: /login');
        } else {
            $this->render('profile', ['user' => $user, 'messages' => ['Wrong current password']]);
        }

    }

    public function deleteAccount()
    {
        if (!$this->isPost()) {
            return $this->render('profile');
        }
        session_start();
        $userId = $_SESSION['user']['id'];
        $this->userRepository->deleteUser($userId);
        session_destroy();
        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/homepage");
    }


}