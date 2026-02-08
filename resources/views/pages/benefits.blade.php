@extends('layouts.public')

@section('title', 'Beneficios')

@section('content')
    <x-hero-simple 
        title="Invertir con claridad cambia todo" 
        subtitle="Descubre cómo un enfoque informado transforma tus resultados."
    />

    <!-- Benefits Grid -->
    <section class="py-24 bg-bg-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
                <!-- Benefit 1 -->
                <div class="bg-white p-8 md:p-10 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 text-secondary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold font-heading text-primary mb-4">1. Claridad</h3>
                    <p class="text-lg text-text-secondary leading-relaxed">
                        Comprende lo que haces y por qué lo haces. Eliminamos la jerga complicada y te entregamos conceptos que puedes usar.
                    </p>
                </div>

                <!-- Benefit 2 -->
                <div class="bg-white p-8 md:p-10 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 text-secondary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold font-heading text-primary mb-4">2. Control</h3>
                    <p class="text-lg text-text-secondary leading-relaxed">
                        Reduce errores impulsivos y decisiones emocionales. Mantén el timón firme incluso en momentos de incertidumbre en los mercados.
                    </p>
                </div>

                <!-- Benefit 3 -->
                <div class="bg-white p-8 md:p-10 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 text-secondary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold font-heading text-primary mb-4">3. Crecimiento</h3>
                    <p class="text-lg text-text-secondary leading-relaxed">
                        Accede a estrategias responsables y sostenibles. Nos enfocamos en el interés compuesto de las buenas decisiones a lo largo del tiempo.
                    </p>
                </div>

                <!-- Benefit 4 -->
                <div class="bg-white p-8 md:p-10 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 text-secondary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold font-heading text-primary mb-4">4. Confianza</h3>
                    <p class="text-lg text-text-secondary leading-relaxed">
                        Toma decisiones basadas en información, no en ruido. Duerme tranquilo sabiendo que tienes una estrategia respaldada por datos.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Proof Section -->
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-3xl font-bold font-heading text-primary mb-8 tracking-tight">Menos riesgo, mejores decisiones</h2>
            <p class="text-xl text-text-secondary leading-relaxed mb-12">
                Invertir con claridad no elimina el riesgo inherente del mercado, pero elimina el riesgo innecesario de la ignorancia. Reduce errores costosos y mejora drásticamente tus probabilidades de éxito a largo plazo.
            </p>
            
            <a href="{{ route('contact') }}" class="inline-block px-10 py-4 bg-secondary hover:bg-blue-600 text-white font-bold rounded-lg uppercase tracking-wide shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-1">
                Comenzar ahora
            </a>
        </div>
    </section>
@endsection
