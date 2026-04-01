import { Link, useLocation } from 'react-router-dom';

export default function Navbar() {
  const location = useLocation();

  const links = [
    { name: 'Accueil', path: '/' },
    { name: 'À propos', path: '/about' },
    { name: 'Projets', path: '/projects' },
    { name: 'Contact', path: '/contact' }
  ];

  return (
    <header className="bg-gray-900/80 backdrop-blur-md border-b border-gray-800 sticky top-0 z-50">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
        <div className="text-2xl font-bold text-indigo-400 hover:text-indigo-300 transition duration-300" style={{ textShadow: "0 0 10px rgba(99, 102, 241, 0.5)" }}>
          <Link to="/">Noan Bregeon</Link>
        </div>
        <nav className="hidden md:flex space-x-8">
          {links.map((link) => {
            const isActive = location.pathname === link.path || (link.path !== '/' && location.pathname.startsWith(link.path));
            
            return (
              <Link
                key={link.path}
                to={link.path}
                className="text-gray-300 hover:text-indigo-400 transition relative group text-sm uppercase tracking-wider"
              >
                {link.name}
                <span className={`absolute -bottom-1 left-0 h-0.5 bg-indigo-400 transition-all duration-300 ${isActive ? 'w-full' : 'w-0 group-hover:w-full'}`}></span>
              </Link>
            )
          })}
        </nav>
      </div>
    </header>
  );
}
