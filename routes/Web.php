<?php

namespace routes;

use controllers\AdresseController;
use controllers\ClientController;
use controllers\FicheClientController;
use controllers\SampleWebController;
use controllers\ProduitController;
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
        $produit = new ProduitController();
        $adresse = new AdresseController();

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
        Route::Add('/client/produit/execute', [$produit, 'ajouterProduitCli']);
        Route::Add('/client/produit/delete', [$produit, 'supprimerProduitCli']);
        Route::Add('/client/adresse/execute', [$adresse, 'ajouterAdresseCli']);
        Route::Add('/client/adresse/delete', [$adresse, 'supprimerAdresseCli']);
        Route::Add('/client/adresse', [$adresse, 'ajouterAdresse']);
        Route::Add('/client/{id}/produit', [$produit, 'liste']);
        Route::Add('/client/{id}', [$fiche, 'fiche']);


        //        Exemple de limitation d'accès à une page en fonction de la SESSION.
        //        if (SessionHelpers::isLogin()) {
        //            Route::Add('/logout', [$main, 'home']);
        //        }
    }
}

