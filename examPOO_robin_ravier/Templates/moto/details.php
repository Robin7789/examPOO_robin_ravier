<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la moto</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="mt-4 mb-4">Détails de la moto</h1>
        <?php if (isset($moto)) : ?>
            <div class="card">
                <div class="card-body">
                    <p class="card-text"><strong>Marque :</strong> <?php echo $moto->getBrand(); ?></p>
                    <p class="card-text"><strong>Modèle :</strong> <?php echo $moto->getModel(); ?></p>
                    <p class="card-text"><strong>Type :</strong> <?php echo $moto->getType(); ?></p>
                    <p class="card-text"><strong>Prix :</strong> <?php echo $moto->getPrice(); ?></p>
                    <img src="<?php echo $moto->getImage(); ?>" class="card-img-top" alt="Image de la moto">
                    <div class="mt-3">
                        <a href="/moto/edit/<?php echo $moto->getId(); ?>" class="btn btn-primary mr-2">Modifier</a>
                        <a href="/moto/delete/<?php echo $moto->getId(); ?>" class="btn btn-danger">Supprimer</a>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <p>Aucune information sur la moto disponible.</p>
        <?php endif; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>