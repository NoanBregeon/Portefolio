import * as THREE from 'three';

document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('canvas-container');
    if (!container) return;

    const scene = new THREE.Scene();
    // Ajout de brouillard pour la profondeur (couleur du fond Tailwind gray-900)
    scene.fog = new THREE.FogExp2(0x111827, 0.002);

    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });

    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(window.devicePixelRatio);
    container.appendChild(renderer.domElement);

    // --- Formes Abstraites ---
    const geometryGroup = new THREE.Group();
    scene.add(geometryGroup);

    // 1. Icosaèdre Principal (Fil de fer)
    const geometry = new THREE.IcosahedronGeometry(10, 1);
    const material = new THREE.MeshBasicMaterial({
        color: 0x6366f1, // Indigo-500
        wireframe: true,
        transparent: true,
        opacity: 0.3
    });
    const sphere = new THREE.Mesh(geometry, material);
    geometryGroup.add(sphere);

    // 2. Cœur Solide
    const coreGeometry = new THREE.IcosahedronGeometry(4, 0);
    const coreMaterial = new THREE.MeshStandardMaterial({
        color: 0x818cf8,
        roughness: 0.1,
        metalness: 0.8,
        emissive: 0x3730a3,
        emissiveIntensity: 0.5
    });
    const core = new THREE.Mesh(coreGeometry, coreMaterial);
    geometryGroup.add(core);

    // 3. Anneau Torus Flottant
    const torusGeometry = new THREE.TorusGeometry(14, 0.5, 16, 100);
    const torusMaterial = new THREE.MeshBasicMaterial({
        color: 0x00ffff,
        wireframe: true,
        transparent: true,
        opacity: 0.1
    });
    const torus = new THREE.Mesh(torusGeometry, torusMaterial);
    geometryGroup.add(torus);

    // --- Particules (Champ d'étoiles) ---
    const particlesGeometry = new THREE.BufferGeometry();
    const particlesCount = 2000;
    const posArray = new Float32Array(particlesCount * 3);

    for(let i = 0; i < particlesCount * 3; i++) {
        // Dispersion large
        posArray[i] = (Math.random() - 0.5) * 100;
    }

    particlesGeometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));
    const particlesMaterial = new THREE.PointsMaterial({
        size: 0.05,
        color: 0x818cf8,
        transparent: true,
        opacity: 0.5,
        blending: THREE.AdditiveBlending
    });
    const starField = new THREE.Points(particlesGeometry, particlesMaterial);
    scene.add(starField);

    // --- Lumières ---
    const ambientLight = new THREE.AmbientLight(0xffffff, 0.5);
    scene.add(ambientLight);

    const pointLight = new THREE.PointLight(0x6366f1, 2);
    pointLight.position.set(20, 20, 20);
    scene.add(pointLight);

    const pointLight2 = new THREE.PointLight(0x00ffff, 2);
    pointLight2.position.set(-20, -20, 20);
    scene.add(pointLight2);

    camera.position.z = 30;

    // --- Boucle d'animation ---
    const clock = new THREE.Clock();

    // Souris
    let mouseX = 0;
    let mouseY = 0;

    window.addEventListener('mousemove', (event) => {
        mouseX = (event.clientX / window.innerWidth) - 0.5;
        mouseY = (event.clientY / window.innerHeight) - 0.5;
    });

    const tick = () => {
        const elapsedTime = clock.getElapsedTime();

        // Rotation automatique du groupe principal
        geometryGroup.rotation.y = elapsedTime * 0.1;
        geometryGroup.rotation.x = elapsedTime * 0.05;

        // Effet Parallax Souris (Lissage)
        // On ajoute une rotation supplémentaire basée sur la souris
        const targetRotationX = mouseY * 0.5;
        const targetRotationY = mouseX * 0.5;

        // Lerp pour la fluidité
        geometryGroup.rotation.x += 0.05 * (targetRotationX - geometryGroup.rotation.x);
        geometryGroup.rotation.y += 0.05 * (targetRotationY - geometryGroup.rotation.y);

        // Rotation des parties individuelles pour plus de complexité
        sphere.rotation.y = elapsedTime * 0.1;
        core.rotation.y = -elapsedTime * 0.2;
        core.rotation.z = elapsedTime * 0.1;
        torus.rotation.x = elapsedTime * 0.1;
        torus.rotation.y = elapsedTime * 0.05;

        // Mouvement lent des particules
        starField.rotation.y = elapsedTime * 0.02;
        starField.rotation.x = mouseY * 0.1; // Parallax particules

        // Effet de flottement vertical
        geometryGroup.position.y = Math.sin(elapsedTime * 0.5) * 1;

        renderer.render(scene, camera);
        window.requestAnimationFrame(tick);
    };

    tick();

    // --- Redimensionnement ---
    window.addEventListener('resize', () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });
});
