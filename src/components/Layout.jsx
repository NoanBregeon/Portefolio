import { useEffect, useState } from 'react';
import Navbar from './Navbar';
import Footer from './Footer';
import ThreeBackground from './ThreeBackground';

export default function Layout({ children }) {
  const [cursorPos, setCursorPos] = useState({ x: -100, y: -100 });

  useEffect(() => {
    const handleMouseMove = (e) => {
      setCursorPos({ x: e.clientX, y: e.clientY });
    };

    window.addEventListener('mousemove', handleMouseMove);
    return () => window.removeEventListener('mousemove', handleMouseMove);
  }, []);

  return (
    <div className="min-h-screen flex flex-col relative z-10 w-full overflow-x-hidden">
      {/* Custom Cursor Elements */}
      <div 
        className="cursor-dot hidden md:block" 
        style={{ left: cursorPos.x, top: cursorPos.y }}
      ></div>
      <div 
        className="cursor-outline hidden md:block transition-all duration-100 ease-out" 
        style={{ left: cursorPos.x, top: cursorPos.y }}
      ></div>
      
      {/* Noise background overlay */}
      <div className="noise-overlay pointer-events-none"></div>

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
  );
}
