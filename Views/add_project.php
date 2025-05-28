<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: index.php?page=login');
    exit;
}

$host = 'localhost';
$dbname = 'portfolio';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un projet</title>
</head>
<body>
    <section class="add-project">
      <h1>Ajouter un projet</h1>
      <form method="POST" action="">
        <label for="title">Titre :</label><br>
        <input type="text" id="title" name="title" required><br><br>

        <label for="description">Description :</label><br>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="technologies">Technologies :</label><br>
        <input type="text" id="technologies" name="technologies" required><br><br>

        <label for="github_link">Lien GitHub :</label><br>
        <input type="url" id="github_link" name="github_link" required><br><br>

        <button type="submit">Ajouter le projet</button>
      </form>
    </section>

    <?php
    if (isset($_POST['logout'])) {
        session_destroy();
        header('Location: login.php');
        exit;
    }
    ?>

    <form method="POST" action="">
        <button type="submit" name="logout">Se déconnecter</button>
    </form>
</body>
</html>