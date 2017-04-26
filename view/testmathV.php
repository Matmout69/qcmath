<div id="container">
    <div class="form-group">
        <h1>Testeur de saisie MathJax</h1>
        <h2>Entrée à tester :</h2>
        <form method="post" action="index.php?page=testmath">
        <textarea name="saisie" class="form-control" rows="5"><?php echo $saisie; ?></textarea>
        <p class="tex2jax_ignore form-control">NOTE : les délimiteurs sont $$ ... $$ et \[ ... \] pour les équations et \( ... \) pour les symboles
        devant rester sur la même ligne.</p>
        <input type="submit" class="btn btn-default" value="Tester">
        </form>

        <h2>Résultat :</h2>
        <div class="well">
            <?php echo $saisie; ?>
        </div>

</div>
</div>