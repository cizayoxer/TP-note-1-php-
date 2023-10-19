<?php

namespace models;

use models\base\SQL;
use models\classes\Adresse;

class AdresseModele extends SQL
{
    public function __construct()
    {
        parent::__construct('adresse', 'id');
    }

    /**
     * Liste les adresses d'un client
     * @param string $clientId
     * @return Adresse[]
     */
    public function lesAdressesClient(string $clientId): array
    {
        $query = "SELECT * FROM adresse WHERE clientId = ?";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$clientId]);
        return $stmt->fetchAll(\PDO::FETCH_CLASS, Adresse::class);
    }

    /**
     * Ajoute une adresse en base pour le client $clientId
     * @param Adresse $uneAdresse
     * @return string
     */
    public function creerAdresseClient(Adresse $uneAdresse): string
    {
        $query = "INSERT INTO adresse (id, nom, rue, codePostal, ville, clientId) VALUE (NULL, ?, ?, ?, ?, ?)";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$uneAdresse->getNom(), $uneAdresse->getRue(), $uneAdresse->getCodePostal(), $uneAdresse->getVille(), $uneAdresse->getClientId()]);
        return $this->getPdo()->lastInsertId();
    }
    public function detacherAdresse(int $idAdresse, int $idClient){
        $query = "DELETE FROM adresse WHERE `adresse`.`id` = ? AND `adresse`.`clientId` = ?";
        $stmt = SQL::getPdo()->prepare($query);
        return $stmt->execute([$idAdresse,$idClient]);
    }
}