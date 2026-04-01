import { useState, useEffect } from 'react';
import { useParams, Link } from 'react-router-dom';
import AnimatedSection from '../components/AnimatedSection';
import { ArrowLeft, GitBranch, ExternalLink, Server, Database, Globe, Monitor, Code, ShieldAlert, Cpu, Layers } from 'lucide-react';

export default function ProjectDetail() {
  const { slug } = useParams();
  const [project, setProject] = useState(null);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    // Appel asynchrone simulant la récupération des données d'un projet précis
    fetch('/api/projects.json')
      .then(res => res.json())
      .then(data => {
        const found = data.find(p => p.slug === slug);
        setProject(found || null);
        setLoading(false);
      })
      .catch(err => {
        console.error("Erreur API:", err);
        setLoading(false);
      });
  }, [slug]);

  if (loading) {
    return (
      <div className="w-full h-screen flex flex-col items-center justify-center">
        <div className="w-12 h-12 border-4 border-indigo-500 border-t-transparent rounded-full animate-spin mb-4"></div>
        <span className="text-indigo-300 font-mono">Chargement des détails techniques...</span>
      </div>
    );
  }

  if (!project) {
    return (
      <div className="w-full h-screen flex flex-col items-center justify-center">
        <h2 className="text-3xl font-bold text-white mb-4">Projet introuvable</h2>
        <Link to="/projects" className="text-indigo-400 hover:underline">Retour aux projets</Link>
      </div>
    );
  }

  return (
    <div className="w-full pb-20 pt-10">
      <div className="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <AnimatedSection className="mb-8">
          <Link to="/projects" className="inline-flex items-center text-sm text-gray-400 hover:text-indigo-400 transition-colors">
            <ArrowLeft className="w-4 h-4 mr-2" />
            Retour aux projets
          </Link>
        </AnimatedSection>

        {/* Gallery / Header Cover */}
        <AnimatedSection delay={0.1} className="mb-12">
          {project.gallery && project.gallery.length > 0 ? (
            <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
              {project.gallery.map((img, i) => (
                <div key={i} className="relative group aspect-video rounded-2xl overflow-hidden border border-gray-700 shadow-xl">
                  <div className="absolute inset-0 bg-indigo-500/10 group-hover:bg-transparent transition-colors duration-300 z-10"></div>
                  <img src={img.url} alt={img.alt} className="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                  <div className="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-gray-900 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                    <p className="text-white text-xs font-medium">{img.alt}</p>
                  </div>
                </div>
              ))}
            </div>
          ) : (
            <div className="w-full h-48 md:h-64 bg-gray-900 rounded-2xl overflow-hidden relative border border-gray-700 shadow-xl">
              <div className="absolute inset-0 bg-gradient-to-br from-indigo-500/20 to-purple-600/20"></div>
              <div className="w-full h-full flex flex-col items-center justify-center relative z-10">
                <Code className="w-16 h-16 text-indigo-500/50 mb-4" />
                <span className="font-mono text-indigo-300/50 text-xl tracking-widest">{project.slug.toUpperCase()}</span>
              </div>
            </div>
          )}
        </AnimatedSection>

        {/* Content */}
        <AnimatedSection delay={0.2}>
          <div className="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-6">
            <h1 className="text-3xl md:text-5xl font-extrabold text-white font-display text-transparent bg-clip-text bg-gradient-to-r from-white to-gray-400">{project.title}</h1>
            <div className="flex gap-4">
              {project.githubUrl && project.githubUrl !== '#' && (
                <a href={project.githubUrl} target="_blank" rel="noreferrer" className="flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-700 border border-gray-600 rounded-lg text-white transition font-medium text-sm">
                  <GitBranch className="w-4 h-4 mr-2" /> Dépôt GitHub
                </a>
              )}
              {project.liveUrl && project.liveUrl !== '#' && (
                <a href={project.liveUrl} target="_blank" rel="noreferrer" className="flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-500 text-white rounded-lg transition shadow-lg shadow-indigo-500/20 font-medium text-sm">
                  <ExternalLink className="w-4 h-4 mr-2" /> Visiter en direct
                </a>
              )}
            </div>
          </div>
          
          <div className="flex flex-wrap gap-2 mb-10 pb-8 border-b border-gray-800">
            {project.categories.map((cat, i) => (
              <span key={i} className="px-3 py-1 bg-indigo-500/10 border border-indigo-500/30 rounded-md text-indigo-300 font-medium tracking-wide text-xs">
                {cat}
              </span>
            ))}
          </div>

          <div className="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            {/* Main Content Column */}
            <div className="lg:col-span-2 space-y-10">
              
              {/* Contexte E6 */}
              {project.context && (
                <section>
                  <h2 className="text-2xl font-bold text-white mb-4 flex items-center font-display">
                    <span className="text-indigo-500 mr-2">#</span> Contexte du Projet
                  </h2>
                  <p className="text-gray-300 leading-relaxed text-md bg-gray-800/30 p-6 rounded-xl border-l-4 border-indigo-500 shadow-inner">
                    {project.context}
                  </p>
                </section>
              )}

              {/* Description & Fonctionnement */}
              <section>
                <h2 className="text-2xl font-bold text-white mb-4 flex items-center font-display">
                  <span className="text-indigo-500 mr-2">#</span> Fonctionnement Technique
                </h2>
                <div className="prose prose-invert prose-indigo max-w-none text-gray-300 leading-relaxed">
                  <p className="text-lg font-light mb-4 text-gray-200">{project.description}</p>
                  <p>{project.content}</p>
                </div>
              </section>

              {/* Architecture - Modèle Visuel CSS */}
              {project.architecture && (
                <section>
                  <h2 className="text-2xl font-bold text-white mb-6 flex items-center font-display">
                    <span className="text-indigo-500 mr-2">#</span> Architecture & Topologie
                  </h2>
                  
                  {/* Diagramme d'architecture CSS dynamique pour preuve technique */}
                  <div className="w-full bg-gray-900/80 rounded-2xl border border-gray-700 p-8 mb-6 overflow-x-auto shadow-2xl">
                    <div className="min-w-[550px] flex items-center justify-between relative py-4">
                      {/* Ligne de connexion */}
                      <div className="absolute left-16 right-16 top-1/2 h-0.5 bg-gradient-to-r from-blue-500/50 via-indigo-500 to-purple-500/50 -z-10"></div>
                      
                      {/* Node Front/Client */}
                      <div className="flex flex-col items-center bg-gray-800 border-2 border-blue-500/30 p-4 rounded-xl shadow-[0_0_15px_rgba(59,130,246,0.1)] w-36 relative group">
                        <div className="absolute -top-3 px-2 bg-blue-500/20 text-blue-300 text-[10px] rounded-full uppercase font-bold tracking-wider">Frontend</div>
                        {project.slug.includes('caisse') ? <Monitor className="w-10 h-10 text-blue-400 mb-3"/> : <Globe className="w-10 h-10 text-blue-400 mb-3"/>}
                        <span className="text-sm text-center font-bold text-white">
                          {project.slug.includes('caisse') ? 'Avalonia UI' : 'Laravel Blade'}
                        </span>
                      </div>

                      {/* Flux API */}
                      <div className="px-3 text-xs font-mono text-indigo-300 bg-gray-950 border border-indigo-500/50 py-1.5 rounded flex flex-col items-center">
                        <span>HTTP(S)</span>
                        <span className="text-[10px] text-gray-500">API REST</span>
                      </div>

                      {/* Node Backend */}
                      <div className="flex flex-col items-center bg-gray-800 border-2 border-indigo-500/50 p-4 rounded-xl shadow-[0_0_20px_rgba(99,102,241,0.2)] w-36 relative group">
                        <div className="absolute -top-3 px-2 bg-indigo-500/20 text-indigo-300 text-[10px] rounded-full uppercase font-bold tracking-wider">Backend</div>
                        <Server className="w-10 h-10 text-indigo-400 mb-3"/>
                        <span className="text-sm text-center font-bold text-white">Serveur Web</span>
                      </div>

                      {/* Flux DB */}
                      <div className="px-3 text-xs font-mono text-purple-300 bg-gray-950 border border-purple-500/50 py-1.5 rounded flex flex-col items-center">
                        <span>TCP</span>
                        <span className="text-[10px] text-gray-500">Port 3306</span>
                      </div>

                      {/* Node DB */}
                      <div className="flex flex-col items-center bg-gray-800 border-2 border-purple-500/30 p-4 rounded-xl shadow-[0_0_15px_rgba(168,85,247,0.1)] w-36 relative group">
                        <div className="absolute -top-3 px-2 bg-purple-500/20 text-purple-300 text-[10px] rounded-full uppercase font-bold tracking-wider">Data</div>
                        <Database className="w-10 h-10 text-purple-400 mb-3"/>
                        <span className="text-sm text-center font-bold text-white">MariaDB</span>
                      </div>
                    </div>
                  </div>

                  <p className="text-gray-400 leading-relaxed text-sm bg-gray-800/10 p-4 rounded border border-gray-800 inline-block">
                    ↳ {project.architecture}
                  </p>
                </section>
              )}

              {/* Deep Tech - Résolution de Problèmes */}
              {project.deepTech && (
                <section className="bg-red-500/5 border border-red-500/20 rounded-2xl p-8 relative overflow-hidden">
                  <div className="absolute top-0 right-0 p-4 text-red-500/20">
                    <ShieldAlert className="w-16 h-16" />
                  </div>
                  <h2 className="text-2xl font-bold text-white mb-6 flex items-center font-display">
                    <span className="text-red-500 mr-2">#</span> Deep Tech : Résolution Critique
                  </h2>
                  <div className="space-y-4 relative z-10">
                    <div>
                      <h4 className="text-red-400 font-bold text-sm uppercase tracking-wider mb-1">Problématique</h4>
                      <p className="text-gray-200">{project.deepTech.problem}</p>
                    </div>
                    <div>
                      <h4 className="text-green-400 font-bold text-sm uppercase tracking-wider mb-1">Solution Implémentée</h4>
                      <p className="text-gray-300 italic">"{project.deepTech.solution}"</p>
                    </div>
                  </div>
                </section>
              )}

              {/* Code Snippets */}
              {project.codeSnippets && project.codeSnippets.length > 0 && (
                <section>
                  <h2 className="text-2xl font-bold text-white mb-6 flex items-center font-display">
                    <span className="text-indigo-500 mr-2">#</span> Extraits de Code Sources
                  </h2>
                  <div className="space-y-6">
                    {project.codeSnippets.map((snippet, i) => (
                      <div key={i} className="bg-gray-950 rounded-xl border border-gray-800 overflow-hidden shadow-2xl">
                        <div className="bg-gray-900 px-4 py-2 border-b border-gray-800 flex justify-between items-center">
                          <span className="text-xs font-mono text-gray-400">{snippet.title}</span>
                          <span className="text-[10px] px-2 py-0.5 bg-indigo-500/20 text-indigo-300 rounded uppercase font-bold">{snippet.language}</span>
                        </div>
                        <pre className="p-5 overflow-x-auto text-sm font-mono text-indigo-200 leading-relaxed">
                          <code>{snippet.code}</code>
                        </pre>
                      </div>
                    ))}
                  </div>
                </section>
              )}

              {/* Evolution & Scalabilité */}
              {project.evolution && (
                <section className="bg-indigo-500/5 border border-indigo-500/20 rounded-2xl p-8">
                  <h2 className="text-2xl font-bold text-white mb-6 flex items-center font-display">
                    <span className="text-indigo-500 mr-2">#</span> État Actuel & Évolution
                  </h2>
                  <div className="flex gap-6 items-start">
                    <div className="p-3 bg-indigo-500/10 rounded-xl border border-indigo-500/30 text-indigo-400">
                      <Cpu className="w-8 h-8" />
                    </div>
                    <p className="text-gray-300 leading-relaxed italic">
                      {project.evolution}
                    </p>
                  </div>
                </section>
              )}

            </div>

            {/* Sidebar (Contraintes techniques) */}
            <div className="lg:col-span-1">
              {project.constraints && (
                <div className="sticky top-24">
                  <div className="bg-gray-800/40 backdrop-blur-md rounded-2xl border border-gray-700 p-6 overflow-hidden relative shadow-lg">
                    {/* Glowing effect background */}
                    <div className="absolute -top-20 -right-20 w-48 h-48 bg-indigo-500/10 rounded-full blur-[50px] pointer-events-none"></div>
                    <div className="absolute -bottom-20 -left-20 w-48 h-48 bg-purple-500/10 rounded-full blur-[50px] pointer-events-none"></div>
                    
                    <h3 className="text-xl font-bold text-white mb-6 border-b border-gray-700 pb-3 flex items-center font-display">
                      Contraintes & Défis
                    </h3>
                    <ul className="space-y-5">
                      {project.constraints.map((constraint, i) => (
                        <li key={i} className="flex items-start group">
                          <div className="w-6 h-6 rounded bg-indigo-500/10 border border-indigo-500/30 text-indigo-400 flex items-center justify-center font-mono text-xs mr-3 shrink-0 group-hover:bg-indigo-500 group-hover:text-white transition-colors">
                            {i+1}
                          </div>
                          <span className="text-gray-300 text-sm leading-relaxed mt-0.5 group-hover:text-white transition-colors">{constraint}</span>
                        </li>
                      ))}
                    </ul>
                  </div>
                </div>
              )}
            </div>

          </div>
        </AnimatedSection>
      </div>
    </div>
  );
}
