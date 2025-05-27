<header class="navbar">
  <div class="container">
    <div class="logo">Mon Portfolio</div>
    <nav>
      <a href="index.php?page=about">À propos</a>
      <a href="index.php?page=projet">Projets</a>
      <a href="index.php?page=CV">CV</a>
      <a href="index.php?page=contact">Contact</a>
      <a href="index.php?page=add_project">Ajouter projet</a>
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