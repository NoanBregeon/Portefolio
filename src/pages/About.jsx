import { useState, useEffect } from 'react';
import AnimatedSection from '../components/AnimatedSection';
import { Terminal, Database, Server, Layout, Cpu, Code2, CheckCircle, Loader2 } from 'lucide-react';

export default function About() {
  const [experiences, setExperiences] = useState([]);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    fetch('/api/experiences.json')
      .then(res => res.json())
      .then(data => {
        setExperiences(data);
        setLoading(false);
      })
      .catch(err => {
        console.error("Erreur de chargement du parcours :", err);
        setLoading(false);
      });
  }, []);

  const getIcon = (iconName) => {
    switch (iconName) {
      case 'server': return <Server className="w-4 h-4" />;
      case 'terminal': return <Terminal className="w-4 h-4" />;
      case 'database': return <Database className="w-4 h-4" />;
      case 'layout': return <Layout className="w-4 h-4" />;
      case 'cpu': return <Cpu className="w-4 h-4" />;
      case 'code': return <Code2 className="w-4 h-4" />;
      default: return <Terminal className="w-4 h-4" />;
    }
  };

  return (
    <div className="w-full pb-20">
      {/* 2. Présentation (About Me) */}
      <section className="py-24 relative z-10 bg-gray-900/30 backdrop-blur-sm">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <AnimatedSection>
              <h2 className="text-3xl font-bold text-white mb-6 flex items-center font-display">
                <span className="text-indigo-500 mr-3">#</span> À propos de moi
              </h2>
              <div className="prose prose-invert text-gray-300 leading-relaxed font-sans">
                <p>
                  Bonjour, je suis un développeur full stack junior en 2ème année de BTS SIO SLAM.
                  Je conçois et développe des applications métiers avec une forte composante backend et impliquent une gestion rigoureuse des bases de données de l'interface jusqu'au système.
                </p>
                <p className="mt-4">
                  De la modélisation sous MariaDB au développement de clients lourds en C# Avalonia communicant avec un cœur PHP Laravel, je maîtrise les enjeux d'un déploiement complet sur serveur Linux (Docker / Nginx).
                </p>
              </div>

              {/* Mini Stack */}
              <div className="flex flex-wrap gap-3 mt-6">
                <span className="px-3 py-1 bg-gray-800 border border-gray-700 rounded text-sm text-indigo-300">PHP Laravel</span>
                <span className="px-3 py-1 bg-gray-800 border border-gray-700 rounded text-sm text-indigo-300">C# Avalonia</span>
                <span className="px-3 py-1 bg-gray-800 border border-gray-700 rounded text-sm text-indigo-300">MariaDB</span>
                <span className="px-3 py-1 bg-gray-800 border border-gray-700 rounded text-sm text-indigo-300">Docker & Debian</span>
              </div>
            </AnimatedSection>

            {/* Photo de profil */}
            <AnimatedSection delay={0.2} className="flex justify-center items-center group relative">
              <div className="absolute inset-0 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-full blur-xl opacity-20 group-hover:opacity-40 transition-opacity duration-500"></div>
              <div className="relative w-64 h-64 rounded-full border-4 border-indigo-500/50 shadow-2xl overflow-hidden group-hover:shadow-indigo-500/20 group-hover:border-indigo-400 transition-all duration-500">
                <img src="/image_photo_profile.webp" alt="Photo de profil" className="w-full h-full object-cover" />
              </div>
            </AnimatedSection>
          </div>
        </div>
      </section>

      {/* 4. Compétences Techniques */}
      <section className="py-24 relative z-10 bg-gray-900/30 backdrop-blur-sm">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <AnimatedSection className="text-center mb-16">
            <h2 className="text-4xl font-bold text-white mb-4 font-display">Compétences Techniques</h2>
            <div className="w-24 h-1 bg-indigo-500 mx-auto rounded-full"></div>
          </AnimatedSection>

          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            {/* Langages */}
            <AnimatedSection delay={0.1} className="bg-gray-800/50 p-6 rounded-xl border border-gray-700">
              <h3 className="text-lg font-bold text-indigo-400 mb-4 border-b border-gray-700 pb-2">Langages</h3>
              <ul className="space-y-2 text-gray-300">
                <li className="flex items-center"><div className="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></div>PHP 8</li>
                <li className="flex items-center"><div className="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></div>C# .NET</li>
                <li className="flex items-center"><div className="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></div>SQL</li>
                <li className="flex items-center"><div className="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></div>JavaScript / React</li>
              </ul>
            </AnimatedSection>

            {/* Frameworks */}
            <AnimatedSection delay={0.2} className="bg-gray-800/50 p-6 rounded-xl border border-gray-700">
              <h3 className="text-lg font-bold text-indigo-400 mb-4 border-b border-gray-700 pb-2">Frameworks</h3>
              <ul className="space-y-2 text-gray-300">
                <li className="flex items-center"><div className="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></div>Laravel (MVC, API)</li>
                <li className="flex items-center"><div className="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></div>Avalonia (MVVM)</li>
                <li className="flex items-center"><div className="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></div>Vite & React</li>
                <li className="flex items-center"><div className="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></div>Tailwind CSS</li>
              </ul>
            </AnimatedSection>

            {/* Système */}
            <AnimatedSection delay={0.3} className="bg-gray-800/50 p-6 rounded-xl border border-gray-700">
              <h3 className="text-lg font-bold text-indigo-400 mb-4 border-b border-gray-700 pb-2">Système & BDD</h3>
              <ul className="space-y-2 text-gray-300">
                <li className="flex items-center"><div className="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></div>MariaDB / MySQL</li>
                <li className="flex items-center"><div className="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></div>Debian & SSH</li>
                <li className="flex items-center"><div className="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></div>Nginx / Apache</li>
                <li className="flex items-center"><div className="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></div>Docker & Compose</li>
              </ul>
            </AnimatedSection>

            {/* Méthodologie */}
            <AnimatedSection delay={0.4} className="bg-gray-800/50 p-6 rounded-xl border border-gray-700">
              <h3 className="text-lg font-bold text-indigo-400 mb-4 border-b border-gray-700 pb-2">Outils & Concepts</h3>
              <ul className="space-y-2 text-gray-300">
                <li className="flex items-center"><div className="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></div>Architectures Distribuées</li>
                <li className="flex items-center"><div className="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></div>Debug HTTP (500/502)</li>
                <li className="flex items-center"><div className="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></div>Client Léger / Lourd</li>
                <li className="flex items-center"><div className="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></div>Git / GitHub</li>
              </ul>
            </AnimatedSection>
          </div>
        </div>
      </section>

      {/* 5. Soft Skills & Parcours */}
      <section className="py-24 relative z-10">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="space-y-8">
            {/* Parcours */}
            <AnimatedSection delay={0.2} className="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 shadow-xl hover:shadow-[0_0_30px_rgba(99,102,241,0.1)] transition-all duration-500 relative overflow-hidden group/timeline">
              <div className="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-indigo-500/5 rounded-full blur-[80px] pointer-events-none group-hover/timeline:bg-indigo-500/10 transition-all duration-500 z-0"></div>
              
              <h3 className="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-white to-indigo-200 mb-8 font-display relative z-10">Mon Parcours</h3>
              
              <ol className="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4 z-10">
                {loading ? (
                  <div className="flex items-center justify-center py-10 md:col-span-2 xl:col-span-4">
                    <Loader2 className="w-8 h-8 text-indigo-500 animate-spin" />
                  </div>
                ) : (
                experiences.map((xp, index) => (
                  <li key={index} className="group cursor-default h-full">
                    <div className="h-full bg-white/[0.03] border border-white/10 p-6 rounded-xl group-hover:bg-white/[0.06] group-hover:border-indigo-500/40 transition-all duration-500 shadow-lg group-hover:shadow-[0_8px_25px_rgba(99,102,241,0.15)] group-hover:-translate-y-1 flex flex-col gap-4">
                      <div className="w-11 h-11 rounded-full bg-gray-900 ring-1 ring-white/10 text-indigo-400 flex items-center justify-center shadow-[0_0_15px_rgba(99,102,241,0.35)] group-hover:bg-indigo-600 group-hover:text-white transition-all duration-500">
                        {getIcon(xp.icon)}
                      </div>
                      <div>
                        <h4 className="mb-1 text-lg font-extrabold text-white group-hover:text-indigo-300 transition-colors duration-300">{xp.title}</h4>
                        <time className="block mb-3 text-sm font-medium text-indigo-300/80">
                          <span className="text-gray-300">{xp.company}</span> <span className="mx-2 opacity-40">|</span> <span className="text-indigo-400">{xp.date}</span>
                        </time>
                        <p className="text-sm text-gray-400 leading-relaxed font-light">{xp.description}</p>
                      </div>
                    </div>
                  </li>
                )))}
              </ol>
            </AnimatedSection>

            <div className="grid grid-cols-1 lg:grid-cols-2 gap-8">
              {/* Soft Skills */}
              <AnimatedSection className="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 shadow-xl hover:shadow-[0_0_30px_rgba(99,102,241,0.1)] transition-all duration-500 relative overflow-hidden group/card">
                <div className="absolute top-0 right-0 w-32 h-32 bg-indigo-500/10 rounded-full blur-[50px] pointer-events-none group-hover/card:bg-indigo-500/20 transition-all duration-500"></div>
                <h3 className="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-white to-indigo-200 mb-8 font-display">Soft Skills</h3>
                <div className="space-y-6">
                  <div className="flex items-start group">
                    <div className="w-12 h-12 rounded-full bg-indigo-500/10 flex items-center justify-center text-indigo-400 mr-5 mt-1 group-hover:scale-110 group-hover:bg-indigo-500/20 group-hover:text-indigo-300 transition-all duration-500 shadow-[inset_0px_0px_10px_rgba(99,102,241,0.2)]">
                      <CheckCircle className="w-6 h-6" />
                    </div>
                    <div>
                      <h4 className="text-white font-bold text-lg mb-1 group-hover:text-indigo-300 transition-colors">Autonomie</h4>
                      <p className="text-sm text-gray-400 group-hover:text-gray-300 transition-colors">Capacité à concevoir et déployer des projets complets (Laravel, C#, Docker) sans supervision, de la modélisation BDD jusqu'à la mise en production.</p>
                    </div>
                  </div>
                  <div className="flex items-start group">
                    <div className="w-12 h-12 rounded-full bg-purple-500/10 flex items-center justify-center text-purple-400 mr-5 mt-1 group-hover:scale-110 group-hover:bg-purple-500/20 group-hover:text-purple-300 transition-all duration-500 shadow-[inset_0px_0px_10px_rgba(168,85,247,0.2)]">
                      <CheckCircle className="w-6 h-6" />
                    </div>
                    <div>
                      <h4 className="text-white font-bold text-lg mb-1 group-hover:text-purple-300 transition-colors">Adaptabilité</h4>
                      <p className="text-sm text-gray-400 group-hover:text-gray-300 transition-colors">Aisance à changer de stack ou d'architecture (MVC → API REST, monolithe → conteneurisation Docker) selon les contraintes projet.</p>
                    </div>
                  </div>
                  <div className="flex items-start group">
                    <div className="w-12 h-12 rounded-full bg-pink-500/10 flex items-center justify-center text-pink-400 mr-5 mt-1 group-hover:scale-110 group-hover:bg-pink-500/20 group-hover:text-pink-300 transition-all duration-500 shadow-[inset_0px_0px_10px_rgba(236,72,153,0.2)]">
                      <CheckCircle className="w-6 h-6" />
                    </div>
                    <div>
                      <h4 className="text-white font-bold text-lg mb-1 group-hover:text-pink-300 transition-colors">Résolution de problèmes</h4>
                      <p className="text-sm text-gray-400 group-hover:text-gray-300 transition-colors">Analyse et correction d'erreurs complexes (permissions Linux, Docker, Nginx, Laravel) en environnement réel.</p>
                    </div>
                  </div>
                  <div className="flex items-start group">
                    <div className="w-12 h-12 rounded-full bg-cyan-500/10 flex items-center justify-center text-cyan-400 mr-5 mt-1 group-hover:scale-110 group-hover:bg-cyan-500/20 group-hover:text-cyan-300 transition-all duration-500 shadow-[inset_0px_0px_10px_rgba(34,211,238,0.2)]">
                      <CheckCircle className="w-6 h-6" />
                    </div>
                    <div>
                      <h4 className="text-white font-bold text-lg mb-1 group-hover:text-cyan-300 transition-colors">Rigueur technique</h4>
                      <p className="text-sm text-gray-400 group-hover:text-gray-300 transition-colors">Respect des bonnes pratiques (MVC, séparation des couches, sécurité BDD, normalisation).</p>
                    </div>
                  </div>
                </div>
              </AnimatedSection>

              {/* Veille */}
              <AnimatedSection delay={0.4} className="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 shadow-xl hover:shadow-[0_0_30px_rgba(99,102,241,0.1)] transition-all duration-500 relative overflow-hidden group/veille">
                <div className="absolute bottom-0 left-0 w-32 h-32 bg-purple-500/10 rounded-full blur-[50px] pointer-events-none group-hover/veille:bg-purple-500/20 transition-all duration-500"></div>
                <h3 className="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-white to-purple-200 mb-8 font-display">Veille Techno</h3>
                <div className="space-y-4">
                  <div className="bg-white/[0.03] p-4 rounded-xl border border-white/5 hover:border-indigo-500/40 hover:bg-white/[0.06] transition-all duration-300 cursor-default group hover:-translate-y-1 hover:shadow-lg hover:shadow-indigo-500/10">
                    <span className="text-indigo-400 font-bold block text-base mb-1 group-hover:text-indigo-300 transition-colors">Écosystème PHP & Laravel</span>
                    <span className="text-xs text-gray-400 leading-relaxed block">Suivi des évolutions Laravel (12.x), optimisation des performances (requêtes SQL, Eloquent), et bonnes pratiques MVC pour applications scalables.</span>
                  </div>
                  <div className="bg-white/[0.03] p-4 rounded-xl border border-white/5 hover:border-purple-500/40 hover:bg-white/[0.06] transition-all duration-300 cursor-default group hover:-translate-y-1 hover:shadow-lg hover:shadow-purple-500/10">
                    <span className="text-purple-400 font-bold block text-base mb-1 group-hover:text-purple-300 transition-colors">Déploiement Docker & Linux</span>
                    <span className="text-xs text-gray-400 leading-relaxed block">Veille sur les workflows de déploiement (Docker Compose, CI/CD GitHub Actions), gestion des permissions Linux et optimisation des environnements serveur.</span>
                  </div>
                  <div className="bg-white/[0.03] p-4 rounded-xl border border-white/5 hover:border-pink-500/40 hover:bg-white/[0.06] transition-all duration-300 cursor-default group hover:-translate-y-1 hover:shadow-lg hover:shadow-pink-500/10">
                    <span className="text-pink-400 font-bold block text-base mb-1 group-hover:text-pink-300 transition-colors">Architecture logicielle & API REST</span>
                    <span className="text-xs text-gray-400 leading-relaxed block">Étude des échanges entre applications (client lourd / client léger), mapping de données, intégration d'API externes.</span>
                  </div>
                  <div className="bg-white/[0.03] p-4 rounded-xl border border-white/5 hover:border-cyan-500/40 hover:bg-white/[0.06] transition-all duration-300 cursor-default group hover:-translate-y-1 hover:shadow-lg hover:shadow-cyan-500/10">
                    <span className="text-cyan-400 font-bold block text-base mb-1 group-hover:text-cyan-300 transition-colors">Sécurité Web & BDD</span>
                    <span className="text-xs text-gray-400 leading-relaxed block">Sensibilisation aux bonnes pratiques : gestion des accès, isolation des services, sécurisation des connexions base de données.</span>
                  </div>
                </div>
              </AnimatedSection>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}
