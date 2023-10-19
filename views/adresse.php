<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h3>Nouvelle adresse</h3>
        </div>
        <div class="card-body">
            <form action="/client/adresse/execute" method="post">

                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" class="form-control" id="nom" placeholder="Entrez votre nom">
                </div>

                <div class="form-group">
                    <label for="rue">Rue :</label>
                    <input type="text" name="rue" class="form-control" id="rue" placeholder="Entrez la rue">
                </div>

                <div class="form-group">
                    <label for="CP">Code Postal :</label>
                    <input type="text" name="CP" class="form-control" id="CP" placeholder="Entrez le code postal">
                </div>

                <div class="form-group">
                    <label for="ville">Ville :</label>
                    <input type="text" name="ville" class="form-control" id="ville" placeholder="Entrez la ville">
                </div>

                <input type="hidden" value="<?=$_POST['idCli']?>" name="id">
                <br>
                <button type="submit" name="Valider" class="btn btn-primary float-right">Valider</button>
            </form>
        </div>
    </div>
</div>