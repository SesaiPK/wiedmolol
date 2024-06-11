<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/User.php';


class UserRepository extends Repository
{
    public function getByEmail($email): ?User
    {
        $statement = $this->db->connect()->prepare("SELECT * FROM users WHERE email = :email");
        $statement->bindValue(':email', $email, PDO::PARAM_STR);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        if (!$user) {
            return null;
        }
        return new User($user['id'] ,$user['email'], $user['password'], $user['nickname']);
    }
}