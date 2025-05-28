<?php
session_start();

$host = 'localhost';
$dbname = 'portfolio';
$username = 'root';
$password = '';

$message = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $newUsername = $_POST['username'];
        $plainPassword = $_POST['password'];

        // Vérifie si le nom d'utilisateur existe déjà
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$newUsername]);
        if ($stmt->rowCount() > 0) {
            $message = "Ce nom d'utilisateur existe déjà.";
        } else {
            // Hash le mot de passe
            $hashedPassword = password_hash($plainPassword, PASSWORD_DEFAULT);

            // Insère l'utilisateur dans la base de données
            $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
            $stmt->execute([$newUsername, $hashedPassword]);

            $message = "Utilisateur créé avec succès !";
        }
    }
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un utilisateur</title>
</head>
<body>
    <h1>Créer un utilisateur</h1>
    <?php if (!empty($message)): ?>
        <p style="color: green;"><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>
    <form method="POST" action="">
        <label for="username">Nom d'utilisateur :</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Créer l'utilisateur</button>
    </form>
</body>
</html>