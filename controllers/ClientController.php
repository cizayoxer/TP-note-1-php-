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
    function liste()
    {
        $listeClient = $this->modeleClients->liste();
        return Template::render("views/liste.php", array($listeClient));
    }

}