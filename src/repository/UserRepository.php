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
        return new User($user['id'], $user['email'], $user['password'], $user['nickname'], $user['role']);
    }

    public function addUser(User $user)
    {
        $stmt = $this->db->connect()->prepare('
            INSERT INTO users (email, password, nickname,role)
            VALUES (?, ?, ?,?)
        ');

        $stmt->execute([
            $user->getEmail(),
            $user->getPassword(),
            $user->getNickname(),
            $user->getRole()
        ]);
    }

    public function getAllUsers()
    {
        $stmt = $this->db->connect()->prepare('SELECT * FROM users');
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $result = [];
        foreach ($users as $user) {
            if ($user['role'] == '0') {
                $result[] = new User($user['id'], $user['email'], $user['password'], $user['nickname'], $user['role']);
            }
        }
        return $result;
    }

    public function deleteUser(int $userId)
    {
        $stmt = $this->db->connect()->prepare('DELETE FROM users WHERE id = :id;');
        $stmt->bindValue(':id', $userId, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function verifyPassword($id, $currentPassword)
    {
        $stmt = $this->db->connect()->prepare('SELECT password FROM users WHERE id = :id');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            return password_verify($currentPassword, $user['password']);
        }
        return false;
    }

    public function updatePassword($id, $newPassword)
    {
        $stmt = $this->db->connect()->prepare('UPDATE users SET password = :newPassword WHERE id = :id');
        $stmt->bindParam(':newPassword', $newPassword, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

}