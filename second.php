<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num_addresses = isset($_POST['num_addresses']) ? intval($_POST['num_addresses']) : 0;
} else {
    // Redirection si la page est accédée directement sans soumission du formulaire initial
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Adresses</title>
</head>

<body>
    <div class="container">
        <form action="submit.php" method="post">
            <?php for ($i = 1; $i <= $num_addresses; $i++): ?>
            <h2>Adresse <?php echo $i; ?></h2>
            <label for="street_<?php echo $i; ?>">Street:</label>
            <input type="text" name="street_<?php echo $i; ?>" maxlength="50" required>

            <label for="street_nb_<?php echo $i; ?>">Street Number:</label>
            <input type="number" name="street_nb_<?php echo $i; ?>" required>

            <label for="type_<?php echo $i; ?>">Type:</label>
            <select name="type_<?php echo $i; ?>" required>
                <option value="livraison">Livraison</option>
                <option value="facturation">Facturation</option>
                <option value="autre">Autre</option>
            </select>

            <label for="city_<?php echo $i; ?>">City:</label>
            <select name="city_<?php echo $i; ?>" required>
                <option value="Montreal">Montreal</option>
                <option value="Laval">Laval</option>
                <option value="Toronto">Toronto</option>
                <option value="Quebec">Quebec</option>
            </select>

            <label for="zipcode_<?php echo $i; ?>">ZIP Code:</label>
            <input type="text" name="zipcode_<?php echo $i; ?>" maxlength="6" required>

            <?php endfor; ?>

            <input type="submit" value="Confirmer">
        </form>
    </div>
</body>

</html>