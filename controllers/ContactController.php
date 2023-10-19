<?php
namespace controllers;

use controllers\base\WebController;

use models\classes\Contact;
use models\ContactModele;
use utils\Template;

class ContactController extends WebController
{
    private $modeleContact;
    function __construct(){
        $this->modeleContact = new ContactModele();
    }
    public function ajouterContact(int $id=0) : string
    {
        return Template::render("views/contact.php", ['id' => $id]);
    }

    public function ajouterContactCli($nom, $tel, $email, $id){

        $contact = new Contact();
        $contact->setNom($nom);
        $contact->setTel($tel);
        $contact->setEmail($email);
        $contact->setIdClient($id);

        $this->modeleContact->creerContactClient($contact);
        header("Location:/client/$id");
    }
    function supprimerContactCli($idCli = 0,  $nomContact=""){
        $this->modeleContact->supprimerContact($nomContact, $idCli);
        return $this->redirect("/client/$idCli");
    }

}