<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer la moto</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="mt-4 mb-4">Supprimer la moto</h1>
        <?php if (isset($moto)) : ?>
            <p>Êtes-vous sûr de vouloir supprimer la moto <?php echo $moto->getBrand() . ' ' . $moto->getModel(); ?> ?</p>
            <form action="/moto/delete/<?php echo $moto->getId(); ?>" method="POST">
                <button type="submit" class="btn btn-danger">Confirmer</button>
                <a href="/moto" class="btn btn-secondary">Annuler</a>
            </form>
        <?php else : ?>
            <p>Aucune information sur la moto disponible.</p>
        <?php endif; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>