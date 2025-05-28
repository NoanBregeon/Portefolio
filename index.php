<?php
require_once 'controllers/PageController.php';
require_once 'controllers/ProjectController.php';

$page = $_GET['page'] ?? 'about';

$data = []; // Tableau pour stocker les données à transmettre aux vues

switch ($page) {
    case 'about':
    case 'CV':
    case 'contact':
    case 'competences':
    case 'projets_en_cours':
    case 'create_user': // Ajout de la page "Créer Utilisateur"
        $view = "views/$page.php";
        break;
    case 'projet':
        $data['projects'] = ProjectController::listProjects(); // Récupère les projets
        $view = "views/projet.php";
        break;
    case 'add_project':
        ProjectController::addProject(); // Gère l'ajout de projet
        $view = "views/add_project.php";
        break;
        case 'login':
        // Redirection vers la page de connexion si nécessaire
        $view = "views/login.php";
        break;
    default:
        $view = "views/about.php";
        break;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/styles.css">
  <title>Portfolio</title>
</head>
<body>
  <?php include 'layouts/header.php'; ?>
  <main>
    <?php include $view; ?>
  </main>
  <?php include 'layouts/footer.php'; ?>
  <script src="assets/js/main.js"></script>
</body>
</html>