<?php   
    include('header.php')
?>

<h2 class="text-center my-5">Ajouter un article</h2>

<form class="d-flex justify-content-center">
    <div class="container my-5">
        <div class="row">
            <div class="form-group col-12">
                <label for="titre_article">Titre :</label>
                <input type="title" class="form-control" id="titre_article">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-2">
                <label for="categorie_article">Catégorie :</label>
                <select class="form-control" id="categorie_article">
                    <option>Livre</option>
                    <option>Jeux vidéo</option>
                    <option>Film</option>
                    <option>Manga</option>
                    <option>Musique</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-2">
                <label for="cover_article">Couverture :</label>
                <input type="file" class="form-control-file" id="cover_article">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-12">
                <label for="description_article">Description :</label>
                <textarea class="form-control" id="description_article" rows="3"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-12">
                <label for="avis_article">Avis :</label>
                <textarea class="form-control" id="avis_article" rows="3"></textarea>
            </div>
        </div>
    </div>

</form>



<?php   
    include('footer.php')
?>