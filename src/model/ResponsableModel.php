
CREATE TABLE IF NOT EXISTS role (
    id   SERIAL PRIMARY KEY,
    nom  VARCHAR(50) NOT NULL UNIQUE
);

CREATE TABLE IF NOT EXISTS utilisateur (
    id             SERIAL PRIMARY KEY,
    nom            VARCHAR(100) NOT NULL,
    prenom         VARCHAR(100) NOT NULL,
    email          VARCHAR(150) NOT NULL UNIQUE,
    mot_de_passe   VARCHAR(255) NOT NULL,
    role_id        INT NOT NULL REFERENCES role(id)
);

CREATE TABLE IF NOT EXISTS annee_scolaire (
    id           SERIAL PRIMARY KEY,
    libelle      VARCHAR(20) NOT NULL UNIQUE,
    date_debut   DATE,
    date_fin     DATE,
    actif        BOOLEAN DEFAULT FALSE
);

CREATE TABLE IF NOT EXISTS classe (
    id       SERIAL PRIMARY KEY,
    nom      VARCHAR(50) NOT NULL,
    niveau   VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS eleve (
    id               SERIAL PRIMARY KEY,
    matricule        VARCHAR(30) NOT NULL UNIQUE,
    nom              VARCHAR(100) NOT NULL,
    prenom           VARCHAR(100) NOT NULL,
    numero        VARCHAR(10) NOT NULL,
REATE TABLE IF NOT EXISTS responsable (
    id               SERIAL PRIMARY KEY,
    matricule        VARCHAR(30) NOT NULL UNIQUE,
    nom              VARCHAR(100) NOT NULL,
    prenom           VARCHAR(100) NOT NULL,
    date_naissance   DATE,
    sexe             VARCHAR(10)
);

CREATE TABLE IF NOT EXISTS matiere (
    id            SERIAL PRIMARY KEY,
    nom           VARCHAR(100) NOT NULL UNIQUE,
    coefficient   NUMERIC(4,2) DEFAULT 1
);

CREATE TABLE IF NOT EXISTS matiere_classe (
    id           SERIAL PRIMARY KEY,
    matiere_id   INT NOT NULL REFERENCES matiere(id),
    classe_id    INT NOT NULL REFERENCES classe(id),
    UNIQUE(matiere_id, classe_id)
);


CREATE TABLE IF NOT EXISTS inscription (
    id                   SERIAL PRIMARY KEY,
    eleve_id             INT NOT NULL REFERENCES eleve(id),
    classe_id            INT NOT NULL REFERENCES classe(id),
    annee_scolaire_id    INT NOT NULL REFERENCES annee_scolaire(id),
    date_inscription     DATE DEFAULT CURRENT_DATE,
    statut               VARCHAR(30) DEFAULT 'active',
    UNIQUE(eleve_id, annee_scolaire_id)
);

CREATE TABLE IF NOT EXISTS evaluation (
    id                   SERIAL PRIMARY KEY,
    inscription_id       INT NOT NULL REFERENCES inscription(id),
    matiere_classe_id    INT NOT NULL REFERENCES matiere_classe(id),
    periode_id           INT NOT NULL REFERENCES periode(id),
    utilisateur_id       INT NOT NULL REFERENCES utilisateur(id),
    type_evaluation      VARCHAR(20) NOT NULL
        CHECK (type_evaluation IN ('Devoir1', 'Devoir2', 'Composition')),
    note                 NUMERIC(4,2) NOT NULL
        CHECK (note >= 0 AND note <= 20),
    UNIQUE(inscription_id, matiere_classe_id, periode_id, type_evaluation)
);

CREATE INDEX IF NOT EXISTS idx_inscription_classe ON inscription(classe_id);
CREATE INDEX IF NOT EXISTS idx_inscription_annee ON inscription(annee_scolaire_id);
CREATE INDEX IF NOT EXISTS idx_evaluation_inscription ON evaluation(inscription_id);
CREATE INDEX IF NOT EXISTS idx_evaluation_periode ON evaluation(periode_id);