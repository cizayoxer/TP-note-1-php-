
<body>
<form method="get" action="/client">
    <div class="form-group">
        <input type="text" class="form-control" id="recherche" name="recherche" value="<?php echo $recherche;?>" placeholder="Recherche">
    </div>
</form>
<div class="container mt-5">

    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom Prénom</th>
            <th>Téléphone</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <?php
        /** @var Client[] $listeClient */

        use models\classes\Client;

        foreach ($listeClient as $client){ ?>
            <tr onclick="window.location.href='/client/<?php echo $client->getId(); ?>';" style="cursor:pointer;">
                <td><?php echo $client->getId(); ?></td>
                <td><?php echo $client->getPrenom() . " " . $client->getNom() ; ?></td>
                <td><?php echo $client->getTelephone(); ?></td>
                <td><?php echo $client->getEmail(); ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <?php if($page == 0){?>
        <a href="/client?page=<?= $page+1?><?php if($recherche!="") {echo "&recherche=".$recherche;}?>" class="btn btn-primary">&#8594</a>
    <?php }
    else{?>
        <a href="/client?page=<?= $page-1?><?php if($recherche!="") {echo "&recherche=".$recherche;}?>" class="btn btn-primary">&#8592</a>
        <a href="/client?page=<?= $page+1?><?php if($recherche!="") {echo "&recherche=".$recherche;}?>" class="btn btn-primary">&#8594</a>
    <?php } ?>
</div>

</body>
</html>