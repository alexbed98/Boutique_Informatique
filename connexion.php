<?php
    include_once 'core/error-exception.php';
    require_once 'src/Page.php';
    require_once 'src/initialization.php';

    require_once 'core/validation.php';

    const ACTIVE_PAGE = Page::Connexion;

//===============================================================
// Simplement pour simuler l'envoi d'un courriel dans cet exemple
function email($email, $message) {
    var_dump('envoyer email');
    var_dump($email);
    var_dump($message);
    return true;
}
//===============================================================

// On prépare les variables qui serviront à l'affichage dans le html
// Souvent on nomme les variables commme les champs du formulaire
$email = '';
$message = '';
$messages = [];

// On peut déclarer aussi des variables pour contrôler l'affichage.
$globalMessageColor = 'text-success';

// Valider et récupérer le contenu du formulaire seulement s'il a été soumit
if (IS_POST) {

    // Si la donnée n'est pas présente dans le POST on assigne une chaîne vide

    // $email = $_POST['email'] ?? '';
    $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
    $message = $_POST['message'] ?? '';

    // Le courriel est obligatoire
    if (!$email) {

        $messages['email'] = 'Le courriel est invalide';

    }

    // Le message est obligatoire
    if (!Validation::stringIsSize($message, 10)) {

        $messages['message'] = 'Le message est invalide';

    }
    
    // La logique actuelle est basée sur la présence d'un ou plus message d'erreur
    // Nous pourrions faire aussi avec :!empty($messages)
    if (count($messages) > 0) {

        $messages['global'] = 'Le formulaire est invalide';
        $globalMessageColor = 'text-danger';

    } else {

        // Simule une action qui utilise les données
        $success = email($email, $message);

        if($success) {

            // Comme tout a fonctionné on réinitialise les variables pour l'interface
            // en affichant un message de succès.
            $email = '';
            $message = '';
            $messages['global'] = 'Merci de nous avoir contactés';

        } else {

            //Si le courriel ne s'est pas envoyé on informe l'utilisateur
            $messages['global'] = 'Une erreur est survenue lors du traitement de la demande';
            $globalMessageColor = 'text-danger';

        }

    }
    
}


?>
<!DOCTYPE html>
<html lang="fr">

<!--Bloc entête document-Head block-->
<?php include_once TEMPLATE.'/head.php'; ?>
<!--Bloc entête document-Head block-->

<body>
    
    <!--Contenant principal pour largeur du contenu-Main container-->
    <div class="container">

        <!--Bloc entête-Header block-->
        <?php include_once TEMPLATE.'/header.php'; ?>
        <!--Bloc entête-Header block-->
        
        <main>
            <h1 class="py-3 mt-3">La boutique d'informatique sur la rive-nord</h1>

            <div class="fs-4 text-center my-5">Entrez vos informations de connexion</div>

            <!--Bloc formulaire contact-Contact form block-->
            <div class="col-md-4 mx-auto">                         

                <form method="post" novalidate>

                    <div class="mb-3">
                        <label for="email" class="form-label">Courriel</label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" value="<?= htmlspecialchars($email) ?>">
                        <div id="emailHelp" class="form-text text-danger"><?= $messages['email'] ?? '' ?></div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Se connecter</button>

                </form>

                <div id="global-message" class="my-5 <?= $globalMessageColor ?>"><?= $messages['global'] ?? '' ?></dib>

            </div>
            <!--Bloc formulaire contact-Contact form block-->

        </main>
        
        <!--Bloc pied de page-Footer block-->
        <?php include_once TEMPLATE.'/footer.php'; ?>
        <!--Bloc pied de page-Footer block-->
        
    </div>
    <!--Contenant principal-->
   
</body>
</html>