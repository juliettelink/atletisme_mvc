<?php 

namespace App\Entity;


class CoureurModel{


    protected ?int $id = null;
    protected string $name;
    protected string $last_name;
    protected string $nationalite;
    protected string $date; 

    // private $connexion;

    // public function __construct($connexion)
    // {
    //     $this->connexion = $connexion;
    // }

    // public function getAllCoureurs() {
    //     $result = $this->connexion->query("SELECT * FROM coureur");

    //     if ($result) {
    //         $coureurs = $result->fetch_all(MYSQLI_ASSOC);
    //         return $coureurs;
    //     } else {
    //         return array();
    //     }
    // }
    


    /**
     * Get the value of id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of last_name
     */
    public function getLastName(): string
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name
     */
    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Get the value of nationalite
     */
    public function getNationalite(): string
    {
        return $this->nationalite;
    }

    /**
     * Set the value of nationalite
     */
    public function setNationalite(string $nationalite): self
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get the value of date
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * Set the value of date
     */
    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

}
