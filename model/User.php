<?php

class User
{
    private $id;
    private $name;
    private $email;
    private $password;
    private $role ;

    public function __construct($name, $email, $password,$role)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->role=$role;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name): void
    {
        $this->name = $name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email): void
    {
        $this->email = $email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password): void
    {
        $this->password = md5($password);
    }
    public function getId()
    {
        return $this->id;
    }
    public function getRole()
    {
        return $this->role;
    }
    public function setRole(string $role): void
    {
        $this->role = $role;
    }
}