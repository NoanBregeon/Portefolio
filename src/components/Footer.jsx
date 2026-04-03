import { Link } from 'react-router-dom';

export default function Footer() {
  const year = new Date().getFullYear();
  const monthYearLabel = new Date().toLocaleDateString('fr-FR', {
    month: 'long',
    year: 'numeric'
  });

  const navigationLinks = [
    { name: 'Accueil', path: '/' },
    { name: 'Projets', path: '/projects' },
    { name: 'Contact', path: '/contact' }
  ];
  const socialLinks = [
    {
      name: 'GitHub',
      href: 'https://github.com/NoanBregeon',
      isPlaceholder: false
    },
    {
      name: 'LinkedIn',
      href: 'https://www.linkedin.com/in/noan-bregeon/',
      isPlaceholder: false
    }
  ];
  const stack = ['Laravel', 'C#', 'React', 'Docker', 'MySQL'];
  
  return (
    <footer className="bg-gray-900/90 backdrop-blur-md border-t border-gray-800 text-gray-400 py-10 mt-auto">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 pb-8 border-b border-gray-800/80">
          <div className="space-y-3">
            <p className="text-gray-200 font-semibold text-lg">Noan Bregeon</p>
            <p className="text-sm text-gray-300">Developpeur Full-Stack | BTS SIO SLAM</p>
            <p className="text-sm text-gray-500 leading-relaxed">Specialise Laravel, C#, API et architecture logicielle.</p>
            <p className="text-xs italic text-indigo-300/90">"Construire des systemes fiables, pas juste des interfaces."</p>
          </div>

          <div className="space-y-3">
            <p className="text-gray-200 font-medium text-sm uppercase tracking-wider">Navigation</p>
            <nav className="flex flex-col gap-2 text-sm">
              {navigationLinks.map((link) => (
                <Link
                  key={link.path}
                  to={link.path}
                  className="text-gray-400 hover:text-indigo-300 transition-colors"
                >
                  {link.name}
                </Link>
              ))}
              {socialLinks.map((link) => (
                <a
                  key={link.name}
                  href={link.href}
                  target={link.isPlaceholder ? undefined : '_blank'}
                  rel={link.isPlaceholder ? undefined : 'noreferrer'}
                  className={`transition-colors ${link.isPlaceholder ? 'text-gray-600 cursor-not-allowed' : 'text-gray-400 hover:text-indigo-300'}`}
                  aria-disabled={link.isPlaceholder}
                  title={link.isPlaceholder ? 'Lien a renseigner' : link.name}
                >
                  {link.name}{link.isPlaceholder ? ' (a renseigner)' : ''}
                </a>
              ))}
            </nav>
          </div>

          <div className="space-y-3">
            <p className="text-gray-200 font-medium text-sm uppercase tracking-wider">Contact</p>
            <a
              href="mailto:noanbregeon@gmail.com"
              className="text-sm text-gray-300 hover:text-indigo-300 transition-colors break-all"
            >
              noanbregeon@gmail.com
            </a>
            <p className="text-sm text-emerald-300/90">Disponible pour stage / alternance</p>
          </div>

          <div className="space-y-3">
            <p className="text-gray-200 font-medium text-sm uppercase tracking-wider">Stack</p>
            <div className="flex flex-wrap gap-2">
              {stack.map((item) => (
                <span
                  key={item}
                  className="text-xs px-2.5 py-1 rounded-full border border-gray-700 bg-gray-800/60 text-gray-300"
                >
                  {item}
                </span>
              ))}
            </div>
          </div>
        </div>

        <div className="pt-5 flex flex-col gap-3 text-xs text-gray-500 md:flex-row md:items-center md:justify-between">
          <p>&copy; {year} - Concu et developpe par Noan Bregeon.</p>
          <div className="flex items-center gap-4">
            <Link to="/mentions-legales" className="hover:text-indigo-300 transition-colors">Mentions legales</Link>
            <Link to="/confidentialite" className="hover:text-indigo-300 transition-colors">Confidentialite</Link>
          </div>
          <p>Derniere mise a jour : {monthYearLabel}</p>
        </div>
      </div>
    </footer>
  );
}
