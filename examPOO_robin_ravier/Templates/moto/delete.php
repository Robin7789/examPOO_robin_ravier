<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer la moto</title>
</head>

<body>
    <h1>Supprimer la moto</h1>
    <?php if (isset($moto)) : ?>
        <p>Êtes-vous sûr de vouloir supprimer la moto <?php echo $moto->getBrand() . ' ' . $moto->getModel(); ?> ?</p>
        <form action="/moto/delete/<?php echo $moto->getId(); ?>" method="POST">
            <input type="submit" value="Confirmer">
        </form>
        <a href="/moto">Annuler</a>
    <?php else : ?>
        <p>Aucune information sur la moto disponible.</p>
    <?php endif; ?>
</body>

</html>