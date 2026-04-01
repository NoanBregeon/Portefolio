import React, { useRef } from 'react';
import { Canvas, useFrame } from '@react-three/fiber';
import { Stars } from '@react-three/drei';

function MovingStars() {
  const starsRef = useRef();

  useFrame(() => {
    if (starsRef.current) {
      starsRef.current.rotation.y -= 0.0002;
      starsRef.current.rotation.x -= 0.0001;
    }
  });

  return (
    <group ref={starsRef}>
      <Stars 
        radius={100} 
        depth={50} 
        count={3500} 
        factor={5} 
        saturation={1} 
        fade 
        speed={1} 
      />
    </group>
  );
}

export default function ThreeBackground() {
  return (
    <div className="fixed inset-0 z-[-10] w-full h-full pointer-events-none overflow-hidden">
      {/* Fallback gradient */}
      <div className="absolute inset-0 bg-gradient-to-br from-gray-950 via-gray-900 to-black z-[-1]"></div>
      
      <Canvas camera={{ position: [0, 0, 1] }}>
        <MovingStars />
        {/* Subtle ambient lighting to blend the scene with other elements if we add more */}
        <ambientLight intensity={0.5} />
      </Canvas>
    </div>
  );
}
