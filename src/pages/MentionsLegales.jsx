import AnimatedSection from '../components/AnimatedSection';

export default function MentionsLegales() {
  return (
    <div className="w-full pb-20 pt-20 relative overflow-hidden">
      <section className="relative z-10 w-full flex flex-col items-center">
        <div className="w-full max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
          <AnimatedSection className="text-center mb-12">
            <h1 className="text-4xl md:text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-white via-indigo-200 to-indigo-400 mb-4">
              Mentions legales
            </h1>
            <p className="text-gray-400 max-w-2xl mx-auto">
              Informations legales et editeur du site noanbregeon.com.
            </p>
          </AnimatedSection>

          <AnimatedSection delay={0.1} className="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 space-y-6 text-gray-300 leading-relaxed">
            <div>
              <h2 className="text-white font-semibold mb-2">Editeur</h2>
              <p>Noan Bregeon</p>
              <p>Nantes, France</p>
              <p>
                Email : <a href="mailto:noanbregeon@gmail.com" className="text-indigo-300 hover:text-indigo-200">noanbregeon@gmail.com</a>
              </p>
            </div>

            <div>
              <h2 className="text-white font-semibold mb-2">Propriete intellectuelle</h2>
              <p>
                L'ensemble des contenus presents sur ce portfolio (textes, visuels, code, maquettes) est protege.
                Toute reproduction, totale ou partielle, sans autorisation prealable est interdite.
              </p>
            </div>

            <div>
              <h2 className="text-white font-semibold mb-2">Hebergement</h2>
              <p>Hebergeur : a completer selon la plateforme de production.</p>
            </div>
          </AnimatedSection>
        </div>
      </section>
    </div>
  );
}
