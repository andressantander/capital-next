<div class="relative w-full overflow-hidden" style="min-height: 100vh; background: linear-gradient(160deg, #0b1115 0%, #0f1b22 45%, #0a1513 100%);">

    <!-- Subtle grid pattern for depth -->
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: linear-gradient(rgba(255,255,255,.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.1) 1px, transparent 1px); background-size: 60px 60px;"></div>
    
    <!-- Ambient glow effects for depth -->
    <div class="absolute top-0 right-1/4 w-[600px] h-[600px] bg-green-500/10 rounded-full blur-[180px] pointer-events-none"></div>
    <div class="absolute bottom-1/4 left-0 w-[400px] h-[400px] bg-emerald-400/10 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute top-1/2 right-0 w-[300px] h-[300px] bg-lime-400/10 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10 min-h-screen flex items-center">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center w-full py-20 lg:py-0">
        
            <!-- Text Content (Left) - Clear hierarchy -->
            <div class="text-left space-y-6 lg:space-y-8">
                
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 bg-green-500/10 border border-green-400/30 rounded-full px-4 py-2">
                    <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                    <span class="text-green-300 text-sm font-medium">Inversión Inteligente</span>
                </div>
                
                <!-- Main Headline -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-white leading-[1.1] tracking-tight">
                    Tu dinero<br>
                    trabajando<br>
                    <span class="bg-gradient-to-r from-green-300 via-emerald-400 to-lime-400 bg-clip-text text-transparent">con estrategia</span>
                </h1>
                
                <!-- Subtitle -->
                <p class="text-lg lg:text-xl text-slate-300 font-light max-w-md leading-relaxed">
                    Metodología probada. Resultados medibles. Crece tu patrimonio sin el ruido del mercado.
                </p>
                
                <!-- CTAs - Clear and prominent -->
                <div class="flex flex-wrap gap-4 pt-2">
                    <a href="#" class="group px-8 py-4 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-full transition-all duration-300 shadow-lg shadow-green-500/25 hover:shadow-green-400/40 hover:-translate-y-0.5 flex items-center gap-2">
                        Comenzar ahora
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="#" class="px-8 py-4 bg-white/5 hover:bg-white/10 border border-white/10 hover:border-green-300/40 text-white font-medium rounded-full transition-all duration-300 flex items-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                        Ver demo
                    </a>
                </div>

                <!-- Trust Indicators -->
                <div class="flex flex-wrap items-center gap-6 pt-4">
                    <!-- Rating -->
                    <div class="flex items-center gap-2">
                        <div class="flex -space-x-1">
                            <div class="w-8 h-8 bg-green-500 rounded-lg flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                        </div>
                        <div>
                            <p class="text-white font-semibold text-sm">4.9/5</p>
                            <p class="text-slate-400 text-xs">+2,500 inversores</p>
                        </div>
                    </div>
                    
                    <div class="w-px h-8 bg-slate-700"></div>
                    
                    <!-- Stats -->
                    <div class="flex items-center gap-4">
                        <div>
                            <p class="text-green-400 font-bold text-lg">$45M+</p>
                            <p class="text-slate-400 text-xs">Gestionados</p>
                        </div>
                        <div>
                            <p class="text-green-400 font-bold text-lg">18.5%</p>
                            <p class="text-slate-400 text-xs">Rendimiento anual</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Showcase (Right) - Phone as protagonist -->
            <div class="relative h-[500px] lg:h-[650px] flex items-center justify-center">
                
                <!-- Floating 3D Elements - Creating depth layers -->
                
                <!-- Layer 1 - Far back -->
                <div class="absolute top-8 right-8 lg:right-0 animate-float-slow z-0">
                    <div class="w-20 h-20 relative opacity-60">
                        <div class="absolute inset-0 bg-gradient-to-br from-slate-500 to-slate-800 rounded-3xl transform rotate-12"></div>
                        <div class="absolute inset-2 bg-gradient-to-br from-slate-600 to-slate-900 rounded-2xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <!-- Layer 2 - Mid-far -->
                <div class="absolute top-24 left-0 lg:-left-8 animate-float-medium z-0">
                    <div class="w-14 h-14 bg-gradient-to-br from-green-400 to-emerald-500 rounded-2xl shadow-xl shadow-green-500/30 flex items-center justify-center transform -rotate-6">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                </div>
                
                <!-- Layer 3 - Mid -->
                <div class="absolute bottom-1/4 left-4 lg:-left-4 animate-float-slow z-0">
                    <div class="w-16 h-16 bg-gradient-to-br from-lime-400 to-green-500 rounded-full shadow-xl shadow-green-500/30 flex items-center justify-center">
                        <span class="text-white text-2xl font-bold">$</span>
                    </div>
                </div>
                
                <!-- Layer 4 - Near -->
                <div class="absolute top-1/3 right-0 lg:right-4 animate-float-fast z-30">
                    <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-3 shadow-2xl border border-white/20">
                        <div class="flex items-center gap-2">
                            <div class="w-10 h-10 bg-green-500 rounded-xl flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-white text-sm font-bold">+12.4%</p>
                                <p class="text-slate-400 text-[10px]">Este mes</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Layer 5 - Near bottom -->
                <div class="absolute bottom-20 right-8 lg:right-16 animate-float-medium z-30">
                    <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-3 shadow-2xl border border-white/20">
                        <div class="flex items-center gap-2 mb-1">
                            <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
                            <span class="text-slate-400 text-[10px]">En vivo</span>
                        </div>
                        <p class="text-white font-bold">$145,230</p>
                        <p class="text-green-400 text-xs">Capital activo</p>
                    </div>
                </div>
                
                <!-- Small decorative elements -->
                <div class="absolute top-16 left-1/3 w-3 h-3 bg-green-400 rounded-full animate-float-fast opacity-60"></div>
                <div class="absolute bottom-1/3 right-1/4 w-2 h-2 bg-lime-400 rounded-full animate-float-slow opacity-80"></div>
                <div class="absolute top-1/2 left-1/4 w-4 h-4 bg-white/20 rounded-lg transform rotate-45 animate-float-medium"></div>
                
                <!-- Main Phone Mockup - The Protagonist -->
                <div class="relative z-20 transform hover:scale-[1.02] transition-transform duration-500">
                    <!-- Glow effect behind phone -->
                    <div class="absolute -inset-8 bg-gradient-to-t from-green-500/20 via-emerald-500/5 to-transparent rounded-[4rem] blur-2xl"></div>
                    
                    <!-- Phone Frame - Premium silver finish -->
                    <div class="relative w-[270px] lg:w-[300px] h-[540px] lg:h-[600px] bg-gradient-to-b from-gray-200 via-gray-100 to-gray-300 rounded-[2.8rem] p-1.5 shadow-2xl shadow-black/50">
                        <!-- Metallic edge highlights -->
                        <div class="absolute inset-0 rounded-[2.8rem] bg-gradient-to-tr from-white/40 via-transparent to-transparent pointer-events-none"></div>
                        <div class="absolute inset-0 rounded-[2.8rem] bg-gradient-to-bl from-black/10 via-transparent to-transparent pointer-events-none"></div>
                        
                        <!-- Screen bezel -->
                        <div class="w-full h-full bg-black rounded-[2.4rem] overflow-hidden p-0.5">
                            <!-- Dynamic Island -->
                            <div class="absolute top-3 left-1/2 -translate-x-1/2 w-24 h-6 bg-black rounded-full z-30"></div>
                            
                            <!-- Screen - Light premium interface -->
                            <div class="w-full h-full bg-gradient-to-b from-slate-50 to-white rounded-[2.2rem] pt-10 overflow-hidden">
                                
                                <!-- App Header -->
                                <div class="px-4 pb-3 flex justify-between items-center">
                                    <div class="flex items-center gap-2">
                                        <div class="w-8 h-8 bg-gradient-to-br from-green-500 to-emerald-600 rounded-lg flex items-center justify-center shadow-sm">
                                            <span class="text-white text-[10px] font-bold">CN</span>
                                        </div>
                                        <div>
                                            <p class="text-gray-900 font-semibold text-sm">Capital Next</p>
                                            <p class="text-slate-400 text-[9px]">Portfolio Premium</p>
                                        </div>
                                    </div>
                                    <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                                        </svg>
                                    </div>
                                </div>
                                
                                <!-- Portfolio Value Card -->
                                <div class="mx-3 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 rounded-2xl p-4 mb-3 shadow-lg">
                                    <p class="text-slate-400 text-[10px] mb-1">Valor del portafolio</p>
                                    <div class="flex items-end justify-between">
                                        <div>
                                            <p class="text-white text-2xl font-bold">$145,230</p>
                                            <div class="flex items-center gap-1 mt-1">
                                                <div class="bg-green-500/20 rounded px-1.5 py-0.5">
                                                    <span class="text-green-400 text-[10px] font-medium">+$15,420 (12.4%)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-slate-500 text-[9px]">30 días</p>
                                        </div>
                                    </div>
                                    
                                    <!-- Mini Chart -->
                                    <div class="mt-3 h-16">
                                        <svg class="w-full h-full" viewBox="0 0 200 60" preserveAspectRatio="none">
                                            <defs>
                                                <linearGradient id="portfolioGrad" x1="0%" y1="0%" x2="0%" y2="100%">
                                                    <stop offset="0%" style="stop-color:#10b981;stop-opacity:0.3"/>
                                                    <stop offset="100%" style="stop-color:#10b981;stop-opacity:0"/>
                                                </linearGradient>
                                            </defs>
                                            <path d="M0,50 Q20,45 40,40 T80,35 T120,25 T160,20 T200,10 L200,60 L0,60 Z" fill="url(#portfolioGrad)"/>
                                            <path d="M0,50 Q20,45 40,40 T80,35 T120,25 T160,20 T200,10" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round"/>
                                            <circle cx="200" cy="10" r="3" fill="#10b981"/>
                                        </svg>
                                    </div>
                                </div>
                                
                                <!-- Quick Actions -->
                                <div class="px-3 mb-3">
                                    <div class="grid grid-cols-3 gap-2">
                                        <button class="bg-green-500 rounded-xl py-2.5 text-white text-[10px] font-semibold shadow-sm">
                                            Invertir
                                        </button>
                                        <button class="bg-gray-100 rounded-xl py-2.5 text-gray-700 text-[10px] font-medium">
                                            Retirar
                                        </button>
                                        <button class="bg-gray-100 rounded-xl py-2.5 text-gray-700 text-[10px] font-medium">
                                            Historial
                                        </button>
                                    </div>
                                </div>
                                
                                <!-- Active Strategies -->
                                <div class="px-3 mb-3">
                                    <p class="text-gray-500 text-[10px] font-medium mb-2">Estrategias activas</p>
                                    <div class="space-y-2">
                                        <div class="bg-white rounded-xl p-2.5 shadow-sm border border-gray-100 flex items-center justify-between">
                                            <div class="flex items-center gap-2">
                                                <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <p class="text-gray-800 text-xs font-medium">Crecimiento Agresivo</p>
                                                    <p class="text-gray-400 text-[9px]">$65,000 · 45%</p>
                                                </div>
                                            </div>
                                            <span class="text-green-500 text-xs font-semibold">+18.2%</span>
                                        </div>
                                        <div class="bg-white rounded-xl p-2.5 shadow-sm border border-gray-100 flex items-center justify-between">
                                            <div class="flex items-center gap-2">
                                                <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center">
                                                    <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <p class="text-gray-800 text-xs font-medium">Conservador Plus</p>
                                                    <p class="text-gray-400 text-[9px]">$80,230 · 55%</p>
                                                </div>
                                            </div>
                                            <span class="text-green-500 text-xs font-semibold">+8.1%</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Bottom Navigation -->
                                <div class="absolute bottom-1.5 left-1.5 right-1.5 bg-white rounded-2xl shadow-lg border border-gray-100 p-2">
                                    <div class="flex justify-around items-center">
                                        <div class="flex flex-col items-center">
                                            <div class="w-9 h-9 bg-green-500 rounded-xl flex items-center justify-center mb-0.5">
                                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                                </svg>
                                            </div>
                                            <span class="text-green-500 text-[8px] font-medium">Inicio</span>
                                        </div>
                                        <div class="flex flex-col items-center opacity-50">
                                            <div class="w-9 h-9 bg-gray-100 rounded-xl flex items-center justify-center mb-0.5">
                                                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                                </svg>
                                            </div>
                                            <span class="text-gray-400 text-[8px]">Análisis</span>
                                        </div>
                                        <div class="flex flex-col items-center opacity-50">
                                            <div class="w-9 h-9 bg-gray-100 rounded-xl flex items-center justify-center mb-0.5">
                                                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                </svg>
                                            </div>
                                            <span class="text-gray-400 text-[8px]">Fondos</span>
                                        </div>
                                        <div class="flex flex-col items-center opacity-50">
                                            <div class="w-9 h-9 bg-gray-100 rounded-xl flex items-center justify-center mb-0.5">
                                                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                                </svg>
                                            </div>
                                            <span class="text-gray-400 text-[8px]">Perfil</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Phone Side Buttons -->
                        <div class="absolute -right-0.5 top-28 w-1 h-12 bg-gray-400 rounded-r-sm"></div>
                        <div class="absolute -right-0.5 top-44 w-1 h-12 bg-gray-400 rounded-r-sm"></div>
                        <div class="absolute -left-0.5 top-32 w-1 h-16 bg-gray-400 rounded-l-sm"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <style>
        @keyframes float-slow {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        @keyframes float-medium {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-15px) rotate(3deg); }
        }
        @keyframes float-fast {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        .animate-float-slow {
            animation: float-slow 7s ease-in-out infinite;
        }
        .animate-float-medium {
            animation: float-medium 5s ease-in-out infinite;
        }
        .animate-float-fast {
            animation: float-fast 3.5s ease-in-out infinite;
        }
    </style>
</div>
