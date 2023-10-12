<?php
namespace controllers;

use controllers\base\WebController;

class FicheClientController extends WebController
{
    public function fiche($id="")
    {
        // À compléter avec les bons appels de méthode.
        return Template::render("views/fiche/client", []);
    }
}