<?php

class Club
{
    private string $nomClub;
    private DateTime $dateCreation;
    private array $contrats;
    private Pays $pays;
    

    public function __construct(string $nomClub, string $dateCreation, Pays $pays)
    {
        $this->nomClub = $nomClub;
        $this->dateCreation = new DateTime($dateCreation);
        $this->contrats = [];
        $this->pays = $pays;
        $this->pays->addClubs($this);

    }

    public function getNomClub(): string
    {
        return $this->nomClub;
    }

    public function setNomClub(string $nomClub)
    {
        $this->nomClub = $nomClub;

        return $this;
    }

    public function getDateCreation(): DateTime
    {
        return $this->dateCreation;
    }

    public function setDateCreation(DateTime $dateCreation)
    {
        $this->dateCreation = $dateCreation;

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

    public function getPays(): Pays
    {
        return $this->pays;
    }

    public function setPays(Pays $pays)
    {
        $this->pays = $pays;

        return $this;
    }


    public function addContrats(Contrat $contrat)
    {
        $this->contrats[] = $contrat;
    }

    public function __toString()
    {
        return $this->nomClub . "<br>";
    }

    public function getInfos()
    {
        $result = "<h2>" . $this . "</h2>
                <p>" . $this->pays->getNomPays() . " - " . $this->dateCreation->format("Y") . "</p>";
        foreach ($this->contrats as $contrat) {
            $result .= "<p>" . $contrat->afficherJoueurs() . "</p>";
        }

        $result .= "<br>";
        return $result;
    }
}