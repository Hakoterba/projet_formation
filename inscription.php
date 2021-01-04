<?php   
    include('header.php')
?>

    <div class="col-md-5" id="inscription">
        <h2 class="text-center">Inscription :</h2>
        <form>
            <div class="form-group">
                <label for="email_compte">Adresse email :</label>
                <input type="email" class="form-control" id="email_compte" placeholder="nom@exemple.com">
            </div>

            <div class="form-group">
                <label for="mdp_compte">Mot de passe :</label>
                <input type="password" class="form-control" id="mdp_compte" placeholder="Entrez votre mot de passe">
            </div>

            <div class="form-group">
                <label for="mdp_compte">Confirmer votre mot de passe :</label>
                <input type="password" class="form-control" id="mdp_compte" placeholder="Entrez votre mot de passe">
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">M'inscrire</button>
            </div>

        </form>
            
        <p class="text-center">ou</p>
        <a href="connexion.php"><p class="text-center">Connexion</p></a>

    </div>

<?php   
    include('footer.php');
?>