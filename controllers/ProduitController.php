<?php
namespace controllers;

use controllers\base\WebController;
use models\ProduitsModele;
use models\TodoModel;
use utils\Template;

class ProduitController extends WebController
{
    private $modeleProduits;
    function __construct(){
        $this->modeleProduits = new ProduitsModele();
    }

    function liste($id = 0): string
    {
        $listeProduits = $this->modeleProduits->allProduits();
        return Template::render(
            "views/produits.php",
            array('listeProduits' => $listeProduits, 'id' => $id)
        );
    }

    function ajouterProduitCli($idCli = 0, $idProduit = 0){
        header("Location:/client/$idCli");
        return $this->modeleProduits->affecterProduit($idProduit, $idCli);
    }

    function supprimerProduitCli($idCli = 0, $idProduit = 0){
        header("Location:/client/$idCli");
        return $this->modeleProduits->detacherProduit($idProduit, $idCli);
    }

}