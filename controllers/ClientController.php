<?php
namespace controllers;

use controllers\base\WebController;
use models\ClientsModele;
use models\TodoModel;
use utils\Template;

class ClientController extends WebController
{
    private $modeleClients;
    function __construct(){
        $this->modeleClients = new ClientsModele();
    }

    function liste($page = 0, $recherche = ""): string
    {
        $listeClient = $this->modeleClients->recherche($recherche,10, $page);
        return Template::render(
            "views/liste.php",
            array("page" => $page, 'listeClient' => $listeClient, 'recherche' => $recherche)
        );
    }

}