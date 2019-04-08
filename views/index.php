
<?php ob_start(); ?>


<div class="row"> <!-- ROW START -->

    <div class="col-lg-12">
        <div class="jumbotron">
            <h1>Bienvenue</h1>
        </div>
    </div>

    <div class="col-lg-12">

        <form method="post" action="logged">
            <div class="form-group">
                <label for="login">Login :</label>
                <input type="text" class="form-control" id="login" placeholder="login" name="login" required>
            </div>
            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" class="form-control" id="password" placeholder="password" name="password" required>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Log !</button>

        </form>

    </div>

</div> <!-- ROW END -->


<?php $content = ob_get_clean();?>

<?php include('views/layout.php');?>
