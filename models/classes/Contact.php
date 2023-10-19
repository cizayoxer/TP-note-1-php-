<?php

namespace models\classes;

class Contact
{
    private string $nomContact;
    private string $tel;
    private string $email;
    private int $idClient;

    public function __construct()
    {
    }

    public function getNom(): string
    {
        return $this->nomContact;
    }
    public function setNom(string $nom): void
    {
        $this->nomContact = $nom;
    }
    public function getTel(): string
    {
        return $this->tel;
    }
    public function setTel(string $tel): void
    {
        $this->tel = $tel;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function getIdClient(): string
    {
        return $this->idClient;
    }
    public function setIdClient(string $id): void
    {
        $this->idClient = $id;
    }
}