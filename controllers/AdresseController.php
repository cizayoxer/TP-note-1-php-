<?php
namespace controllers;

use controllers\base\WebController;
use models\AdresseModele;
use models\classes\Adresse;
use utils\Template;

class AdresseController extends WebController
{
    private $modeleAdresse;
    function __construct(){
        $this->modeleAdresse = new AdresseModele();
    }
    public function ajouterAdresse(int $id=0) : string
    {
        return Template::render("views/adresse.php", ['id' => $id]);
    }

    public function ajouterAdresseCli($id, $nom, $rue, $CP, $ville){

        $adresse = new Adresse();
        $adresse->setNom($nom);
        $adresse->setRue($rue);
        $adresse->setCodePostal($CP);
        $adresse->setVille($ville);
        $adresse->setClientId($id);

        $this->modeleAdresse->creerAdresseClient($adresse);
        header("Location:/client/$id");
    }

    function supprimerAdresseCli($idCli = 0, $idAdresse = 0){

        $this->modeleAdresse->detacherAdresse($idAdresse, $idCli);
        return $this->redirect("/client/$idCli");
    }
}