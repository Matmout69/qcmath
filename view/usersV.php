<h1>Gestion des utilisateurs</h1>
    <h2>Utilisateurs enregistrés</h2>
        <?php makeTable($users, 'email', 'delemail', 'index.php?page=users'); ?>
    <h2>Ajouter un utilisateur</h2>
        <form action="index.php?page=users" method="post">
            <input type="text" placeholder="Adresse e-mail / login" name="email"/>
            <input type="text" placeholder="Code BIP" name="bipcode"/>
            <input type="submit" class="btn btn-primary" value="Créer"/>
        </form>