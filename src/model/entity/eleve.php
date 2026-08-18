<?php

class Eleve
{
    private ?int $id;
    private string $matricule;
    private string $prenom;
    private string $nom;
    private string $numero;
    private ?string $adresse;

    private ?Tuteur $Tuteur;
    private ?Statut $statut;


    public function __construct(
        ?int $id = null,
        string $matricule,
        string $prenom,
        string $nom,
        string $numero,
        ?string $adresse = null,
        ?Tuteur $Tuteur = null,
        ?Statut $statut = null
        
    ) {
        $this->id = $id;
        $this->matricule = $matricule;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->numero = $numero;
        $this->adresse = $adresse;
        $this->Titeur = $Tuteur;
        $this->Statut = $statut;
    }

    public function getId(): ?int { return $this->id; }
    public function getMatricule(): string { return $this->matricule; }
    public function getPrenom(): string { return $this->prenom; }
    public function getNom(): string { return $this->nom; }
    public function getNumero(): string { return $this->numero; }
    public function getAdresse(): ?string { return $this->adresse; }
    public function getTuteur(): ?Tuteur { return $this->tuteur; }
    public function getStatut(): ?Statut { return $this->statut; }

    public function setId(?int $id): void { $this->id = $id; }
    public function setMatricule(string $matricule): void { $this->matricule = $matricule; }
    public function setPrenom(string $prenom): void { $this->prenom = $prenom; }
    public function setNom(string $nom): void { $this->nom = $nom; }
    public function setNumero(string $numero): void { $this->numero = $numero; }
    public function setAdresse(?string $adresse): void { $this->adresse = $adresse; }
    public function setTuteur(?Tuteur $tuteur): void { $this->tuteur = $tuteur; }
    public function setStatut(?Statut $statut): void { $this->statut = $statut; }

}