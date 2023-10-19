<body>
<div class="container mt-5">

    <!-- Informations du client -->
    <h2>Informations du client</h2>


    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $client->getPrenom() . ' ' . $client->getNom(); ?></h5>
            <p class="card-text">Téléphone: <?php echo $client->getTelephone(); ?></p>
            <p class="card-text">Email: <?php echo $client->getEmail(); ?></p>
        </div>
    </div>

    <!-- Produits -->
    <form action="/client/<?=$id?>/produit" method="post">
        <input type="hidden" value="<?=$id?>" name="idCli" class="btn btn-primary ml-auto">

    <h2 class="mt-5">Les produits <input type="submit" class="btn btn-primary ml-auto" value="Commander">  </h2>
    </form>

    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom Produit</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Suppression</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // Encore une fois, c'est juste un exemple
        $produits = $client->lesProduits();

        foreach ($produits as $produit) { ?>
            <tr>
                <td><?php echo $produit->getId(); ?></td>
                <td><?php echo $produit->getNom(); ?></td>
                <td><?php echo $produit->getDescription(); ?></td>
                <td><?php echo $produit->getPrix(); ?></td>
                <td>
                    <form action="/client/produit/delete" method="post">
                        <input type="hidden" value="<?=$produit->getId()?>" name="idProduit">
                        <input type="hidden" value="<?=$id?>" name="idCli">
                        <input type="submit" value="Supprimer" name="Supprimer" class="btn btn-primary ml-auto">
                    </form>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <!-- Adresses -->

    <h2 class="mt-5">Les adresses<a href="/client/adresse" class="btn btn-primary ml-auto">Ajouter une adresse</a></h2>
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Rue</th>
            <th>Code postal</th>
            <th>Ville</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // Encore une fois, c'est juste un exemple
    $adresses = $client->lesAdresses();

        foreach ($adresses as $adresse) { ?>
            <tr>
                <td><?php echo $adresse->getNom(); ?></td>
                <td><?php echo $adresse->getRue(); ?></td>
                <td><?php echo $adresse->getCodePostal(); ?></td>
                <td><?php echo $adresse->getVille(); ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<form method="post">
    <input type="hidden" value="<?=$id?>" name="idCli">
</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
