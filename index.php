<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num_addresses = isset($_POST['num_addresses']) ? intval($_POST['num_addresses']) : 0;

    if ($num_addresses <= 0) {
        header("Location: index.php");
        exit();
    }

    // Stocker le nombre d'adresses dans la session
    $_SESSION['num_addresses'] = $num_addresses;

    
    header("Location: second.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Adresses</title>
</head>

<body>
    <div class="container">
        <form action="index.php" method="post">
            <label for="num_addresses">Combien d'adresses avez-vous ?</label>
            <input type="number" name="num_addresses" required>
            <input type="submit" value="Suivant">
        </form>
    </div>
</body>

</html>