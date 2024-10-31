

<h1>Listado de notas:</h1>

<?php

while($nota = $notas->fetch_object()) : ?>

    <?= $nota->title?> - <?= $nota->content?> - <?= $nota->date?>

<?php endwhile;?>