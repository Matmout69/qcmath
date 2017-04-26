<div id="container">

    <h2>Ajouter une question</h2>
    <div class="form-group">
        <form action="index.php?page=addqcm" method="post">
            <div class="form-group">
                <label for="questiontext">Saisir l'énoncé : </label>
                <textarea id="questiontext" name="questiontext" class="form-control" rows="5" id="comment"></textarea>
            </div>
            <div class="form-group">
                <label for="justiftext">Saisir la justification : </label>
                <textarea id="justiftext" name="justiftext" class="form-control" rows="3" id="comment"></textarea>
            </div>
            <div class="form-group">
                <div class="form-group">
                <label>Nombre d'items à ajouter :</label>
                <input type="text" size="1" value="2" id="itemnb" />
                </div>
                <label>Chapitre de la question : </label>
                <?php makeSelect($chapitres, 'chapitres', 'nom'); ?>
                <label>Ajouter une notion : </label>
                <?php makeSelect($notions, 'notions', 'nom', true); ?>
                <input type="button" class="btn btn-primary" onclick="addFields()" value="Ajouter des réponses"/>
            </div>
            <div id="qitems">
            </div>
        </form>
    </div>

</div>

<script>
    function addFields(){
        var number = document.getElementById("itemnb").value;
        var container = document.getElementById("qitems");
        while (container.hasChildNodes()) {
            container.removeChild(container.lastChild);
        }
        if (number < 1) {return}
        for (i=0;i<number;i++){
            elem = document.createElement('div')
            elem.className = "form-group"
            itemDiv = container.appendChild(elem)
            itemDiv.appendChild(document.createTextNode("Item n° " + (i+1) + " : "));
            lbl = document.createElement('label')
            lbl.innerHTML = '&nbsp;Cette réponse est vraie'
            lbl.setAttribute('for', 'cb' + (i+1))
            cb = document.createElement('input')
            cb.setAttribute('type', 'checkbox')
            cb.setAttribute('name', 'cb[]')
            cb.setAttribute('value', i)
            cb.setAttribute('id', 'cb' + (i+1))
            lbcb = document.createElement('div')
            lbcb.className = "form-group"
            lbcb.appendChild(cb)
            lbcb.appendChild(lbl)
            itemDiv.appendChild(lbcb)
            var input = document.createElement("input");
            input.type = "text"
            input.setAttribute('class', 'form-control')
            input.name = "item[]"
            itemDiv.appendChild(input);
            container.appendChild(itemDiv)
        }
        sbm = document.createElement('input')
        sbm.setAttribute('type', 'submit')
        sbm.setAttribute('class', 'btn btn-primary')
        sbm.setAttribute('value', 'Ajouter la question')
        container.appendChild(sbm)
    }
</script>
