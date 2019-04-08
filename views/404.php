<?php header( "refresh:5;/stimdata/" );  ?>

<?php ob_start(); ?>


    <div class="row"> <!-- ROW START -->

        <div class="col-lg-12">
            La page demand&eacute;e n'existe pas, retour &agrave; l'accueil dans 5 secondes.
        </div>

    </div> <!-- ROW END -->


<?php $content = ob_get_clean();?>

<?php include('views/layout.php');?>