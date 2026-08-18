<?php
class AnneeScolaire {
    private ?int $id;
    private ?string $annee;
    private ?array $Inscription;

    public function __construct(?string $annee = null, ?int $id = null, ?array $Inscription = null) {
        $this->id = $id;
        $this->annee = $annee;
    }
    public function getId(): ?int { return $this->id; }
    public function getAnnee(): ?string { return $this->annee; }
    public function getInscriptions(): ?array { return $this->Inscription; }

    public function setId(?int $id): void { $this->id = $id; }
    public function setAnnee(?string $annee): void { $this->annee = $annee; }
    public function setInscriptions(?array $inscriptions): void { $this->Inscriptions = $Inscription; }
}


