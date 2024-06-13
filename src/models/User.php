<?php
class User {
    private ?int $id;
    private string $email;
    private string $password;
    private string $nickname;
    public function __construct(
        ?int $id,
        string $email,
        string $password,
        string $nickname
    ) {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->nickname = $nickname;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function getPassword():string
    {
        return $this->password;
    }
    public function getNickname(): string{
        return $this->nickname;
    }
    public function getId(): int{
        return $this->id;
    }

}