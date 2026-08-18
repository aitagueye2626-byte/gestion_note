<?php

class Role
{
    private ?int $id;
    private string $role;


    public function __construct(
        string $role,
        ?int $id = null,
    ) {
        $this->id = $id;
        $this->role = $role;
    }
     public function getId(): ?int { return $this->id; }
    public function getRole(): string { return $this->role; }

    public function setId(?int $id): void { $this->id = $id; }
    public function setRole(string $role): void { $this->role = $role; }


}