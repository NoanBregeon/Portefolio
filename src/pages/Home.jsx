import { useState, useEffect } from 'react';
import { Link } from 'react-router-dom';
import { ArrowRight, ChevronDown, Loader2, Server } from 'lucide-react';
import AnimatedSection from '../components/AnimatedSection';

export default function Home() {
  const [featuredProjects, setFeaturedProjects] = useState([]);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    // Simulation contextuelle d'un appel API asynchrone vers un endpoint back-end
    fetch('/api/projects.json')
      .then(res => res.json())
      .then(data => {
        setFeaturedProjects(data.slice(0, 3));
        setLoading(false);
      })
      .catch(err => {
        console.error("Erreur de récupération API :", err);
        setLoading(false);
      });
  }, []);

  return (
    <div className="w-full">
      {/* 1. Page d’accueil (Landing) */}
      <section className="relative min-h-screen flex items-center justify-center pt-20">
        <div className="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          
          {/* Avatar / Photo */}
          <AnimatedSection className="mb-8 relative inline-block group">
            <div className="absolute inset-0 bg-indigo-500 rounded-full blur-xl opacity-50 group-hover:opacity-75 transition duration-500 animate-pulse-slow"></div>
            <div className="w-32 h-32 md:w-40 md:h-40 rounded-full bg-gradient-to-r from-indigo-500 to-purple-600 p-1 shadow-[0_0_30px_rgba(99,102,241,0.5)] relative z-10 transform transition duration-500 group-hover:scale-105">
              <div className="w-full h-full rounded-full bg-gray-800 border-4 border-gray-900 overflow-hidden flex items-center justify-center">
                {/* Profile photo */}
                <img src="/image_photo_profile.webp" alt="Photo de profil" className="w-full h-full object-cover rounded-full" />
              </div>
            </div>
          </AnimatedSection>

          <AnimatedSection delay={0.1}>
            <h1 className="text-4xl md:text-6xl font-extrabold tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-white via-indigo-200 to-indigo-400 mb-4 drop-shadow-sm font-display">
              Développeur Full Stack
            </h1>
          </AnimatedSection>
          
          <AnimatedSection delay={0.2}>
            <h2 className="text-xl md:text-2xl text-indigo-300 font-mono mb-6">
              BTS SIO SLAM — Backend Laravel & C# Avalonia
            </h2>
          </AnimatedSection>

          <AnimatedSection delay={0.3}>
            <p className="text-lg md:text-xl text-gray-300 mb-10 max-w-2xl mx-auto font-light italic font-display">
              « Conception d'architectures métier robustes, d'API sécurisées et de clients lourds performants. »
            </p>
          </AnimatedSection>

          <AnimatedSection delay={0.4} className="flex flex-col sm:flex-row justify-center gap-6 items-center">
            <Link to="/projects" className="magnetic-btn group relative px-8 py-3 bg-indigo-600 text-white font-bold rounded-full overflow-hidden shadow-[0_4px_15px_rgba(79,70,229,0.4)] transition-all duration-300 hover:shadow-[0_8px_25px_rgba(79,70,229,0.6)] hover:-translate-y-1 active:scale-95">
              <span className="absolute inset-0 w-full h-full bg-gradient-to-r from-indigo-500 via-purple-500 to-indigo-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-[length:200%_200%] animate-pulse-slow"></span>
              <span className="relative z-10 block transition-transform duration-300">Voir mes projets</span>
            </Link>
            <Link to="/about" className="magnetic-btn relative px-8 py-3 bg-gray-800/80 hover:bg-gray-700 backdrop-blur-md text-white font-bold rounded-full border border-gray-600 transition-all duration-300 shadow-lg hover:shadow-[0_4px_15px_rgba(255,255,255,0.05)] hover:-translate-y-1 active:scale-95">
              <span className="relative z-10 block transition-transform duration-300">En savoir plus</span>
            </Link>
          </AnimatedSection>
        </div>

        {/* Scroll Indicator */}
        <div className="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce text-gray-500">
          <ChevronDown className="w-6 h-6" />
        </div>
      </section>

      {/* 1.5 PROJET PHARE E6 (Audit GPT: Preuve de niveau) */}
      {!loading && featuredProjects.length > 0 && (
        <section className="py-20 relative z-10">
          <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <AnimatedSection className="mb-12">
              <h2 className="text-sm font-bold text-indigo-500 uppercase tracking-[0.3em] mb-2">Projet Phare / Épreuve E6</h2>
              <h3 className="text-4xl md:text-5xl font-extrabold text-white font-display">Architecture Système Drive</h3>
            </AnimatedSection>

            <AnimatedSection delay={0.2} className="relative group overflow-hidden rounded-3xl border border-indigo-500/30 bg-gray-900/50 backdrop-blur-xl shadow-2xl">
              <div className="absolute top-0 right-0 p-8 text-indigo-500/10 pointer-events-none">
                <Server className="w-64 h-64" />
              </div>
              
              <div className="grid grid-cols-1 lg:grid-cols-2 gap-0">
                <div className="p-8 md:p-12 space-y-6">
                  <div className="flex flex-wrap gap-2">
                    <span className="px-3 py-1 bg-indigo-500 text-white text-[10px] font-bold rounded-full uppercase">Full Stack</span>
                    <span className="px-3 py-1 bg-gray-800 text-indigo-300 text-[10px] font-bold rounded-full uppercase border border-gray-700">Laravel</span>
                    <span className="px-3 py-1 bg-gray-800 text-indigo-300 text-[10px] font-bold rounded-full uppercase border border-gray-700">C# Avalonia</span>
                  </div>
                  
                  <h4 className="text-2xl md:text-3xl font-bold text-white leading-tight">
                    Interconnexion Client Léger & Client Lourd autour d'une base MariaDB
                  </h4>
                  
                  <p className="text-gray-300 leading-relaxed">
                    Développement complet d'un écosystème de Drive. Une infrastructure de production réelle incluant une API REST sécurisée, 
                    un panel d'administration Web (Laravel) et une application de caisse multi-plateforme (C#).
                  </p>

                  <div className="pt-4 flex flex-col sm:flex-row gap-4">
                    <Link to="/projects/systeme-drive-laravel" className="px-6 py-3 bg-white text-gray-900 font-bold rounded-xl hover:bg-indigo-50 transition-colors text-center">
                      Voir l'Étude de Cas
                    </Link>
                    <a href="https://github.com/NoanBregeon/Epreuve_E6_Legere" target="_blank" rel="noreferrer" className="px-6 py-3 border border-gray-700 text-white font-bold rounded-xl hover:bg-gray-800 transition-colors text-center flex items-center justify-center">
                      Code Source (Léger) <ArrowRight className="w-4 h-4 ml-2" />
                    </a>
                  </div>
                </div>
                
                <div className="bg-indigo-600/10 border-l border-indigo-500/20 p-8 md:p-12 flex flex-col justify-center">
                  <ul className="space-y-4">
                    <li className="flex items-start">
                      <div className="mt-1 mr-3 text-indigo-400 font-bold font-mono">01.</div>
                      <p className="text-sm text-gray-300"><strong className="text-white block">Base de Données Centralisée</strong> Modélisation relationnelle stricte sous MariaDB pour garantir l'intégrité des stocks.</p>
                    </li>
                    <li className="flex items-start">
                      <div className="mt-1 mr-3 text-indigo-400 font-bold font-mono">02.</div>
                      <p className="text-sm text-gray-300"><strong className="text-white block">API REST Sécurisée</strong> Communication asynchrone entre le client lourd et le serveur via JWT/Middlewares.</p>
                    </li>
                    <li className="flex items-start">
                      <div className="mt-1 mr-3 text-indigo-400 font-bold font-mono">03.</div>
                      <p className="text-sm text-gray-300"><strong className="text-white block">UX Multi-Interface</strong> Expérience unifiée de la commande web (Blade) jusqu'à la facturation (Avalonia).</p>
                    </li>
                  </ul>
                </div>
              </div>
            </AnimatedSection>
          </div>
        </section>
      )}

      {/* 2. Featured Projects (Aperçu) */}
      <section className="py-24 relative z-10 bg-gray-900/50 backdrop-blur-sm">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <AnimatedSection className="text-center mb-16">
            <h2 className="text-3xl font-bold text-white mb-4">Autres Réalisations</h2>
            <div className="w-24 h-1 bg-indigo-500 mx-auto rounded-full"></div>
          </AnimatedSection>

          <div className="grid grid-cols-1 md:grid-cols-3 gap-8 min-h-[300px]">
            {loading ? (
              <div className="col-span-1 md:col-span-3 flex items-center justify-center">
                <Loader2 className="w-10 h-10 text-indigo-500 animate-spin" />
                <span className="ml-3 text-indigo-300 font-mono">Connexion à l'API...</span>
              </div>
            ) : (
              featuredProjects.map((project, idx) => (
              <AnimatedSection key={project.id} delay={idx * 0.1} className="bg-gray-800/40 backdrop-blur-sm border border-gray-700 rounded-xl p-6 hover:bg-gray-800/70 hover:border-indigo-500/50 hover:shadow-[0_8px_30px_rgba(79,70,229,0.15)] transition-all duration-300 group hover:-translate-y-2 flex flex-col h-full">
                <div className="flex justify-between items-start mb-4">
                  <h3 className="text-xl font-bold text-white group-hover:text-indigo-300 transition-colors duration-300">{project.title}</h3>
                </div>
                <p className="text-gray-400 text-sm mb-4 leading-relaxed flex-grow">
                  {project.description.substring(0, 100)}...
                </p>
                <div className="flex flex-wrap gap-2 text-xs text-gray-500 mb-4">
                  {project.categories.map((cat, i) => (
                    <span key={i} className="px-2 py-1 bg-gray-900/80 rounded-md border border-gray-700/50 text-indigo-300">
                      {cat}
                    </span>
                  ))}
                </div>
                <Link to={`/projects/${project.slug}`} className="text-indigo-400 hover:text-indigo-200 text-sm font-medium flex items-center transition-colors group-hover:translate-x-1 duration-300 mt-auto">
                  Voir le projet <ArrowRight className="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" />
                </Link>
              </AnimatedSection>
            )))}
          </div>

          <AnimatedSection className="text-center mt-12">
            <Link to="/projects" className="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 transition">
              Voir tous les projets
            </Link>
          </AnimatedSection>
        </div>
      </section>

      {/* 3. Short About */}
      <section className="py-24 relative z-10">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <AnimatedSection>
              <h2 className="text-3xl font-bold text-white mb-6">Profil Technique</h2>
              <p className="text-gray-300 mb-6 leading-relaxed">
                Développeur orienté ingénierie logicielle, je conçois des systèmes d'information sécurisés et distribués.
                Spécialisé en déploiement backend (PHP Laravel) et développement de clients lourds (C# Avalonia), je garantis la fiabilité métier, du serveur Linux Debian jusqu'aux interfaces de caisse interconnectées de manière transparente via API.
              </p>
              <Link to="/about" className="text-indigo-400 hover:text-indigo-300 font-medium flex items-center group">
                En savoir plus sur mon infrastructure
                <ArrowRight className="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition" />
              </Link>
            </AnimatedSection>
            
            <AnimatedSection delay={0.2} className="relative">
              <div className="absolute inset-0 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-2xl transform rotate-3 opacity-20"></div>
              <div className="bg-gray-800 border border-gray-700 rounded-2xl p-8 relative">
                <div className="grid grid-cols-2 gap-4">
                  <div className="text-center p-4 bg-gray-900/50 rounded-lg border border-gray-700/50">
                    <span className="block text-2xl font-bold text-indigo-400 mb-1">Backend</span>
                    <span className="text-sm text-gray-400">Laravel / API REST</span>
                  </div>
                  <div className="text-center p-4 bg-gray-900/50 rounded-lg border border-gray-700/50">
                    <span className="block text-2xl font-bold text-indigo-400 mb-1">C#</span>
                    <span className="text-sm text-gray-400">Avalonia / MVVM</span>
                  </div>
                  <div className="text-center p-4 bg-gray-900/50 rounded-lg border border-gray-700/50">
                    <span className="block text-2xl font-bold text-indigo-400 mb-1">MariaDB</span>
                    <span className="text-sm text-gray-400">SGBD Relationnel</span>
                  </div>
                  <div className="text-center p-4 bg-gray-900/50 rounded-lg border border-gray-700/50">
                    <span className="block text-2xl font-bold text-indigo-400 mb-1">Linux</span>
                    <span className="text-sm text-gray-400">Debian / Docker</span>
                  </div>
                </div>
              </div>
            </AnimatedSection>
          </div>
        </div>
      </section>
    </div>
  );
}
