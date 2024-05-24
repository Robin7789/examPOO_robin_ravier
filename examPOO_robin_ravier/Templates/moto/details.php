<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la moto</title>
</head>

<body>
    <h1>Détails de la moto</h1>
    <?php if (isset($moto)) : ?>
        <p>Marque : <?php echo $moto->getBrand(); ?></p>
        <p>Modèle : <?php echo $moto->getModel(); ?></p>
        <p>Type : <?php echo $moto->getType(); ?></p>
        <p>Prix : <?php echo $moto->getPrice(); ?></p>
        <img src="<?php echo $moto->getImage(); ?>" alt="Image de la moto">
        <a href="/moto/edit/<?php echo $moto->getId(); ?>">Modifier</a>
        <a href="/moto/delete/<?php echo $moto->getId(); ?>">Supprimer</a>
    <?php else : ?>
        <p>Aucune information sur la moto disponible.</p>
    <?php endif; ?>
</body>

</html>