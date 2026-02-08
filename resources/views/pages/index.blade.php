@extends('layouts.public')

@section('content')
    <!-- Hero Section -->
    <livewire:hero-slider />

    <!-- The Problem Section -->
    <section class="py-24 bg-white text-center">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-5xl font-bold font-heading text-primary mb-12 tracking-tight">Invertir sin claridad tiene un costo</h2>
            
            <div class="grid md:grid-cols-3 gap-8 text-left mb-16">
                <div class="p-6 bg-gray-50 rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mb-4 text-red-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-2">Exceso de ruido</h3>
                    <p class="text-text-secondary leading-relaxed">Información contradictoria que paraliza o confunde.</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mb-4 text-orange-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-2">Impulsividad</h3>
                    <p class="text-text-secondary leading-relaxed">Decisiones emocionales que suelen terminar en pérdidas.</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center mb-4 text-gray-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-2">Falta de estrategia</h3>
                    <p class="text-text-secondary leading-relaxed">Actuar sin un plan claro ni objetivos definidos.</p>
                </div>
            </div>

            <div class="bg-blue-50 p-8 rounded-2xl border border-blue-100">
                <p class="text-lg md:text-xl text-primary font-medium leading-relaxed">
                    "La mayoría de las personas toma decisiones financieras sin comprender completamente lo que hace. 
                    <span class="font-bold">Eso genera errores evitables, frustración y pérdida de control.</span>"
                </p>
            </div>
        </div>
    </section>

    <!-- The Solution Section -->
    <section class="py-24 bg-bg-light relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-gradient-to-l from-white/50 to-transparent pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center gap-16">
            <div class="md:w-1/2 space-y-6">
                <h2 class="text-3xl md:text-5xl font-bold font-heading text-primary tracking-tight">Un enfoque basado en comprensión</h2>
                <div class="w-20 h-1 bg-accent rounded-full"></div>
                <p class="text-lg text-text-secondary leading-relaxed">
                    Inversión Inteligente prioriza la claridad, el análisis y la toma de decisiones conscientes antes de cualquier acción. Creemos que la mejor inversión es la educación que precede a la transacción.
                </p>
                <div class="pt-4">
                    <a href="{{ route('methodology') }}" class="inline-flex items-center text-secondary font-bold uppercase tracking-wide hover:text-primary transition-colors group">
                        Descubrir cómo funciona
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>
            <div class="md:w-1/2">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl bg-white p-2">
                    <!-- Abstract Visualization of Clarity/Strategy -->
                    <div class="aspect-video bg-gradient-to-tr from-bg-dark to-primary flex items-center justify-center p-8">
                         <div class="grid grid-cols-2 gap-4 w-full h-full opacity-80">
                            <div class="bg-white/10 rounded-lg animate-pulse"></div>
                            <div class="bg-white/5 rounded-lg"></div>
                            <div class="bg-white/5 rounded-lg"></div>
                            <div class="bg-accent/20 rounded-lg"></div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Preview -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold font-heading text-primary mb-4">Lo que obtienes</h2>
                <p class="text-text-secondary max-w-2xl mx-auto">Resultados tangibles no financieros, sino mentales y estratégicos.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="group p-8 rounded-2xl bg-white border border-gray-100 shadow-lg hover:shadow-xl transition-all hover:-translate-y-1">
                    <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mb-6 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold font-heading text-primary mb-3">Claridad</h3>
                    <p class="text-text-secondary">Entiende cada decisión. Sabe por qué inviertes y qué esperar.</p>
                </div>

                <!-- Card 2 -->
                <div class="group p-8 rounded-2xl bg-white border border-gray-100 shadow-lg hover:shadow-xl transition-all hover:-translate-y-1">
                     <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mb-6 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold font-heading text-primary mb-3">Control</h3>
                    <p class="text-text-secondary">Reduce el riesgo emocional. Mantén la calma cuando hay volatilidad.</p>
                </div>

                <!-- Card 3 -->
                <div class="group p-8 rounded-2xl bg-white border border-gray-100 shadow-lg hover:shadow-xl transition-all hover:-translate-y-1">
                     <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mb-6 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold font-heading text-primary mb-3">Crecimiento</h3>
                    <p class="text-text-secondary">Enfoque sostenible. Construcción de patrimonio paso a paso.</p>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('benefits') }}" class="inline-block px-8 py-3 border-2 border-primary text-primary hover:bg-primary hover:text-white font-semibold rounded-lg uppercase tracking-wide transition-all">
                    Ver todos los beneficios
                </a>
            </div>
        </div>
    </section>

    <!-- Main CTA -->
    <section class="py-24 bg-primary relative overflow-hidden text-center">
        <!-- Background Elements -->
        <div class="absolute inset-0 bg-gradient-to-br from-primary to-bg-dark"></div>
        <div class="absolute top-0 left-0 w-64 h-64 bg-white/5 rounded-full blur-3xl -translate-y-1/2 -translate-x-1/2"></div>
        <div class="absolute bottom-0 right-0 w-64 h-64 bg-accent/10 rounded-full blur-3xl translate-y-1/2 translate-x-1/2"></div>
        
        <div class="relative z-10 max-w-4xl mx-auto px-4">
            <h2 class="text-3xl md:text-5xl font-bold font-heading text-white mb-6 tracking-tight">Empieza hoy a tomar decisiones con claridad</h2>
            <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto">No adivines. Entiende. Contacta con nosotros para recibir información detallada sin compromiso.</p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="px-8 py-4 bg-secondary hover:bg-blue-500 text-white font-bold rounded-lg uppercase tracking-wide shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-1">
                    Comenzar ahora
                </a>
                <a href="{{ route('contact') }}" class="px-8 py-4 bg-transparent border-2 border-white/30 text-white hover:bg-white hover:text-primary font-bold rounded-lg uppercase tracking-wide transition-all">
                    Solicitar información
                </a>
            </div>
        </div>
    </section>
@endsection
