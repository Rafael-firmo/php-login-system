<?php 

if (isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h1> Voce é um Administrador</h1> 
    <button onclick="window.location.href = 'logout.php'"> Sair </button>
</body>
</html>