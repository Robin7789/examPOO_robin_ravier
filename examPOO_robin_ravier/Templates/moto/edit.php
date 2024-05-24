<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier la moto</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="mt-4 mb-4">Modifier la moto</h1>
        <?php if (isset($moto)) : ?>
            <form action="/moto/edit/<?php echo $moto->getId(); ?>" method="POST">
                <div class="form-group">
                    <label for="brand">Marque :</label>
                    <input type="text" id="brand" name="brand" class="form-control" value="<?php echo $moto->getBrand(); ?>" required>
                </div>
                <div class="form-group">
                    <label for="model">Modèle :</label>
                    <input type="text" id="model" name="model" class="form-control" value="<?php echo $moto->getModel(); ?>" required>
                </div>
                <div class="form-group">
                    <label for="type">Type :</label>
                    <input type="text" id="type" name="type" class="form-control" value="<?php echo $moto->getType(); ?>" required>
                </div>
                <div class="form-group">
                    <label for="price">Prix :</label>
                    <input type="text" id="price" name="price" class="form-control" value="<?php echo $moto->getPrice(); ?>" required>
                </div>
                <div class="form-group">
                    <label for="image">Image (URL) :</label>
                    <input type="text" id="image" name="image" class="form-control" value="<?php echo $moto->getImage(); ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Modifier</button>
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