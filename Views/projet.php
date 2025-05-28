<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$host = 'localhost';
$dbname = 'portfolio';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT * FROM projects ORDER BY created_at DESC");
    $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
?>

<section class="projects">
  <h1>Mes Projets</h1>
  <div class="project-cards">
    <?php foreach ($projects as $project): ?>
      <div class="card">
        <h2><?= htmlspecialchars($project['title']) ?></h2>
        <p><?= htmlspecialchars($project['description']) ?></p>
        <p><strong>Technologies :</strong> <?= htmlspecialchars($project['technologies']) ?></p>
        <a href="<?= htmlspecialchars($project['github_link']) ?>" target="_blank">Voir le projet sur GitHub</a>
      </div>
    <?php endforeach; ?>
  </div>
</section>
</body>
</html>