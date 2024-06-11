<?php
require_once 'AppController.php';
require_once __DIR__ . '/../models/Post.php';
require_once __DIR__ . '/../repository/PostRepository.php';

class PostController extends AppController
{
    private $messages = [];
    private $postRepository;

    public function __construct()
    {
        parent::__construct();
        $this->postRepository = new PostRepository();
    }

    public function homepage()
    {
        $posts = $this->postRepository->getAllPosts();
        $this->render('homepage', ['posts' => $posts]);
    }

    public function createPost()
    {
        session_start();
        if ($this->isPost()) {
            if (isset($_SESSION['user']['id'])) {
                $authorId = $_SESSION['user']['id']; // Get the user ID from the session
            } else {
                $this->messages[] = 'Author information is missing in session.';
                return $this->render('createPost', ['messages' => $this->messages]);
            }
            $post = new Post($_POST['title'], $_POST['content'],$authorId);
            $this->postRepository->addPost($post);
            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/homepage");
            exit();

        }
        return $this->render('createPost', ['messages' => $this->messages]);
    }

}
