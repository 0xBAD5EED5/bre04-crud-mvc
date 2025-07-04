<?php

class User
{
    private ?int $id = null;

    public function __construct(
        private string $email,
        private string $first_name,
        private string $last_name
    ) {}

    // ID
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    // Email
    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    // FirstName
    public function getFirstName(): string
    {
        return $this->first_name;
    }
    public function setFirstName(string $first_name): void
    {
        $this->first_name = $first_name;
    }

    // LastName
    public function getLastName(): string
    {
        return $this->last_name;
    }
    public function setLastName(string $last_name): void
    {
        $this->last_name = $last_name;
    }
}
