<?php
class Player {
    private string $lastname;
    private string $firstname;
    private string $position;
    private int $number;

    /**
     * @param lastname Nom de famille du Joueur
     */
    public function __construct(string $lastname, string $firstname)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     */ 
    public function setFirstname($firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * Get the value of position
     */ 
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * Set the value of position
     *
     */ 
    public function setPosition($position): void
    {
        $this->position = $position;
    }

    /**
     * Get the value of number
     */ 
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * Set the value of number
     */ 
    public function setNumber(int $number): void
    {
        if($number < 100 && $number >= 0)
            $this->number = $number;
    }
}