    </main><!-- /.container -->

<footer>
<hr>
<div class="row">
    <div class="col-md-4">
        <?php
        require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'compteur.php';
        ajouter_vue();
        $vues = nombre_vues()
        ?>
        Il y a <?= $vues ?> visite<?php if ($vues > 1): ?>s<?php endif; ?> sur le site
    </div>
    <div class="col-md-4">
        <form action="/newsletter.php" method="post" class="form-inline">
            <div class="form-group">
                <input type="email" name="email" placeholder="Entrer votre email" required class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
    </div>
    <div class="col-md-4">
    <h5>Navigation</h5>
    <ul class="list-unstyled text-small">
    <?= nav_menu(); ?>
    </ul>
    </div>
</div>
</footer>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>