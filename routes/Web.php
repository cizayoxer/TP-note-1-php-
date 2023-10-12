<?php

namespace routes;

use controllers\ClientController;
use controllers\FicheClientController;
use controllers\SampleWebController;
use models\ClientsModele;
use routes\base\Route;
use utils\Template;

class Web
{
    function __construct()
    {
        $main = new SampleWebController();
        $client = new ClientController();
        $fiche = new FicheClientController();

        // Appel la méthode « home » dans le contrôleur $main.
        Route::Add('/', [$main, 'home']);
        Route::Add('/exemple', [$main, 'exemple']);
        Route::Add('/exemple2/{parametre}', [$main, 'exemple']);

        // Appel la fonction inline dans le routeur.
        // Utile pour du code très simple, où un tes, l'utilisation d'un contrôleur est préférable.
        Route::Add('/about', function () {
            return Template::render('views/global/about.php');
        });
        Route::Add('/client', [$client, 'liste']);
        Route::Add('/client/{id}', [$fiche, 'fiche']);

        //        Exemple de limitation d'accès à une page en fonction de la SESSION.
        //        if (SessionHelpers::isLogin()) {
        //            Route::Add('/logout', [$main, 'home']);
        //        }
    }
}

