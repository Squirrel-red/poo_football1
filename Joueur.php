<?php

class Joueur
{
    private string $nomJoueur;
    private string $prenomJoueur;
    private DateTime $dateNaissance;
    private array $contrats;
    private Pays $pays;


    
    public function __construct(string $nomJoueur, string $prenomJoueur, string $dateNaissance, Pays $pays)
    {
        $this->nomJoueur = $nomJoueur;
        $this->prenomJoueur = $prenomJoueur;
        $this->dateNaissance = new dateTime($dateNaissance);
        $this->contrats = [];
        $this->pays = $pays;

    }

    public function getNomJoueur(): string
    {
        return $this->nomJoueur;
    }

    public function setNomJoueur(string $nomJoueur)
    {
        $this->nomJoueur = $nomJoueur;

        return $this;
    }

    public function getPrenomJoueur(): string
    {
        return $this->prenomJoueur;
    }

    public function setPrenomJoueur(string $prenomJoueur)
    {
        $this->prenomJoueur = $prenomJoueur;

        return $this;
    }

    public function getDateNaissance(): DateTime
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(DateTime $dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getContrats()
    {
        return $this->contrats;
    }

    public function setContrats($contrats)
    {
        $this->contrats = $contrats;

        return $this;
    }

    public function addContrats(Contrat $contrat)
    {
        $this->contrats[] = $contrat;
    }

    public function getPays(): Pays
    {
        return $this->pays;
    }

    public function setPays(Pays $pays)
    {
        $this->pays = $pays;

        return $this;
    }

    public function getAge()
    {
        $now = new DateTime();
        $interval = $this->dateNaissance->diff($now);
        return $interval->format("%Y");
    }


    public function __toString()
    {
        return $this->prenomJoueur . " " . $this->nomJoueur;
    }


    public function getInfos()
    {
        $result = "<h2>" . $this . "</h2>
                <p>" . $this->pays . " - " . $this->getAge() . " ans</p>";
        foreach ($this->contrats as $contrat) {
            $result .= "<p>" . $contrat->afficherClubs() . "</p>";
        }

        $result .= "<br>";
        return $result;

    }

}