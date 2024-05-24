<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des motos</title>
</head>

<body>
    <h1>Liste des motos</h1>
    <ul>
        <?php if (!empty($motos)) : ?>
            <?php foreach ($motos as $moto) : ?>
                <li>
                    <a href="/moto/<?php echo $moto->getId(); ?>">
                        <?php echo $moto->getBrand() . ' ' . $moto->getModel(); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        <?php else : ?>
            <li>Aucune moto disponible</li>
        <?php endif; ?>
    </ul>
    <a href="http://localhost/examPOO/templates/moto/add.php">Ajouter une moto</a>
</body>

</html>