<div class="relative w-full overflow-hidden bg-primary min-h-[100vh] flex items-center font-sans" style="background-color: #1A232A;">
    
    <!-- Ambient Background Effects -->
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-[#26914A]/10 rounded-full blur-[120px] pointer-events-none transform translate-x-1/3 -translate-y-1/4"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-[#26914A]/5 rounded-full blur-[100px] pointer-events-none transform -translate-x-1/3 translate-y-1/4"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10 py-12 lg:py-0">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            
            <!-- Left Column: Typography & CTAs -->
            <div class="text-center lg:text-left space-y-8 animate-fade-in-up order-2 lg:order-1 relative z-20">
                
                <!-- Headline -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-[0.95] tracking-tight uppercase drop-shadow-xl">
                    CLARIDAD PARA <br>
                    TUS DECISIONES <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#26914A] to-[#79F4A4]">FINANCIERAS</span>
                </h1>
                
                <!-- Subtitle -->
                <p class="text-xl sm:text-2xl text-gray-300 font-medium max-w-xl mx-auto lg:mx-0 leading-relaxed">
                    Entiende antes de decidir. Reduce errores y gana control.
                </p>
                
                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row gap-5 pt-4 justify-center lg:justify-start">
                    <a href="{{ route('register') }}" class="group px-10 py-4 bg-[#26914A] hover:bg-[#1e7e3e] text-white font-bold rounded-full transition-all duration-300 text-lg shadow-[0_10px_25px_rgba(38,145,74,0.3)] hover:shadow-[0_15px_35px_rgba(38,145,74,0.4)] transform hover:-translate-y-1 text-center">
                        <span class="flex items-center justify-center gap-2">
                            Abrir cuenta
                        </span>
                    </a>
                    <a href="{{ route('register') }}" class="px-10 py-4 bg-white/5 border border-white/20 hover:bg-white/10 hover:border-white text-white font-bold rounded-full transition-all duration-300 text-lg text-center backdrop-blur-sm">
                        Calcula tu Rentabilidad
                    </a>
                </div>

                <!-- Trust Indicators -->
                <div class="pt-8 flex flex-col sm:flex-row items-center gap-6 justify-center lg:justify-start opacity-90">
                    <div class="flex items-center gap-2">
                         <div class="flex gap-1 bg-[#26914A] px-2 py-1 rounded-sm">
                            @for($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            @endfor
                        </div>
                        <span class="text-white font-bold text-lg">Excellent</span>
                    </div>
                    <div class="flex items-center gap-2 text-gray-400 text-sm font-medium">
                        <svg class="w-5 h-5 text-[#26914A]" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zm0 9l2-1-7.97 3.96L12 11zm8 5L12 22l-8-6-2 1 10 7.5L22 17l-2-1z"/></svg>
                        <span>Trustpilot</span>
                    </div>
                </div>
            </div>

            <!-- Right Column: 3D CSS Interaction -->
            <div class="relative h-[600px] lg:h-[800px] flex items-center justify-center perspective-[2000px] order-1 lg:order-2">
                
                <!-- Floating Back Elements (Hidden on Mobile) -->
                <!-- Bubble 1: BTC (Bitcoin) -->
                <div class="hidden lg:flex absolute top-[15%] right-[5%] w-24 h-24 animate-float-slow z-0 items-center justify-center pointer-events-none">
                    <img src="{{ asset('img/hero/bitcoin.png') }}" alt="BTC" class="w-full h-full object-contain drop-shadow-xl">
                </div>
                
                <!-- Bubble 2: XRP (Ripple) -->
                <div class="hidden lg:flex absolute bottom-[20%] left-[5%] w-16 h-16 animate-float-medium z-0 items-center justify-center pointer-events-none">
                     <img src="{{ asset('img/hero/ripple.png') }}" alt="XRP" class="w-full h-full object-contain drop-shadow-xl">
                </div>

                <!-- Green Fluorescent Glow (Mobile Only) -->
                <div class="lg:hidden absolute inset-0 flex items-center justify-center pointer-events-none">
                    <div class="absolute w-[320px] h-[600px] rounded-[60px] bg-[#26914A]/20 blur-[40px] animate-pulse-slow"></div>
                    <div class="absolute w-[300px] h-[580px] rounded-[55px] bg-[#26914A]/30 blur-[25px]"></div>
                </div>

                <!-- 3D Phone Container -->
                <!-- 3D Phone Container -->
                <div class="relative w-[270px] h-[540px] lg:w-[320px] lg:h-[640px] mt-16 lg:mt-0 transform lg:rotate-y-[-15deg] lg:rotate-x-[5deg] transition-transform duration-500 z-10 preserve-3d group">
                    <!-- Shadow separate from transform container for better browser support -->
                    <div class="absolute inset-0 rounded-[50px] shadow-[0_0_50px_rgba(38,145,74,0.3)] pointer-events-none transform translate-z-[-50px]"></div>

                    <!-- Phone Frame -->
                    <!-- Phone Frame (Dark/Black) -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-gray-900 via-gray-800 to-black rounded-[50px] shadow-[25px_30px_60px_rgba(0,0,0,0.8),inset_0_0_5px_rgba(255,255,255,0.2)] border-[6px] border-gray-800 ring-1 ring-white/20 transform-style-3d">
                        <!-- Left Side Buttons (Dark) -->
                        <div class="absolute -left-[4px] top-32 w-[4px] h-8 bg-gray-700 rounded-l-md shadow-inner"></div>
                        <div class="absolute -left-[4px] top-44 w-[4px] h-14 bg-gray-700 rounded-l-md shadow-inner"></div>
                        
                         <!-- Right Side Button (Dark) -->
                        <div class="absolute -right-[4px] top-40 w-[4px] h-20 bg-gray-700 rounded-r-md shadow-inner"></div>

                        <!-- Screen Bezel -->
                        <div class="absolute inset-[8px] bg-black rounded-[42px] overflow-hidden z-30 transform translate-z-[1px] ring-1 ring-black/50">
                            <!-- Screen Content Area (Strict White #fefefe) -->
                            <div class="w-full h-full bg-[#fefefe] relative overflow-hidden flex flex-col transform translate-z-[2px]" style="-webkit-mask-image: -webkit-radial-gradient(white, black);">
                                
                                <!-- Status Bar -->
                                <div class="px-6 pt-4 flex justify-between items-center text-gray-800 text-[11px] font-bold z-20">
                                    <span>21:30</span>
                                    <div class="flex gap-1.5 opacity-80">
                                        <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                                        <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor"><path d="M15.67 4H14V2h-4v2H8.33C7.6 4 7 4.6 7 5.33V20.67C7 21.4 7.6 22 8.33 22h7.33c.74 0 1.34-.6 1.34-1.33V5.33C17 4.6 16.4 4 15.67 4z"/></svg>
                                    </div>
                                </div>

                                <!-- App Header -->
                                <div class="px-6 mt-4 mb-2 flex justify-between items-center">
                                    <div class="flex items-center gap-2">
                                        <div class="w-8 h-8 rounded-lg bg-[#26914A] flex items-center justify-center text-white font-bold shadow-lg">CN</div>
                                        <span class="text-gray-900 font-bold text-lg">Inicio</span>
                                    </div>
                                    <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-600">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
                                    </div>
                                </div>

                                <!-- Balance Card -->
                                <div class="mx-5 mb-3 lg:mb-6 p-3 lg:p-5 bg-gradient-to-br from-[#1F2937] to-[#111827] rounded-3xl shadow-xl text-white relative overflow-hidden hover:scale-[1.02] transition-transform duration-300 transform translate-z-[5px]">
                                    <div class="relative z-10">
                                        <p class="text-gray-400 text-[9px] lg:text-xs font-semibold tracking-wider mb-0.5 lg:mb-1">BALANCE TOTAL</p>
                                        <h3 class="text-xl lg:text-3xl font-black mb-0.5 lg:mb-1 tracking-tight">$45,231.89</h3>
                                        <div class="flex items-center gap-1 text-[#4ADE80] bg-white/10 w-fit px-1.5 lg:px-2 py-0.5 rounded-md backdrop-blur">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
                                            <span class="text-xs font-bold">+12.5%</span>
                                        </div>
                                    </div>
                                    <div class="absolute right-[-20px] bottom-[-20px] w-24 h-24 bg-[#26914A]/30 rounded-full blur-xl"></div>
                                </div>

                                <div class="mx-5 mb-4 p-4 bg-gradient-to-br from-[#1F2937] via-[#374151] to-[#1F2937] rounded-2xl shadow-2xl relative overflow-visible border-2 border-[#26914A] transform translate-z-[5px]">
                                     <!-- Glow Effect -->
                                     <div class="absolute top-0 right-0 w-24 h-24 bg-[#26914A]/40 rounded-full blur-2xl" style="opacity: 1 !important; visibility: visible !important;"></div>
                                     <div class="absolute bottom-0 left-0 w-20 h-20 bg-[#4ADE80]/20 rounded-full blur-xl" style="opacity: 1 !important; visibility: visible !important;"></div>
                                     
                                     <!-- Card Header -->
                                     <div class="flex items-center gap-2 mb-2 relative z-10" style="opacity: 1 !important; visibility: visible !important;">
                                         <div class="w-8 h-8 rounded-lg bg-[#26914A] flex items-center justify-center shadow-lg" style="opacity: 1 !important; visibility: visible !important;">
                                             <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="opacity: 1 !important; visibility: visible !important;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                                         </div>
                                         <h3 class="text-white font-bold text-sm" style="opacity: 1 !important; visibility: visible !important; color: white !important;">Calcula tu Probabilidad</h3>
                                     </div>
                                     <p class="text-gray-200 text-[10px] leading-tight mb-3 relative z-10" style="opacity: 1 !important; visibility: visible !important; color: #e5e7eb !important;">Descubre cuánto podrías aprender con nosotros.</p>

                                     <!-- Simulation Area -->
                                     <div class="bg-[#111827] rounded-xl p-3 border-2 border-[#26914A]/60 relative z-10 shadow-inner" style="opacity: 1 !important; visibility: visible !important;">
                                         <!-- Investment Input -->
                                         <div class="flex justify-between items-center mb-2" style="opacity: 1 !important; visibility: visible !important;">
                                             <span class="text-gray-200 text-xs font-medium" style="opacity: 1 !important; visibility: visible !important; color: #e5e7eb !important;">Semilla:</span>
                                             <span class="text-white font-bold text-sm" style="opacity: 1 !important; visibility: visible !important; color: white !important;">$1,000</span>
                                         </div>
                                         
                                         <!-- Custom Range Slider -->
                                         <div class="relative h-2 w-full bg-gray-700 rounded-full mb-3 shadow-inner" style="opacity: 1 !important; visibility: visible !important;">
                                             <div class="absolute top-0 left-0 h-full w-[40%] bg-gradient-to-r from-[#26914A] to-[#4ADE80] rounded-full shadow-md" style="opacity: 1 !important; visibility: visible !important;"></div>
                                             <div class="absolute top-1/2 left-[40%] transform -translate-x-1/2 -translate-y-1/2 w-4 h-4 bg-white border-2 border-[#26914A] rounded-full shadow-xl cursor-pointer" style="opacity: 1 !important; visibility: visible !important;"></div>
                                         </div>

                                         <div class="flex justify-between items-end mt-2" style="opacity: 1 !important; visibility: visible !important;">
                                             <div class="text-[9px] text-gray-300 font-medium" style="opacity: 1 !important; visibility: visible !important; color: #d1d5db !important;">Sin Estimado de días</div>
                                             <div class="text-[#4ADE80] font-black text-xl drop-shadow-lg" style="opacity: 1 !important; visibility: visible !important; color: #4ADE80 !important;">$1,250*</div>
                                         </div>
                                     </div>

                                     <p class="text-gray-300 text-[10px] mt-2 text-center relative z-10" style="opacity: 1 !important; visibility: visible !important; color: #d1d5db !important;">*Cifras de Aprendizaje. Rendimientos no garantizados.</p>
                                </div>

                                <!-- Bottom Nav Simulation -->
                                <div class="h-16 px-8 flex justify-between items-center border-t border-gray-50 bg-white transform translate-z-[2px] mt-auto">
                                    <div class="w-6 h-6 text-[#26914A]"><svg fill="currentColor" viewBox="0 0 24 24"><path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/></svg></div>
                                    <div class="w-6 h-6 text-gray-300"><svg fill="currentColor" viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg></div>
                                    <div class="w-6 h-6 text-gray-300"><svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg></div>
                                </div>

                            </div>
                        </div>

                         <!-- Reflection/Glare on Screen (Glass Effect) -->
                         <div class="absolute inset-[8px] rounded-[42px] bg-gradient-to-tr from-transparent via-white/10 to-transparent opacity-50 pointer-events-none z-20"></div>
                    </div>
                </div>

                 <!-- Floating Front Elements (Dollar - Hidden on Mobile) -->
                 <div class="hidden lg:flex absolute bottom-[25%] right-[15%] w-14 h-14 animate-float-fast z-20 items-center justify-center pointer-events-none">
                     <img src="{{ asset('img/hero/dolar.png') }}" alt="USD" class="w-full h-full object-contain drop-shadow-xl">
                 </div>

            </div>

        </div>
    </div>

    <style>
        .font-heading {
             font-family: 'Inter', sans-serif;
        }
        .preserve-3d {
            transform-style: preserve-3d;
        }
        @keyframes float-slow {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-30px) rotate(5deg); }
        }
        @keyframes float-medium {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(-10deg); }
        }
        @keyframes float-fast {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-15px) rotate(15deg); }
        }
        .animate-float-slow { animation: float-slow 8s ease-in-out infinite; }
        .animate-float-medium { animation: float-medium 6s ease-in-out infinite; }
        .animate-float-fast { animation: float-fast 4s ease-in-out infinite; }
        
        @keyframes pulse-slow {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 0.5; }
        }
        .animate-pulse-slow { animation: pulse-slow 3s ease-in-out infinite; }
        
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        /* FORCE VISIBILITY FIX - Sobrescribe cualquier CSS que oculte el contenido */
        @media (min-width: 1024px) {
            /* Forzar visibilidad del contenido de la pantalla del teléfono en desktop */
            .group .bg-\[#fefefe\],
            .group .bg-\[#fefefe\] *,
            .group .phone-screen-card,
            .group .phone-screen-card * {
                opacity: 1 !important;
                visibility: visible !important;
            }
            
            /* Asegurar que el contenedor de la pantalla sea visible */
            .group .absolute.inset-\[8px\].bg-black,
            .group .absolute.inset-\[8px\].bg-black * {
                opacity: 1 !important;
                visibility: visible !important;
            }
        }
        
        /* Forzar visibilidad global para elementos dentro del grupo */
        .phone-screen-card,
        .phone-screen-card *,
        .bg-\[#fefefe\],
        .bg-\[#fefefe\] * {
            opacity: 1 !important;
            visibility: visible !important;
        }
    </style>
</div>
