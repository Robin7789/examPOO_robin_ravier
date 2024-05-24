<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une moto</title>
</head>

<body>
    <h1>Ajouter une moto</h1>
    <form action="/moto/add.php" method="POST">
        <label for="brand">Marque :</label>
        <input type="text" id="brand" name="brand" required><br>

        <label for="model">Modèle :</label>
        <input type="text" id="model" name="model" required><br>

        <label for="type">Type :</label>
        <input type="text" id="type" name="type" required><br>

        <label for="price">Prix :</label>
        <input type="text" id="price" name="price" required><br>

        <label for="image">Image (URL) :</label>
        <input type="text" id="image" name="image" required><br>

        <input type="submit" value="Ajouter">
    </form>
</body>

</html>