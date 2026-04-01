import AnimatedSection from '../components/AnimatedSection';
import { Mail, MapPin, Send } from 'lucide-react';

export default function Contact() {
  return (
    <div className="w-full pb-20 pt-20 relative overflow-hidden">
      {/* Background glowing blobs */}
      <div className="absolute top-0 left-1/4 w-96 h-96 bg-indigo-600/20 rounded-full blur-[120px] pointer-events-none -z-10 mix-blend-screen"></div>
      <div className="absolute bottom-0 right-1/4 w-96 h-96 bg-purple-600/20 rounded-full blur-[120px] pointer-events-none -z-10 mix-blend-screen"></div>

      <section className="relative z-10 w-full flex flex-col items-center">
        <div className="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <AnimatedSection className="text-center mb-16">
            <h1 className="text-4xl md:text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-white via-indigo-200 to-indigo-400 mb-4 font-display filter drop-shadow-lg">
              Contactez-moi
            </h1>
            <p className="text-gray-400 max-w-2xl mx-auto text-lg leading-relaxed">
              Une opportunité, une question ? N'hésitez pas à m'envoyer un message.
            </p>
            <div className="w-24 h-1.5 bg-gradient-to-r from-indigo-500 to-purple-500 mx-auto rounded-full mt-6 shadow-[0_0_10px_rgba(99,102,241,0.5)]"></div>
          </AnimatedSection>

          <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-5xl mx-auto">
            
            {/* Info */}
            <AnimatedSection delay={0.1} className="flex flex-col justify-center space-y-6">
              <div className="group bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 hover:border-indigo-500/50 hover:bg-white/[0.07] transition-all duration-500 shadow-xl hover:shadow-indigo-500/10">
                <div className="flex items-center space-x-5">
                  <div className="w-14 h-14 bg-indigo-500/10 rounded-full flex items-center justify-center text-indigo-400 group-hover:scale-110 group-hover:text-indigo-300 group-hover:bg-indigo-500/20 transition-all duration-500 shadow-[inset_0px_0px_20px_rgba(99,102,241,0.2)]">
                    <Mail className="w-6 h-6" />
                  </div>
                  <div>
                    <h3 className="text-white font-bold text-xl mb-1 group-hover:text-indigo-200 transition-colors">Email</h3>
                    <a href="mailto:contact@noanbregeon.fr" className="text-gray-400 hover:text-white transition-colors">contact@noanbregeon.fr</a>
                  </div>
                </div>
              </div>

              <div className="group bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 hover:border-purple-500/50 hover:bg-white/[0.07] transition-all duration-500 shadow-xl hover:shadow-purple-500/10">
                <div className="flex items-center space-x-5">
                  <div className="w-14 h-14 bg-purple-500/10 rounded-full flex items-center justify-center text-purple-400 group-hover:scale-110 group-hover:text-purple-300 group-hover:bg-purple-500/20 transition-all duration-500 shadow-[inset_0px_0px_20px_rgba(168,85,247,0.2)]">
                    <MapPin className="w-6 h-6" />
                  </div>
                  <div>
                    <h3 className="text-white font-bold text-xl mb-1 group-hover:text-purple-200 transition-colors">Localisation</h3>
                    <p className="text-gray-400">Nantes, France<br/><span className="text-sm opacity-80">(Disponible à distance)</span></p>
                  </div>
                </div>
              </div>
            </AnimatedSection>

            {/* Form */}
            <AnimatedSection delay={0.2} className="relative group/form">
              {/* Form glowing background border effect */}
              <div className="absolute -inset-0.5 bg-gradient-to-br from-indigo-500/30 to-purple-600/30 rounded-2xl blur opacity-30 group-hover/form:opacity-60 transition duration-500"></div>
              
              <div className="relative bg-gray-900/60 backdrop-blur-2xl border border-white/10 rounded-2xl p-8 shadow-2xl">
                <form className="flex flex-col space-y-5" onSubmit={(e) => e.preventDefault()}>
                  
                  <div className="group relative">
                    <label htmlFor="name" className="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 ml-1 transition-colors group-focus-within:text-indigo-400">Nom Complet</label>
                    <input type="text" id="name" className="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3.5 text-white placeholder-gray-500 focus:outline-none focus:border-indigo-500/50 focus:bg-white/10 focus:ring-4 focus:ring-indigo-500/10 transition-all duration-300" placeholder="Jean Dupont" />
                  </div>
                  
                  <div className="group relative">
                    <label htmlFor="email" className="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 ml-1 transition-colors group-focus-within:text-indigo-400">Email</label>
                    <input type="email" id="email" className="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3.5 text-white placeholder-gray-500 focus:outline-none focus:border-indigo-500/50 focus:bg-white/10 focus:ring-4 focus:ring-indigo-500/10 transition-all duration-300" placeholder="jean@example.com" />
                  </div>
                  
                  <div className="group relative">
                    <label htmlFor="message" className="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 ml-1 transition-colors group-focus-within:text-indigo-400">Message</label>
                    <textarea id="message" rows="4" className="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3.5 text-white placeholder-gray-500 focus:outline-none focus:border-indigo-500/50 focus:bg-white/10 focus:ring-4 focus:ring-indigo-500/10 transition-all duration-300 resize-none" placeholder="Votre message..."></textarea>
                  </div>
                  
                  <button type="submit" className="magnetic-btn w-full mt-2 py-4 px-6 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500 text-white font-bold rounded-xl shadow-[0_0_20px_rgba(99,102,241,0.3)] hover:shadow-[0_0_30px_rgba(99,102,241,0.5)] flex items-center justify-center transform hover:-translate-y-1 transition-all duration-300 overflow-hidden relative group/btn">
                    <span className="absolute w-0 h-0 transition-all duration-500 ease-out bg-white rounded-full group-hover/btn:w-56 group-hover/btn:h-56 opacity-10"></span>
                    <Send className="w-5 h-5 mr-3 relative z-10 group-hover/btn:animate-pulse" />
                    <span className="relative z-10 tracking-wide">Envoyer le message</span>
                  </button>
                </form>
              </div>
            </AnimatedSection>

          </div>
        </div>
      </section>
    </div>
  );
}
