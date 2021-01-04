<?php   
    include('header.php')
?>

<div class="container">
    <div class="col-md-5" id="connexion">

        <h2 class="text-center">Connexion :</h2>
        <form>

            <div class="form-group text-center">
                <label for="email_compte">Adresse mail :</label>
                <input type="email" class="form-control" id="email_compte" aria-describedby="emailHelp" placeholder="Entrez votre email">
                <small id="emailHelp" class="form-text text-muted">Votre email ne sera jamais partagé sans votre accord.</small>
            </div>

            <div class="form-group">
                <label for="mdp_compte">Mot de passe :</label>
                <input type="password" class="form-control" id="mdp_compte" placeholder="Entrez votre mot de passe">
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Connexion</button>
            </div>

            <p class="text-center">ou</p>
            <a href="inscription.php"><p class="text-center">Inscription</p></a>
        </form>

    </div>
</div>

<?php
    include('footer.php')
?>