import { useState, useEffect } from 'react';
import { Link } from 'react-router-dom';
import AnimatedSection from '../components/AnimatedSection';
import { ArrowRight, GitBranch, ExternalLink, Loader2 } from 'lucide-react';

export default function Projects() {
  const [projects, setProjects] = useState([]);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    fetch('/api/projects.json')
      .then(res => res.json())
      .then(data => {
        setProjects(data);
        setLoading(false);
      })
      .catch(err => {
        console.error("Erreur de l'API de base de données :", err);
        setLoading(false);
      });
  }, []);

  return (
    <div className="w-full pb-20 pt-20">
      <section className="relative z-10">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <AnimatedSection className="text-center mb-16">
            <h1 className="text-4xl md:text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-white via-indigo-200 to-indigo-400 mb-4 font-display">
              Mes Projets
            </h1>
            <p className="text-gray-400 max-w-2xl mx-auto text-lg">
              Découvrez une sélection de mes réalisations passées.
            </p>
            <div className="w-24 h-1 bg-indigo-500 mx-auto rounded-full mt-6"></div>
          </AnimatedSection>

          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 min-h-[300px]">
            {loading ? (
              <div className="col-span-1 md:col-span-3 lg:col-span-3 flex flex-col items-center justify-center">
                <Loader2 className="w-12 h-12 text-indigo-500 animate-spin mb-4" />
                <span className="text-indigo-300 font-mono">Récupération des données métiers...</span>
              </div>
            ) : (
            projects.map((project, idx) => (
              <AnimatedSection key={project.id} delay={idx * 0.15} className="bg-gray-800/40 backdrop-blur-sm border border-gray-700 rounded-xl overflow-hidden hover:border-indigo-500/50 hover:shadow-[0_8px_30px_rgba(79,70,229,0.15)] transition-all duration-300 group hover:-translate-y-2 flex flex-col h-full">
                
                {/* Project Image Placeholder */}
                <div className="w-full h-48 bg-gray-900 border-b border-gray-700 flex items-center justify-center relative overflow-hidden">
                  <div className="absolute inset-0 bg-gradient-to-br from-indigo-500/20 to-purple-600/20 group-hover:scale-110 transition-transform duration-500"></div>
                  {project.image ? (
                    <img src={project.image} alt={project.title} className="w-full h-full object-cover relative z-10" />
                  ) : (
                    <span className="text-gray-600 font-mono relative z-10">IMAGE_PROJET</span>
                  )}
                </div>

                <div className="p-6 flex flex-col flex-grow">
                  <h3 className="text-2xl font-bold text-white group-hover:text-indigo-300 transition-colors duration-300 mb-3">{project.title}</h3>
                  <p className="text-gray-400 text-sm mb-6 leading-relaxed flex-grow">
                    {project.description}
                  </p>
                  
                  <div className="flex flex-wrap gap-2 text-xs text-gray-500 mb-6">
                    {project.categories.map((cat, i) => (
                      <span key={i} className="px-2 py-1 bg-gray-900/80 rounded-md border border-gray-700/50 text-indigo-300">
                        {cat}
                      </span>
                    ))}
                  </div>

                  <div className="flex items-center justify-between mt-auto border-t border-gray-700/50 pt-4">
                    <div className="flex gap-3 text-gray-400">
                      {project.githubUrl && project.githubUrl !== '#' && (
                        <a href={project.githubUrl} target="_blank" rel="noreferrer" className="hover:text-white transition-colors">
                          <GitBranch className="w-5 h-5" />
                        </a>
                      )}
                      {project.liveUrl && project.liveUrl !== '#' && (
                        <a href={project.liveUrl} target="_blank" rel="noreferrer" className="hover:text-white transition-colors">
                          <ExternalLink className="w-5 h-5" />
                        </a>
                      )}
                    </div>
                    <Link to={`/projects/${project.slug}`} className="text-indigo-400 hover:text-indigo-200 text-sm font-medium flex items-center transition-colors">
                      Détails <ArrowRight className="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" />
                    </Link>
                  </div>
                </div>
              </AnimatedSection>
            )))}
          </div>
        </div>
      </section>
    </div>
  );
}
