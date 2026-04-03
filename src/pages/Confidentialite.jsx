import AnimatedSection from '../components/AnimatedSection';

export default function Confidentialite() {
  return (
    <div className="w-full pb-20 pt-20 relative overflow-hidden">
      <section className="relative z-10 w-full flex flex-col items-center">
        <div className="w-full max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
          <AnimatedSection className="text-center mb-12">
            <h1 className="text-4xl md:text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-white via-indigo-200 to-indigo-400 mb-4">
              Politique de confidentialite
            </h1>
            <p className="text-gray-400 max-w-2xl mx-auto">
              Transparence sur l'utilisation des donnees de contact de ce portfolio.
            </p>
          </AnimatedSection>

          <AnimatedSection delay={0.1} className="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 space-y-6 text-gray-300 leading-relaxed">
            <div>
              <h2 className="text-white font-semibold mb-2">Donnees collectees</h2>
              <p>
                Ce site ne collecte pas de donnees personnelles de maniere automatique. Les informations
                transmises via email (adresse et message) sont utilisees uniquement pour repondre aux demandes.
              </p>
            </div>

            <div>
              <h2 className="text-white font-semibold mb-2">Conservation</h2>
              <p>
                Les echanges sont conserves uniquement le temps necessaire au suivi de la demande, puis supprimes.
              </p>
            </div>

            <div>
              <h2 className="text-white font-semibold mb-2">Contact</h2>
              <p>
                Pour toute question liee a la confidentialite, contactez
                {' '}
                <a href="mailto:noanbregeon@gmail.com" className="text-indigo-300 hover:text-indigo-200">noanbregeon@gmail.com</a>.
              </p>
            </div>
          </AnimatedSection>
        </div>
      </section>
    </div>
  );
}
