<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier la moto</title>
</head>

<body>
    <h1>Modifier la moto</h1>
    <?php if (isset($moto)) : ?>
        <form action="/moto/edit/<?php echo $moto->getId(); ?>" method="POST">
            <label for="brand">Marque :</label>
            <input type="text" id="brand" name="brand" value="<?php echo $moto->getBrand(); ?>" required><br>

            <label for="model">Modèle :</label>
            <input type="text" id="model" name="model" value="<?php echo $moto->getModel(); ?>" required><br>

            <label for="type">Type :</label>
            <input type="text" id="type" name="type" value="<?php echo $moto->getType(); ?>" required><br>

            <label for="price">Prix :</label>
            <input type="text" id="price" name="price" value="<?php echo $moto->getPrice(); ?>" required><br>

            <label for="image">Image (URL) :</label>
            <input type="text" id="image" name="image" value="<?php echo $moto->getImage(); ?>" required><br>

            <input type="submit" value="Modifier">
        </form>
    <?php else : ?>
        <p>Aucune information sur la moto disponible.</p>
    <?php endif; ?>
</body>

</html>