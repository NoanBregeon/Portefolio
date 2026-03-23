
import * as THREE from 'three';

document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('canvas-container');
    if (!container) return;

    const reducedMotionQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
    const getStoredAccessibilityMode = () => {
        const value = localStorage.getItem('accessibilityMode');

        if (value === 'true') {
            return true;
        }

        if (value === 'false') {
            return false;
        }

        return null;
    };

    const shouldReduceMotion = () => {
        const storedPreference = getStoredAccessibilityMode();

        if (storedPreference !== null) {
            return storedPreference;
        }

        return reducedMotionQuery.matches;
    };

    /* =====================
       SCENE / CAMERA / RENDERER
    ====================== */
    const scene = new THREE.Scene();
    scene.fog = new THREE.FogExp2(0x111827, 0.002);

    const camera = new THREE.PerspectiveCamera(
        55,
        window.innerWidth / window.innerHeight,
        0.1,
        700
    );
    camera.position.z = 30;

    const renderer = new THREE.WebGLRenderer({
        alpha: true,
        antialias: true
    });

    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.outputColorSpace = THREE.SRGBColorSpace;
    renderer.toneMapping = THREE.ACESFilmicToneMapping;

    container.appendChild(renderer.domElement);

    /* =====================
       PARTICULES – CHAMP D'ÉTOILES
    ====================== */
    const particlesGeometry = new THREE.BufferGeometry();
    const particlesCount = 2500;
    const posArray = new Float32Array(particlesCount * 3);

    for (let i = 0; i < particlesCount * 3; i++) {
        posArray[i] = (Math.random() - 0.5) * 120;
    }

    particlesGeometry.setAttribute(
        'position',
        new THREE.BufferAttribute(posArray, 3)
    );

    const particlesMaterial = new THREE.PointsMaterial({
        size: 0.06,
        color: 0x818cf8,
        transparent: true,
        opacity: 0.6,
        blending: THREE.AdditiveBlending
    });

    const starField = new THREE.Points(
        particlesGeometry,
        particlesMaterial
    );
    scene.add(starField);

    /* =====================
       LUMIÈRES
    ====================== */
    scene.add(new THREE.AmbientLight(0xffffff, 0.4));

    const keyLight = new THREE.DirectionalLight(0x6366f1, 1.2);
    keyLight.position.set(10, 10, 10);
    scene.add(keyLight);

    const fillLight = new THREE.DirectionalLight(0x00ffff, 0.6);
    fillLight.position.set(-10, -5, 10);
    scene.add(fillLight);

    /* =====================
       STRUCTURE 3D LÉGÈRE (ABSTRAITE)
    ====================== */
    const geometry = new THREE.IcosahedronGeometry(9, 1);
    const material = new THREE.MeshStandardMaterial({
        color: 0x6366f1,
        wireframe: true,
        transparent: true,
        opacity: 0.6
    });
    const model = new THREE.Mesh(geometry, material);
    model.position.set(0, -2, 0);
    scene.add(model);

    // Noyau interne
    const coreGeometry = new THREE.IcosahedronGeometry(4, 0);
    const coreMaterial = new THREE.MeshBasicMaterial({
        color: 0x818cf8,
        wireframe: true,
        transparent: true,
        opacity: 0.2
    });
    const core = new THREE.Mesh(coreGeometry, coreMaterial);
    model.add(core);

    /* =====================
       ANIMATION
    ====================== */
    const clock = new THREE.Clock();
    let animationFrameId = null;

    function renderScene() {
        renderer.render(scene, camera);
    }

    function animate() {
        const elapsedTime = clock.getElapsedTime();

        // Rotation douce de la structure abstraite
        if (model) {
            model.rotation.y += 0.002;
            model.rotation.x += 0.001;
        }

        // Mouvement lent des étoiles
        starField.rotation.y = elapsedTime * 0.015;
        starField.rotation.x = Math.sin(elapsedTime * 0.1) * 0.05;

        renderScene();
        animationFrameId = requestAnimationFrame(animate);
    }

    function stopAnimation() {
        if (animationFrameId !== null) {
            cancelAnimationFrame(animationFrameId);
            animationFrameId = null;
        }
    }

    function syncMotionPreference() {
        stopAnimation();

        if (shouldReduceMotion()) {
            clock.stop();
            renderScene();
            return;
        }

        clock.start();
        animate();
    }

    syncMotionPreference();

    /* =====================
       RESIZE
    ====================== */
    window.addEventListener('resize', () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
        renderScene();
    });

    reducedMotionQuery.addEventListener('change', syncMotionPreference);
    window.addEventListener('accessibility-mode-changed', syncMotionPreference);
});
        // On ajoute une rotation supplémentaire basée sur la souris
