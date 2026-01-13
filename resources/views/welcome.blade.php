<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rifqi Ramadhan | Fullstack Journey</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@3.0.3/tsparticles.bundle.min.js"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        [x-cloak] { display: none !important; }
        .glass { background: rgba(255, 255, 255, 0.02); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.05); }
        .text-gradient { background: linear-gradient(to right, #60a5fa, #a855f7); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        /* Animasi Background Gradient */
        .gradient-bg {
            background: radial-gradient(circle at 50% 50%, #1e1b4b 0%, #020617 100%);
            position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: -2;
        }
    </style>
</head>
<body x-data="{ scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 50)" class="bg-[#020617] text-slate-200 antialiased overflow-x-hidden">

    <div id="tsparticles" class="fixed inset-0 -z-10"></div>
    <div class="gradient-bg"></div>

    <nav class="fixed top-0 w-full z-[100] transition-all duration-500"
         :class="scrolled ? 'bg-black/50 backdrop-blur-xl py-4 border-b border-white/10' : 'py-8'">
        <div class="max-w-6xl mx-auto px-6 flex justify-between items-center">
            <div class="text-xl font-extrabold tracking-tighter">
                RIFQI<span class="text-blue-500">.DEV</span>
            </div>
            <div class="hidden md:flex items-center space-x-10 text-xs font-bold uppercase tracking-widest">
                <a href="#home" class="hover:text-blue-400 transition">Home</a>
                <a href="#projects" class="hover:text-blue-400 transition">Projects</a>
                <a href="#skills" class="hover:text-blue-400 transition">Skills</a>
                <a href="mailto:rifqi.ramadhan@example.com" class="px-5 py-2 border border-blue-500/50 rounded-full hover:bg-blue-500/10 transition text-blue-400">Contact</a>
            </div>
        </div>
    </nav>

    <section id="home" class="relative min-h-screen flex items-center justify-center px-6">
        <div class="text-center space-y-8 z-10">
            <div class="inline-flex items-center space-x-2 bg-white/5 border border-white/10 px-4 py-2 rounded-full text-xs font-bold tracking-widest text-blue-400 uppercase animate-pulse">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                </span>
                <span>Beginner Web Developer</span>
            </div>
            
            <h1 class="text-5xl md:text-8xl font-black tracking-tighter leading-none">
                BUILDING <br> <span id="typewriter" class="text-gradient"></span>
            </h1>

            <p class="max-w-xl mx-auto text-slate-400 text-lg md:text-xl font-medium leading-relaxed">
                Halo, saya <span class="text-white font-bold">Rifqi Ramadhan</span>. Sedang mendalami ekosistem 
                <span class="border-b-2 border-blue-500 text-white">Laravel</span> & 
                <span class="border-b-2 border-purple-500 text-white">Next.js</span> untuk membangun masa depan digital.
            </p>

            <div class="flex flex-col md:flex-row justify-center gap-6 pt-6">
                <a href="#projects" class="px-10 py-4 bg-white text-black font-black rounded-full hover:scale-105 transition-transform duration-300 shadow-lg shadow-blue-500/10">EXPLORE PROJECTS</a>
                <div class="flex items-center gap-4 text-sm font-bold tracking-widest text-slate-500">
                    <span>SCROLL DOWN</span>
                    <div class="w-10 h-[1px] bg-slate-800"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="py-20 px-6 relative">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-center text-4xl font-bold mb-12">My <span class="text-blue-500">Learning</span> Journey.</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="glass p-8 rounded-3xl text-center group hover:border-blue-500/50 transition-all duration-500 transform hover:-translate-y-2">
                    <div class="text-4xl mb-4 group-hover:scale-110 transition">🐘</div>
                    <h4 class="font-bold text-white mb-1">Laravel</h4>
                    <div class="h-1.5 w-full bg-white/5 rounded-full overflow-hidden mb-1">
                        <div class="h-full bg-blue-500 w-[40%]"></div>
                    </div>
                    <p class="text-[10px] text-slate-500 uppercase font-bold tracking-tighter">Learning Phase (40%)</p>
                </div>
                <div class="glass p-8 rounded-3xl text-center group hover:border-purple-500/50 transition-all duration-500 transform hover:-translate-y-2">
                    <div class="text-4xl mb-4 group-hover:scale-110 transition">⚛️</div>
                    <h4 class="font-bold text-white mb-1">Next.js</h4>
                    <div class="h-1.5 w-full bg-white/5 rounded-full overflow-hidden mb-1">
                        <div class="h-full bg-purple-500 w-[30%]"></div>
                    </div>
                    <p class="text-[10px] text-slate-500 uppercase font-bold tracking-tighter">Learning Phase (30%)</p>
                </div>
                <div class="glass p-8 rounded-3xl text-center group hover:border-cyan-400/50 transition-all duration-500 transform hover:-translate-y-2">
                    <div class="text-4xl mb-4 group-hover:scale-110 transition">🎨</div>
                    <h4 class="font-bold text-white mb-1">Tailwind CSS</h4>
                    <div class="h-1.5 w-full bg-white/5 rounded-full overflow-hidden mb-1">
                        <div class="h-full bg-cyan-400 w-[60%]"></div>
                    </div>
                    <p class="text-[10px] text-slate-500 uppercase font-bold tracking-tighter">Intermediate (60%)</p>
                </div>
                <div class="glass p-8 rounded-3xl text-center group hover:border-orange-500/50 transition-all duration-500 transform hover:-translate-y-2">
                    <div class="text-4xl mb-4 group-hover:scale-110 transition">🗄️</div>
                    <h4 class="font-bold text-white mb-1">MySQL</h4>
                    <div class="h-1.5 w-full bg-white/5 rounded-full overflow-hidden mb-1">
                        <div class="h-full bg-orange-500 w-[50%]"></div>
                    </div>
                    <p class="text-[10px] text-slate-500 uppercase font-bold tracking-tighter">Fundamental (50%)</p>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="py-32 px-6">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div class="space-y-4">
                    <h2 class="text-blue-500 font-bold uppercase tracking-[0.3em] text-xs">Featured Work</h2>
                    <h3 class="text-4xl md:text-6xl font-black italic">LATEST PROJECTS.</h3>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <div class="group cursor-pointer">
                    <a href="https://portofolio-next-two.vercel.app/" target="_blank" class="block rounded-[2.5rem] overflow-hidden glass p-4 transition-all duration-500 hover:border-blue-500/50 hover:-translate-y-2">
                        <div class="relative overflow-hidden rounded-[2rem] bg-slate-900 aspect-video mb-6">
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-600/20 via-transparent to-purple-600/20 group-hover:scale-110 transition-transform duration-700"></div>
                            
                            {{-- Gambar Project --}}
                            <img src="{{ asset('images/next-project.png') }}" alt="Next.js Portfolio Screenshot" class="absolute inset-0 w-full h-full object-cover opacity-70 group-hover:opacity-100 transition-opacity duration-500">

                            <div class="absolute inset-0 flex items-center justify-center bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10">
                                <div class="text-center">
                                    <span class="px-6 py-2 bg-white text-black font-black rounded-full text-sm tracking-widest uppercase shadow-lg hover:bg-blue-500 hover:text-white transition">Visit Site</span>
                                    <p class="text-white text-[10px] mt-4 tracking-tighter uppercase font-bold text-blue-400">Next.js + Vercel</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="px-4 pb-4">
                            <div class="flex justify-between items-start mb-2">
                                <h4 class="text-2xl font-bold group-hover:text-blue-400 transition">Next.js Personal Portfolio</h4>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-500 group-hover:text-blue-500 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </div>
                            <p class="text-slate-400 text-sm mb-6 leading-relaxed">Project portfolio berbasis Next.js yang dideploy ke Vercel. Fokus pada performa dan SEO tinggi.</p>
                            <div class="flex gap-2">
                                <span class="px-3 py-1 bg-blue-500/10 border border-blue-500/20 rounded-full text-[10px] uppercase font-bold text-blue-400 italic">Next.js</span>
                                <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-[10px] uppercase font-bold text-slate-400 italic">Vercel</span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="group cursor-pointer md:mt-20">
                    <div class="block rounded-[2.5rem] overflow-hidden glass p-4 transition-all duration-500 hover:border-purple-500/50 hover:-translate-y-2">
                        <div class="relative overflow-hidden rounded-[2rem] bg-slate-900 aspect-video mb-6">
                            <div class="absolute inset-0 bg-gradient-to-br from-purple-600/10 via-transparent to-blue-600/10"></div>
                            <div class="absolute inset-0 flex items-center justify-center italic text-slate-700 font-black text-2xl uppercase tracking-tighter">
                                Next Big Project
                            </div>
                        </div>
                        <div class="px-4 pb-4">
                            <h4 class="text-2xl font-bold mb-2">Laravel Ecosystem Project</h4>
                            <p class="text-slate-400 text-sm mb-6 leading-relaxed">Sedang membangun sistem dashboard admin yang powerful menggunakan Laravel 11.</p>
                            <div class="flex gap-2">
                                <span class="px-3 py-1 bg-purple-500/10 border border-purple-500/20 rounded-full text-[10px] uppercase font-bold text-purple-400 italic">Laravel 11</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-20 border-t border-white/5 text-center">
        <div class="max-w-6xl mx-auto px-6">
            <p class="text-slate-500 text-xs font-bold tracking-[0.5em] uppercase mb-4">Crafted by Rifqi Ramadhan &copy; 2026</p>
            <div class="flex justify-center space-x-8 text-slate-400">
                <a href="https://github.com/rifqi" target="_blank" class="hover:text-blue-500 transition">GitHub</a>
                <a href="https://linkedin.com/in/rifqi" target="_blank" class="hover:text-blue-500 transition">LinkedIn</a>
                <a href="https://instagram.com/rifqi" target="_blank" class="hover:text-blue-500 transition">Instagram</a>
            </div>
        </div>
    </footer>

    <script>
        // TYPEWRITER EFFECT
        const app = document.getElementById('typewriter');
        if (app) { // Pastikan elemen ada
            const typewriter = new Typewriter(app, { loop: true, delay: 75, cursor: '<span style="color: #60a5fa;">|</span>' });
            typewriter
                .typeString('FULLSTACK WEBSITES.')
                .pauseFor(2000)
                .deleteAll()
                .typeString('SCALABLE APPLICATIONS.')
                .pauseFor(2000)
                .deleteAll()
                .typeString('MODERN EXPERIENCES.')
                .pauseFor(2000)
                .start();
        }

        // PARTICLES CONFIG
        tsParticles.load({
            id: "tsparticles",
            options: {
                background: { color: { value: "transparent" } },
                fpsLimit: 60,
                interactivity: {
                    events: {
                        onHover: { enable: true, mode: "grab" },
                        resize: true,
                    },
                    modes: {
                        grab: { distance: 200, links: { opacity: 0.2 } },
                    },
                },
                particles: {
                    color: { value: "#60a5fa" }, // Warna partikel sesuai gradasi
                    links: { color: "#60a5fa", distance: 150, enable: true, opacity: 0.1, width: 1 },
                    move: { enable: true, speed: 0.8 },
                    number: { density: { enable: true, area: 800 }, value: 70 },
                    opacity: { value: 0.2 },
                    shape: { type: "circle" },
                    size: { value: { min: 1, max: 2 } },
                },
                detectRetina: true,
            },
        });
    </script>
</body>
</html>