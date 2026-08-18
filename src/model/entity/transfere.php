<?php
class Inscription {
    private int $id;
    private Classe $classe;

    public function __construct(int $id, Classe $classe) {
        $this->id = $id;
        $this->classe = $classe;
    }

    public function getId(): int { return $this->id; }
    public function getClasse(): Classe { return $this->classe; }

    public function setId(int $id): void { $this->id = $id; }
    public function setClasse(Classe $classe): void { $this->classe = $classe; }
}