import { motion } from 'framer-motion';
import { useAnimationSettings } from '../context/AnimationContext';

export default function AnimatedSection({ children, className = '', delay = 0 }) {
  const { animationsEnabled } = useAnimationSettings();

  if (!animationsEnabled) {
    return <div className={className}>{children}</div>;
  }

  return (
    <motion.div
      initial={{ opacity: 0, y: 30 }}
      whileInView={{ opacity: 1, y: 0 }}
      viewport={{ once: true, margin: '-100px' }}
      transition={{ duration: 0.8, ease: [0.25, 1, 0.5, 1], delay }}
      className={className}
    >
      {children}
    </motion.div>
  );
}
