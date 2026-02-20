@extends('layouts.public')

@section('content')
    <!-- Hero Section -->
    <livewire:hero-slider />

    <!-- The Problem Section -->
    <section class="py-32 bg-gradient-to-b from-white via-gray-50 to-white relative overflow-hidden">
        <!-- Decorative Background Elements -->
        <div class="absolute top-20 right-0 w-96 h-96 bg-[#26914A]/5 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-20 left-0 w-80 h-80 bg-blue-500/5 rounded-full blur-3xl pointer-events-none"></div>
        
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-6xl font-black text-transparent bg-clip-text bg-gradient-to-r from-primary via-primary to-[#26914A] mb-6 tracking-tight">Invertir sin claridad tiene un costo</h2>
            </div>
            
            <div class="grid md:grid-cols-3 gap-10 mb-20">
                <!-- Problem Card 1 -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-red-500/10 to-transparent rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative p-10 bg-white/80 backdrop-blur-sm rounded-3xl border border-red-100/50 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                        <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center mb-6 text-white shadow-lg transform group-hover:scale-110 group-hover:rotate-6 transition-transform duration-500">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-black text-gray-900 mb-4 group-hover:text-red-600 transition-colors">Exceso de ruido</h3>
                        <p class="text-gray-600 leading-relaxed text-lg">Información contradictoria que paraliza o confunde.</p>
                    </div>
                </div>

                <!-- Problem Card 2 -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-500/10 to-transparent rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative p-10 bg-white/80 backdrop-blur-sm rounded-3xl border border-orange-100/50 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                        <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center mb-6 text-white shadow-lg transform group-hover:scale-110 group-hover:rotate-6 transition-transform duration-500">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-black text-gray-900 mb-4 group-hover:text-orange-600 transition-colors">Impulsividad</h3>
                        <p class="text-gray-600 leading-relaxed text-lg">Decisiones emocionales que suelen terminar en pérdidas.</p>
                    </div>
                </div>

                <!-- Problem Card 3 -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-400/10 to-transparent rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative p-10 bg-white/80 backdrop-blur-sm rounded-3xl border border-gray-200/50 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                        <div class="w-16 h-16 bg-gradient-to-br from-gray-700 to-gray-800 rounded-2xl flex items-center justify-center mb-6 text-white shadow-lg transform group-hover:scale-110 group-hover:rotate-6 transition-transform duration-500">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-black text-gray-900 mb-4 group-hover:text-gray-700 transition-colors">Falta de estrategia</h3>
                        <p class="text-gray-600 leading-relaxed text-lg">Actuar sin un plan claro ni objetivos definidos.</p>
                    </div>
                </div>
            </div>

            <!-- Quote Section -->
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 via-primary/10 to-[#26914A]/10 rounded-3xl blur-xl"></div>
                <div class="relative bg-white/70 backdrop-blur-md p-12 rounded-3xl border border-blue-100/50 shadow-2xl">
                    <div class="absolute -top-6 -left-6 w-16 h-16 bg-gradient-to-br from-primary to-[#26914A] rounded-2xl flex items-center justify-center text-white text-4xl font-serif shadow-xl">"</div>
                    <p class="text-2xl md:text-3xl text-primary font-bold leading-relaxed pl-8">
                        La mayoría de las personas toma decisiones financieras sin comprender completamente lo que hace. 
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#26914A] to-primary">Eso genera errores evitables, frustración y pérdida de control.</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- The Solution Section -->
    <section class="py-32 bg-gradient-to-br from-[#1A232A] via-primary to-[#1A232A] relative overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-[#26914A]/20 rounded-full blur-[120px] animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-blue-500/10 rounded-full blur-[100px] animate-pulse" style="animation-delay: 1s;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <!-- Left Content -->
                <div class="space-y-8 order-2 md:order-1">
                    <div class="inline-block">
                        <div class="px-5 py-2 bg-[#26914A]/20 backdrop-blur-sm rounded-full border border-[#26914A]/30 mb-6">
                            <span class="text-[#79F4A4] font-bold text-sm uppercase tracking-wider">Nuestra Filosofía</span>
                        </div>
                    </div>
                    <h2 class="text-4xl md:text-6xl font-black text-white tracking-tight leading-tight">
                        Un enfoque basado en <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#26914A] to-[#79F4A4]">comprensión</span>
                    </h2>
                    <div class="w-24 h-2 bg-gradient-to-r from-[#26914A] to-[#79F4A4] rounded-full shadow-lg shadow-[#26914A]/50"></div>
                    <p class="text-xl text-gray-300 leading-relaxed">
                        Inversión Inteligente prioriza la claridad, el análisis y la toma de decisiones conscientes antes de cualquier acción. Creemos que la mejor inversión es la educación que precede a la transacción.
                    </p>
                    <div class="pt-6">
                        <a href="{{ route('methodology') }}" class="group inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-[#26914A] to-[#1e7e3e] hover:from-[#1e7e3e] hover:to-[#26914A] text-white font-bold rounded-full uppercase tracking-wider shadow-[0_10px_30px_rgba(38,145,74,0.4)] hover:shadow-[0_15px_40px_rgba(38,145,74,0.6)] transition-all duration-300 transform hover:-translate-y-1">
                            Descubrir cómo funciona
                            <svg class="w-6 h-6 transform group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Right Visual -->
                <div class="order-1 md:order-2">
                    <div class="relative group">
                        <div class="absolute inset-0 bg-gradient-to-br from-[#26914A] to-[#79F4A4] rounded-3xl blur-2xl opacity-30 group-hover:opacity-50 transition-opacity duration-500"></div>
                        <div class="relative bg-gradient-to-br from-gray-900 to-gray-800 rounded-3xl overflow-hidden shadow-2xl border border-[#26914A]/20">
                            <div class="aspect-video flex items-center justify-center p-12">
                                <div class="grid grid-cols-2 gap-6 w-full h-full">
                                    <div class="bg-gradient-to-br from-[#26914A]/30 to-[#26914A]/10 backdrop-blur-sm rounded-2xl border border-[#26914A]/30 animate-pulse shadow-xl"></div>
                                    <div class="bg-gradient-to-br from-blue-500/20 to-blue-500/5 backdrop-blur-sm rounded-2xl border border-blue-500/20"></div>
                                    <div class="bg-gradient-to-br from-blue-500/20 to-blue-500/5 backdrop-blur-sm rounded-2xl border border-blue-500/20"></div>
                                    <div class="bg-gradient-to-br from-[#79F4A4]/30 to-[#79F4A4]/10 backdrop-blur-sm rounded-2xl border border-[#79F4A4]/30 animate-pulse shadow-xl" style="animation-delay: 0.5s;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Preview -->
    <section class="py-32 bg-gradient-to-b from-white via-gray-50 to-white relative overflow-hidden">
        <!-- Decorative Elements -->
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-[#26914A]/5 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 right-1/4 w-80 h-80 bg-blue-500/5 rounded-full blur-3xl pointer-events-none"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20">
                <div class="inline-block mb-6">
                    <div class="px-5 py-2 bg-[#26914A]/10 rounded-full border border-[#26914A]/20">
                        <span class="text-[#26914A] font-bold text-sm uppercase tracking-wider">Beneficios Clave</span>
                    </div>
                </div>
                <h2 class="text-4xl md:text-6xl font-black text-transparent bg-clip-text bg-gradient-to-r from-primary via-primary to-[#26914A] mb-6 tracking-tight">Lo que obtienes</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Resultados tangibles no financieros, sino mentales y estratégicos.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-10">
                <!-- Benefit Card 1: Claridad -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/20 to-[#26914A]/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative h-full p-10 bg-white/90 backdrop-blur-sm rounded-3xl border border-gray-100 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-primary rounded-2xl flex items-center justify-center mb-8 text-white shadow-2xl shadow-blue-500/30 transform group-hover:scale-110 group-hover:rotate-6 transition-transform duration-500">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                        </div>
                        <h3 class="text-3xl font-black text-gray-900 mb-5 group-hover:text-primary transition-colors">Claridad</h3>
                        <p class="text-gray-600 leading-relaxed text-lg">Entiende cada decisión. Sabe por qué inviertes y qué esperar.</p>
                        <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-500 to-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 rounded-b-3xl"></div>
                    </div>
                </div>

                <!-- Benefit Card 2: Control -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/20 to-[#26914A]/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative h-full p-10 bg-white/90 backdrop-blur-sm rounded-3xl border border-gray-100 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
                        <div class="w-20 h-20 bg-gradient-to-br from-primary to-[#26914A] rounded-2xl flex items-center justify-center mb-8 text-white shadow-2xl shadow-primary/30 transform group-hover:scale-110 group-hover:rotate-6 transition-transform duration-500">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                        </div>
                        <h3 class="text-3xl font-black text-gray-900 mb-5 group-hover:text-[#26914A] transition-colors">Control</h3>
                        <p class="text-gray-600 leading-relaxed text-lg">Reduce el riesgo emocional. Mantén la calma cuando hay volatilidad.</p>
                        <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-primary to-[#26914A] transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 rounded-b-3xl"></div>
                    </div>
                </div>

                <!-- Benefit Card 3: Crecimiento -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-[#26914A]/20 to-[#79F4A4]/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative h-full p-10 bg-white/90 backdrop-blur-sm rounded-3xl border border-gray-100 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
                        <div class="w-20 h-20 bg-gradient-to-br from-[#26914A] to-[#79F4A4] rounded-2xl flex items-center justify-center mb-8 text-white shadow-2xl shadow-[#26914A]/30 transform group-hover:scale-110 group-hover:rotate-6 transition-transform duration-500">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                        </div>
                        <h3 class="text-3xl font-black text-gray-900 mb-5 group-hover:text-[#26914A] transition-colors">Crecimiento</h3>
                        <p class="text-gray-600 leading-relaxed text-lg">Enfoque sostenible. Construcción de patrimonio paso a paso.</p>
                        <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-[#26914A] to-[#79F4A4] transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 rounded-b-3xl"></div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-16">
                <a href="{{ route('benefits') }}" class="group inline-flex items-center gap-3 px-10 py-5 bg-white border-2 border-primary text-primary hover:bg-primary hover:text-white font-black rounded-full uppercase tracking-wider shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 text-lg">
                    Ver todos los beneficios
                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Main CTA -->
    <section class="py-32 bg-gradient-to-br from-primary via-[#1A232A] to-primary relative overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 bg-gradient-to-br from-primary to-[#1A232A]"></div>
        <div class="absolute top-0 left-0 w-96 h-96 bg-[#26914A]/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-[#79F4A4]/10 rounded-full blur-[120px] pointer-events-none"></div>
        
        <div class="relative z-10 max-w-5xl mx-auto px-4 text-center">
            <div class="inline-block mb-8">
                <div class="px-6 py-3 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                    <span class="text-[#79F4A4] font-bold text-sm uppercase tracking-widest">Comienza Ahora</span>
                </div>
            </div>
            
            <h2 class="text-4xl md:text-6xl font-black text-white mb-8 tracking-tight leading-tight">
                Empieza hoy a tomar decisiones con <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#79F4A4] to-[#26914A]">claridad</span>
            </h2>
            
            <p class="text-2xl text-blue-100 mb-12 max-w-3xl mx-auto leading-relaxed font-medium">
                No adivines. Entiende. Contacta con nosotros para recibir información detallada sin compromiso.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="{{ route('contact') }}" class="group px-10 py-5 bg-gradient-to-r from-[#26914A] to-[#1e7e3e] hover:from-[#1e7e3e] hover:to-[#26914A] text-white font-black rounded-full uppercase tracking-widest shadow-[0_15px_40px_rgba(38,145,74,0.5)] hover:shadow-[0_20px_50px_rgba(38,145,74,0.6)] transition-all duration-300 transform hover:-translate-y-2 text-lg inline-flex items-center gap-3">
                    Comenzar ahora
                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                </a>
                <a href="{{ route('contact') }}" class="group px-10 py-5 bg-white/10 backdrop-blur-sm border-2 border-white/30 hover:bg-white hover:border-white text-white hover:text-primary font-black rounded-full uppercase tracking-widest transition-all duration-300 transform hover:-translate-y-2 text-lg inline-flex items-center gap-3">
                    Solicitar información
                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                </a>
            </div>
        </div>
    </section>
@endsection
