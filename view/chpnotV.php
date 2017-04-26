<div id="container">
    <h1>Chapitres et notions</h1>
    <section class="subdiv">
        <h2>Liste des chapitres</h2>
        <?php makeTable($chapitres, 'nom', 'delchapter', 'index.php?page=chpnot'); ?>
        <h3>Ajouter un chapitre</h3>
        <form method="post" action="index.php?page=chpnot">
            <input type="text" name="chpname" placeholder="Nom du chapitre à ajouter"/>
            <input type="submit" class="btn btn-primary" value="Ajouter"/>
        </form>
    </section>

    <section class="subdiv">
        <h2>Liste des notions</h2>
        <?php makeTable($notions, 'nom', 'delnotion', 'index.php?page=chpnot'); ?>
        <h3>Ajouter une notion</h3>
        <form method="post" action="index.php?page=chpnot">
            <input type="text" name="notionname" placeholder="Nom de la notion à ajouter"/>
            <input type="submit" class="btn btn-primary" value="Ajouter"/>
        </form>
    </section>
</div>

