<!affichage modification article
<?php global $articlesId ?>
<!-- structure du formulaire en html -->
<form action="index.php?action=blogPostModify&id=<?= $articlesId ?>" method="post" class="needs-validation">

    <div class="container border rounded-3 bg-light bg-opacity-75 gy-3 my-5" id="formul">
        <div class="container">
            <div class="p-3 text-primary-emphasis text-center mt-3 mb-5">
            </div>
            <h2>Modifier un article</h2>
            <div class="row">
                <div>
                   <h3>Article sélectionné : <?= $articlesId ?></h3>
                </div>
                 <div>
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>
                <div>
                    <label for="content" class="form-label">Content</label>
                    <input type="text" class="form-control" name="content" id="content">
                </div>
                <div>
                    <label for="rating" class="form-label">Rating</label>
                    <input type="text" class="form-control" name="rating" id="rating">
                </div>
            </div>
        </div>
        <div class="container">
            <div id="submit">
                <button class="btn btn-outline-danger mb-3 text-danger bg-dark" type="submit" value="ENVOYER">Modifier l'article</button>
            </div>
        </div>
    </div>
</form>