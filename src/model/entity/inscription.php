<?php
class Inscription {
    private ?int $id;
    private ?Eleve $Eleve;
    private ?AnneeScolaire $AnneeeScolaire;
    private ?Classe $Classe;
    private ?Utilisateur $Utilisateur;

    public function __construct(
         ?int $id = null,
        ?Eleve $Eleve = null,
        ?getAnneeScolaire $AnneeScolaire = null,
        ?Classe $Classe = null,
        ?Utilisateur $Utilisateur = null
       
    ) {
        $this->id = $id;
        $this->Eleve = Eleve;
        $this->AnneeScolaire = $AnneeScolaire;
        $this->Classe = $Classe;
        $this->Utilisateur = $Utilisateur;
    }
    public function getId(): ?int { return $this->id; }
    public function getEleve(): ?Eleve { return $this->eleve; }
    public function getAnneeScolaire(): ?AnneeScolaire { return $this->AnneeScolaire; }
    public function getClasse(): ?Classe { return $this->Classe; }
    public function getUtilisateur(): ?Utilisateur { return $this->Utilisateur; }

    public function setId(?int $id): void { $this->id = $id; }
    public function setEleve(?eleve $Eleve): void { $this->eleve = Eleve; }
    public function setAnneeScolaire(?AnneeScolaire $AnneeScolaire): void { $this->AnneeScolaire = $AnneeScolaire; }
    public function setClasse(?Classe $Classe): void { $this->Classe = $Classe; }
    public function setUtilisateur(?Utilisateur $Utilisateur): void { $this->utilisateur = $utilisateur; }
}

