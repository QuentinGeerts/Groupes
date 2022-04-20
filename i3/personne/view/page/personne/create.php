<div class="container">
    <h2>Ajouter une personne</h2>
    <form action="#" method="post">
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" class="form-control" ><br>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" class="form-control" ><br>
        </div>
        <div class="form-group">
            
        <label>Sexe :</label>
        <div class="form-check">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="sexe" id="M" value="M" >
            M
            </label>
        </div>
        <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="sexe" id="F" value="F">
            F
            </label>
        </div>
       
        </div>
        <div class="form-group">
            <label for="ad_rue">Rue :</label>
            <input type="text" name="ad_rue" id="ad_rue" class="form-control" ><br>
        </div>
        <div class="form-group">
            <label for="ad_num">Numéro :</label>
            <input type="text" name="ad_num" id="ad_num" class="form-control" ><br>
        </div>
        <div class="form-group">
            <label for="ad_cp">Code postal :</label>
            <input type="number" name="ad_cp" id="ad_cp" min="1000" max="9999" class="form-control" ><br>
        </div>
        <div class="form-group">
            <label for="ad_ville">Ville :</label>
            <input type="text" name="ad_ville" id="ad_ville" class="form-control" ><br>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Ajouter</button>
        </div>
    </form>
</div>
<script>
    create.classList.add("active");
</script>