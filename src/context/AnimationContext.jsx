import { createContext, useContext } from 'react';

const AnimationContext = createContext({
  animationsEnabled: true,
  toggleAnimations: () => {},
});

export function useAnimationSettings() {
  return useContext(AnimationContext);
}

export default AnimationContext;
