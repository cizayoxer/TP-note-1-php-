<!DOCTYPE html>
<html lang="fr">

<body>
<div class="container mt-5">
    <h3>Liste des produits</h3>
    <form action="/client/produit/execute" method="post">
        <select class="form-select" aria-label="Default select example" name="idProduit">
            <?php
            foreach ($listeProduits as $produit){?>
            <option value="<?=$produit->getId()?>"><?=$produit->getNom()?></option>
            <?php }?>

        </select>
        <input type="hidden" value="<?=$id?>" name="idCli">
        <input type="submit" value="Valider" name="Valider" class="btn btn-primary ml-auto">
    </form>
</div>

</body>
</html>