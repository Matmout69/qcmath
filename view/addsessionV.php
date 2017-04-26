<div id="container">
    <h1>Ajouter une session</h1>
    <form method="post" action="index.php?page=addsession">
        <div class="form-group">
        <label>Nom de la session : <input name="sessionname" type="text"/></label>
        </div>
        <div class="form-group">
        <label>Temps limite (en minutes) : <input name="sessiontime" type="number" value ="10"></label>
        </div>
        <button class = "btn btn-primary" type="submit" class="form-control" name="addsession">Ajouter la session</button>
    </form>
</div>