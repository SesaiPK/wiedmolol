<?php
require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../repository/UserRepository.php';
require_once __DIR__ . '/../models/Post.php';
require_once __DIR__ . '/../repository/PostRepository.php';

class AdminController extends AppController
{
    private $userRepository;
    private $postRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
        $this->postRepository = new PostRepository();
    }

    public function adminPanel()
    {
        session_start();
        if ($_SESSION['user']['role'] != 1) {
            header('Location: /profile');
            exit();
        }

        $users = $this->userRepository->getAllUsers();
        $posts = $this->postRepository->getAllPosts();
        $this->render('adminPanel', ['users' => $users, 'posts' => $posts]);
    }

    public function deleteUser()
    {
        session_start();
        if ($_SESSION['user']['role'] != 1) {
            header('Location: /profile');
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userId = $_POST['user_id'];
            $this->userRepository->deleteUser($userId);
            header('Location: /adminPanel');
        }
    }


}