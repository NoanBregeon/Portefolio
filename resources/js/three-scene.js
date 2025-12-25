
import * as THREE from 'three';
import { GLTFLoader } from 'three/examples/jsm/loaders/GLTFLoader';

document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('canvas-container');
    if (!container) return;

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
       MODÈLE 3D
    ====================== */
    const loader = new GLTFLoader();
    let model = null;

    loader.load(
        '/models/vaisseau.glb',
        (gltf) => {
            model = gltf.scene;
            model.scale.set(0.18, 0.18, 0.18);
            model.position.set(0, -12, 0);
            scene.add(model);
        },
        undefined,
        (error) => {
            console.error('Erreur chargement GLB:', error);
        }
    );

    /* =====================
       ANIMATION
    ====================== */
    const clock = new THREE.Clock();

    function animate() {
        const elapsedTime = clock.getElapsedTime();

        // Rotation douce du vaisseau
        if (model) {
            model.rotation.y += 0.0015;
        }

        // Mouvement lent des étoiles
        starField.rotation.y = elapsedTime * 0.015;
        starField.rotation.x = Math.sin(elapsedTime * 0.1) * 0.05;

        renderer.render(scene, camera);
        requestAnimationFrame(animate);
    }

    animate();

    /* =====================
       RESIZE
    ====================== */
    window.addEventListener('resize', () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });
});
        // On ajoute une rotation supplémentaire basée sur la souris
