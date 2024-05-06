<?php


class Pays
{
    private string $nomPays;
    private array $clubs;

    public function __construct(string $nomPays)
    {
        $this->nomPays = $nomPays;
        $this->clubs = [];
    }

    public function getNomPays(): string
    {
        return $this->nomPays;
    }

    public function setNomPays(string $nomPays)
    {
        $this->nomPays = $nomPays;

        return $this;
    }

    public function getClubs()
    {
        return $this->clubs;
    }

    public function setClubs($clubs)
    {
        $this->clubs = $clubs;

        return $this;
    }

    public function addClubs(Club $club)
    {
        $this->clubs[] = $club;
    }


    public function __toString()
    {
        return $this->nomPays;
    }

    public function getInfos()
    {
        $result = "<h2>" . $this . "</h2>";
        foreach ($this->clubs as $club) {
            $result .= "<p>" . $club . "</p>";
        }

        $result .= "<br>";
        return $result;
    }

}