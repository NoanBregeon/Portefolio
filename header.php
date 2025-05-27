<header class="navbar">
  <div class="container">
    <div class="logo">Mon Portfolio</div>
    <nav>
      <a href="index.php?page=about">À propos</a>
      <a href="index.php?page=competences">Compétences</a>
      <a href="index.php?page=projet">Projets</a>
      <a href="index.php?page=projets_en_cours">Projets en cours</a>
      <a href="index.php?page=blog">Blog</a>
      <a href="index.php?page=temoignages">Témoignages</a>
      <a href="index.php?page=telechargements">Téléchargements</a>
      <a href="index.php?page=faq">FAQ</a>
      <a href="index.php?page=statistiques">Statistiques</a>
      <a href="index.php?page=contact">Contact</a>
      <a href="index.php?page=add_project">Ajouter Projet</a>
    </nav>
  </div>
</header>
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