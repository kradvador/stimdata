<?php ob_start(); ?>


<?php


if (isset($_POST['login']) AND isset($_POST['password']))
{

    $tm = new taskManager();
    $hash = $tm->getHash();


    // test de la valeur de données

    if($hash === true)
        { // Correspondance login/password trouvée

        echo '
            <div class="row">
                 <div class="col-lg-12">
                    Vous êtes connect&eacute;
                    <br/>
                    <a href="/stimdata/">Retour au formulaire</a>
                </div>
            </div>
            ';
        }
    else
        { // Aucune correspondance existante

            echo '
            <div class="row">
                 <div class="col-lg-12">
                    le login et/ou le mot de passe rentr&eacute;s sont invalides
                    <br/>
                    <a href="/stimdata/">Retour au formulaire</a>
                 </div>
             </div>
            ';
        }

}

else
{ // Formulaire non renseigné

    echo '
        <div class="row">
             <div class="col-lg-12">
                Veuillez remplir les 2 champs (Login et Password)
                <br/>
                <a href="/stimdata/">Retour au formulaire</a>
             </div>
         </div>
        ';

}


?>




<?php $content = ob_get_clean();?>

<?php include('views/layout.php');?>

