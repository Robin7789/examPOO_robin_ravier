<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des motos</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="mt-4 mb-4">Liste des motos</h1>
        <ul class="list-group">
            <?php if (!empty($motos)) : ?>
                <?php foreach ($motos as $moto) : ?>
                    <li class="list-group-item">
                        <a href="/moto/<?php echo $moto->getId(); ?>">
                            <?php echo $moto->getBrand() . ' ' . $moto->getModel(); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php else : ?>
                <li class="list-group-item">Aucune moto disponible</li>
            <?php endif; ?>
        </ul>
        <a href="http://localhost/examPOO/templates/moto/add.php" class="btn btn-primary mt-4">Ajouter une moto</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>