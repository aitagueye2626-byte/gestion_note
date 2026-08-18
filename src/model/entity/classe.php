<?php
class Classe {
    private ?int $id;
    private ?etablissement $Etablissement;
    private string $nom;

    public function __construct(string $nom, ?etablissement $Etablissement = null, ?int $id = null) {
        $this->id = $id;
        $this->etablissement = $Etablissement;
        $this->nom = $nom;
    }
    public function getId(): ?int { return $this->id; }
    public function getIdEtablissement(): ?int { return $this->Etablissement; }
    public function getNom(): string { return $this->nom; }

    public function setId(?int $id): void { $this->id = $id; }
    public function setIdEtablissement(?etablissement $Etablissement): void { $this->Etablissement = $Etablissement; }
    public function setNom(string $nom): void { $this->nom = $nom; }
}
