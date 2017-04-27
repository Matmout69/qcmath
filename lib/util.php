<?php
// Fonction utilitaires

// Permet de créer un tableau avec deux colonnes, une d'affichage et une avec bouton de suppression
function makeTable($data, $indexName, $delName, $actionName) {
    echo '<table class="table table-responsive">';
    foreach ($data as $value) {
        $value = $value[$indexName];
        echo '<tr>';
        echo '<td class="col-md-4">'.$value;
        echo '<form action="'.$actionName.'" method="post">';
        echo '<input type="hidden" name="'.$delName.'" value="'.$value.'"/>';
        echo '</td>';
        if ($delName != null) {
            echo '<td class="col-md-4"><input type="submit" class="btn btn-danger" value="Supprimer"/></td>';
        }
        echo '</form>';
        echo '</tr>';
    }
    echo '</table>';
}

// Permet de créer un menu déroulant (<select> en html)
function makeSelect($data, $name, $indexName, $emptyChoice = false) {
    echo '<div class="form-inline form-group"><select class="form-control" name="'.$name.'">';
    if ($emptyChoice === true) {
        echo '<option value="none">Aucun(e)</option>';
    }
    foreach ($data as $value) {
        $value = $value[$indexName];
        echo '<option value="'.$value.'">'.$value.'</option>';
    }
    echo '</select></div>';
}

// Permet d'afficher une question
function printQuestion($question, $showDel = false) {
    echo '<div class="well well-sm">';
    echo '<p><strong>Chapitre : </strong>'.$question['nomchapitre'].'</p>';
    echo '<p><strong>Notions : </strong>';
    foreach ($question['notions'] as $notion) {
        echo $notion['nom'];
    }
    echo '<p><strong>Énoncé : </strong>'.$question['texte'].'</p>';

    echo '</p>';
    foreach ($question['items'] as $id => $item) {
        echo '<p><strong>Réponse n° '.($id+1);
        if ($item['est_juste'] == true) {
            echo ' <span class="ans-cor">(correct) : </span></p>';
        } else {
            echo ' <span class="ans-inc">(incorrect) : </span></p>';
        }
        echo '</strong>'.$item['texte'];
    }
    echo '<p><strong>Justification : </strong>'.$question['justif'].'</p>';
    if ($showDel == true) {
        echo '<form action="index.php?page=qcm" method="post"><button class="btn btn-danger" value="'.$question['id'].'" name="del" type="submit">Supprimer</button>';
    }
    echo '</div>';
}