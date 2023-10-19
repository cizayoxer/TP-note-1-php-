<?php
namespace controllers;

use controllers\base\WebController;
use models\ClientsModele;
use utils\Template;

class FicheClientController extends WebController
{
    private $modeleClients;
    function __construct(){
        $this->modeleClients = new ClientsModele();
    }
    public function fiche(int $id=0) : string
    {
        // À compléter avec les bons appels de méthode.
        $client = $this->modeleClients->getByClientId($id);

        return Template::render("views/client.php", ['client' => $client, 'id' => $id]);
    }
}