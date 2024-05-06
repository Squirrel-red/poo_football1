<?php

class Contrat
{
    private int $dateDebut;
    private Club $club;
    private Joueur $joueur;

    public function __construct(int $dateDebut, Club $club, Joueur $joueur)
    {
        $this->dateDebut = $dateDebut;
        $this->club = $club;
        $this->club->addContrats($this);
        $this->joueur = $joueur;
        $this->joueur->addContrats($this);

    }

    
    public function getDateDebut(): int
    {
        return $this->dateDebut;
    }

    public function setDateDebut(int $dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getClub(): Club
    {
        return $this->club;
    }

    public function setClub(Club $club)
    {
        $this->club = $club;

        return $this;
    }

    public function getJoueur(): Joueur
    {
        return $this->joueur;
    }

    public function setJoueur(Joueur $joueur)
    {
        $this->joueur = $joueur;

        return $this;
    }

    public function afficherClubs()
    {
        return $this->club . " (" . $this->dateDebut . ")";
    }

    public function afficherJoueurs()
    {
        return $this->joueur . " (" . $this->dateDebut . ")";
    }

}