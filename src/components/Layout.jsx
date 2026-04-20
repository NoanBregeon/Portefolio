import { useEffect, useState } from 'react';
import Navbar from './Navbar';
import Footer from './Footer';
import ThreeBackground from './ThreeBackground';
import AnimationContext from '../context/AnimationContext';

export default function Layout({ children }) {
  const [cursorPos, setCursorPos] = useState({ x: -100, y: -100 });
  const [animationsEnabled, setAnimationsEnabled] = useState(true);

  useEffect(() => {
    const savedPreference = window.localStorage.getItem('animations-enabled');
    if (savedPreference !== null) {
      setAnimationsEnabled(savedPreference === 'true');
    }
  }, []);

  useEffect(() => {
    window.localStorage.setItem('animations-enabled', String(animationsEnabled));
    document.body.classList.toggle('animations-disabled', !animationsEnabled);
  }, [animationsEnabled]);

  useEffect(() => {
    if (!animationsEnabled) {
      return undefined;
    }

    const handleMouseMove = (e) => {
      setCursorPos({ x: e.clientX, y: e.clientY });
    };

    window.addEventListener('mousemove', handleMouseMove);
    return () => window.removeEventListener('mousemove', handleMouseMove);
  }, [animationsEnabled]);

  const toggleAnimations = () => {
    setAnimationsEnabled((value) => !value);
  };

  return (
    <AnimationContext.Provider value={{ animationsEnabled, toggleAnimations }}>
      <div className="min-h-screen flex flex-col relative z-10 w-full overflow-x-hidden">
        {/* Custom Cursor Elements */}
        {animationsEnabled && (
          <>
            <div
              className="cursor-dot hidden md:block"
              style={{ left: cursorPos.x, top: cursorPos.y }}
            ></div>
            <div
              className="cursor-outline hidden md:block transition-all duration-100 ease-out"
              style={{ left: cursorPos.x, top: cursorPos.y }}
            ></div>
          </>
        )}

        {/* Noise background overlay */}
        {animationsEnabled && <div className="noise-overlay pointer-events-none"></div>}

        {/* 3D Background */}
        <ThreeBackground />

        {/* Header */}
        <Navbar />

        {/* Main Content */}
        <main className="flex-grow flex flex-col relative">
          {children}
        </main>

        {/* Footer */}
        <Footer />
      </div>
    </AnimationContext.Provider>
  );
}
