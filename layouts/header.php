<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon Portfolio</title>
  <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<header class="navbar">
  <div class="container">
    <div class="logo">Mon Portfolio</div>
    <nav>
      <a href="index.php?page=about">À propos</a>
      <a href="index.php?page=competences">Compétences</a>
      <a href="index.php?page=projet">Projets</a>
      <a href="index.php?page=projets_en_cours">Projets en cours</a>
      <a href="index.php?page=contact">Contact</a>
      <a href="index.php?page=add_project">Ajouter Projet</a>
      <a href="index.php?page=create_user">Créer Utilisateur</a>
      <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
        <form method="POST" action="" style="display: inline;">
          <button type="submit" name="logout" style="background: none; border: none; color: var(--text-color); cursor: pointer; font-size: 1rem;">Se déconnecter</button>
        </form>
      <?php endif; ?>
    </nav>
  </div>
</header>

<?php
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: index.php?page=login');
    exit;
}
?>
<script>
  let lastScrollTop = 0;
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if (scrollTop > lastScrollTop) {
      navbar.style.top = '-80px';
    } else {
      navbar.style.top = '0';
    }
    lastScrollTop = scrollTop;
  });
</script>