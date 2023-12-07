<?php

namespace App\Entity;

class Course {

    protected ?string $id = null;
    protected string $name;
    protected string $description;
    protected ?string $date = null;

    




        // private $connexion;

    // public function __construct($connexion)
    // {
    //     $this->connexion = $connexion;
    // }

    // public function getAllCourses() {
    //     $result = $this->connexion->query("SELECT * FROM course");

    //     if ($result) {
    //         $courses = $result->fetch_all(MYSQLI_ASSOC);
    //         return $courses;
    //     } else {
    //         return array();
    //     }
    // }

    /**
     * Get the value of id
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(?string $id): self
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
     * Get the value of description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of date
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Set the value of date
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;

        return $this;
    }


}