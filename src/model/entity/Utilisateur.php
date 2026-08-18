<?php

class Utilisateur
{
    private ?int $id;
    private string $prenom;
    private string $nom;
    private string $login;
    private string $password;

    private ?Role $Role;

    public function __construct(
        ?int $id = null,
        string $prenom,
        string $nom,
        string $login,
        string $password,
        ?Role $Role = null,
       
    ) {
        $this->id = $id;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->login = $login;
        $this->password = $password;
        $this->role = $role;
    }
    public function getId(): ?int { return $this->id; }
    public function getPrenom(): string { return $this->prenom; }
    public function getNom(): string { return $this->nom; }
    public function getLogin(): string { return $this->login; }
    public function getPassword(): string { return $this->password; }
    public function getRole(): ?Role { return $this->role; }

    public function setId(?int $id): void { $this->id = $id; }
    public function setPrenom(string $prenom): void { $this->prenom = $prenom; }
    public function setNom(string $nom): void { $this->nom = $nom; }
    public function setLogin(string $login): void { $this->login = $login; }
    public function setPassword(string $password): void { $this->password = $password; }
    public function setRole(?Role $role): void { $this->role = $role; }

}