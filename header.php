<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="asset/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>Site</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg" id="barre_menu">

        <a class="navbar-brand" href="index.php"><img src="asset/images/index.png" alt="accueil" class="index"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="books.php"><img src="asset/images/books.png" alt="Catégorie livre" class="index"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="games.php"><img src="asset/images/games.png" alt="Catégorie jeux" class="index"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="movies.php"><img src="asset/images/movies.png" alt="Catégorie film" class="index"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="manga.php"><img src="asset/images/manga.png" alt="Catégorie film" class="index"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="music.php"><img src="asset/images/music.png" alt="Catégorie film" class="index"></a>
                </li>
            </ul>
            
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="new_article.php"><img src="asset/images/add_button.png" alt="Ajouté un article" class="index"></a>
                </li>
                <li>
                    <a href="connexion.php" class="nav-link"><img src="asset/images/account.png" alt="Profil" class="index"></a>
                </li>
            </ul>
        </div>

    </nav>
</body>
</html>