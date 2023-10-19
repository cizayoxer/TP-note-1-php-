<?php
namespace models;

use models\base\SQL;
use models\classes\Adresse;
use models\classes\Contact;

class ContactModele extends SQL
{
    public function __construct()
    {
        parent::__construct('votre-table', 'cle-de-votre-table');
    }

    public function lesContactClient(string $clientId): array
    {
        $query = "SELECT contact.* FROM contact WHERE idClient = ?";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$clientId]);
        return $stmt->fetchAll(\PDO::FETCH_CLASS, Contact::class);
    }
    public function creerContactClient(Contact $unContact): string
    {
        $query = "INSERT INTO contact (nomContact, tel, email, idCLient) VALUE (?, ?, ?, ?)";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$unContact->getNom(), $unContact->getTel(), $unContact->getEmail(),$unContact->getIdClient()]);
        return $this->getPdo()->lastInsertId();
    }
    public function supprimerContact(string $nomContact, int $idClient){
        $query = "DELETE FROM contact WHERE `contact`.`nomContact` = ? AND `contact`.`idClient` = ?";
        $stmt = SQL::getPdo()->prepare($query);
        return $stmt->execute([$nomContact,$idClient]);
    }
}