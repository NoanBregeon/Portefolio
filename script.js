// Exemple de script simple : scroll vers le haut en cliquant sur le pied de page
document.querySelector('footer').addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});
