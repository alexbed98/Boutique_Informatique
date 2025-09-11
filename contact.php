<!DOCTYPE html>
<html lang="fr">

<?php include_once 'template/head.php'; ?>

<body>

    <!--Contenant principal pour largeur du contenu-Main container-->
    <div class="container">

        <?php include_once 'template/header.php'; ?>

        <!--Ligne qui contient des colonnes-Row-->

        <main>

            <div class="fs-4 text-center my-5">Contactez-nous pour toutes questions ou commentaires.</div>

            <!--Bloc formulaire contact-Contact form block-->
            <div class="col-md-4 mx-auto">

                <form method="post" novalidate>

                    <div class="mb-3">
                        <label for="email" class="form-label">Courriel</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Votre message</label>
                        <textarea class="form-control" id="message" rows="3" aria-describedby="messageHelp"></textarea>
                        <div id="messageHelp" class="form-text"></div>
                    </div>

                    <button type="submit" class="btn btn-primary">Envoyer</button>

                </form>

                <div id="global-message" class="my-5">
                    </dib>

                </div>
                <!--Bloc formulaire contact-Contact form block-->

        </main>

        <!--Bloc pied de page-Footer block-->

        <?php include_once 'template/footer.php'; ?>

        <!--Bloc pied de page-Footer block-->

    </div>
    <!--Contenant principal-->

</body>

</html>