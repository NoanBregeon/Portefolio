<?php
$page = $_GET['page'] ?? 'about';
$allowed_pages = ['about', 'projet', 'CV', 'contact'];
if (!in_array($page, $allowed_pages)) {
    $page = 'about';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <?php include 'header.php'; ?>
  <main>
    <?php include $page . '.php'; ?>
  </main>
  <?php include 'footer.php'; ?>
  <script src="assets/js/main.js"></script>
</body>
</html>