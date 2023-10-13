<body>
<div class="container mt-5">

    <!-- Informations du client -->
    <h2>Informations du client</h2>
    <?php
        /** @var Client[] $client */

        use models\classes\Client;
    ?>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $client.getPrenom() . ' ' . $client.getNom(); ?></h5>
            <p class="card-text">Téléphone: <?php echo $client.getTelephone(); ?></p>
            <p class="card-text">Email: <?php echo $client.getEmail(); ?></p>
        </div>
    </div>
<?php /*
    <!-- Produits -->
    <h2 class="mt-5">Les produits</h2>
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom Produit</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Créé le</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // Encore une fois, c'est juste un exemple
        $produits = [
            ['id' => 1, 'nom' => 'Produit 1', 'description' => 'Description produit 1', 'prix' => '100€', 'date' => '10/10/2021'],
            ['id' => 2, 'nom' => 'Produit 2', 'description' => 'Description produit 2', 'prix' => '150€', 'date' => '05/10/2021'],
        ];

        foreach ($produits as $produit) { ?>
            <tr>
                <td><?php echo $produit['id']; ?></td>
                <td><?php echo $produit['nom']; ?></td>
                <td><?php echo $produit['description']; ?></td>
                <td><?php echo $produit['prix']; ?></td>
                <td><?php echo $produit['date']; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <!-- Adresses -->
    <h2 class="mt-5">Les adresses</h2>
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
        $adresses = [
            ['nom' => 'Maison', 'rue' => 'Rue de la Liberté', 'code_postal' => '75000', 'ville' => 'Paris'],
            ['nom' => 'Bureau', 'rue' => 'Rue du Travail', 'code_postal' => '75001', 'ville' => 'Paris'],
        ];

        foreach ($adresses as $adresse) { ?>
            <tr>
                <td><?php echo $adresse['nom']; ?></td>
                <td><?php echo $adresse['rue']; ?></td>
                <td><?php echo $adresse['code_postal']; ?></td>
                <td><?php echo $adresse['ville']; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>*/ ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
