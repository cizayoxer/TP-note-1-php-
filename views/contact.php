<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h3>Nouveau Contact</h3>
        </div>
        <div class="card-body">
            <form action="/client/contact/execute" method="post">

                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom du contact">
                </div>

                <div class="form-group">
                    <label for="rue">Téléphone :</label>
                    <input type="text" name="tel" class="form-control" id="tel" placeholder="Entrez le numéro de téléphone">
                </div>

                <div class="form-group">
                    <label for="CP">Email :</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Entrez l'email">
                </div>


                <input type="hidden" value="<?=$_POST['idCli']?>" name="id">
                <br>
                <button type="submit" name="Valider" class="btn btn-primary float-right">Valider</button>
            </form>
        </div>
    </div>
</div>