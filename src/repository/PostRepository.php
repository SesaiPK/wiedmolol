<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Post.php';


class PostRepository extends Repository
{
    public function getPost(int $id): ?Post
    {
        $statement = $this->db->connect()->prepare("SELECT * FROM posts WHERE id = :id");
        $statement->bindValue(':id', $id,PDO::PARAM_INT);
        $statement->execute();
        $post = $statement->fetch(PDO::FETCH_ASSOC);
        if (!$post) {
            return null;
        }
        return new Post($post['title'], $post['content'], $post['author']);
    }
    public function addPost(Post $post): void{
        $date=new DateTime();
        $statement=$this->db->connect()->prepare("insert into posts(title,content,author,date) values(?,?,?,?)");
        $statement->execute([$post->getTitle(),$post->getContent(),$post->getAuthorName(),$date->format("Y-m-d H:i:s")]);
    }
    public function getAllPosts()
    {
        $stmt = $this->db->connect()->prepare('SELECT posts.*, users.nickname FROM posts JOIN users ON posts.author = users.id ORDER BY id desc ');
        $stmt->execute(); // Execute the statement
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $posts = [];
        foreach ($results as $result) {
            $posts[] = new Post($result['title'], $result['content'], $result['nickname']);
        }

        return $posts;
    }
}