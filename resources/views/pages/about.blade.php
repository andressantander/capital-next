@extends('layouts.public')

@section('title', 'Qué es')

@section('content')
    <x-hero-simple 
        title="Invertir no es adivinar. Es entender." 
        subtitle="Un enfoque educativo y estratégico para tomar el control."
    />

    <!-- Main Content -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="prose prose-lg mx-auto text-text-secondary">
                <p class="lead text-2xl text-primary font-medium mb-8">
                    Inversión Inteligente es un enfoque educativo y estratégico que ayuda a las personas a comprender sus decisiones financieras antes de actuar.
                </p>
                <p>
                    Creemos firmemente que la causa principal de las pérdidas y la frustración financiera no es el mercado en sí, sino la falta de claridad al abordar el mercado. Nuestro objetivo es cerrar esa brecha de conocimiento.
                </p>
            </div>
        </div>
    </section>

    <!-- Principios -->
    <section class="py-20 bg-bg-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold font-heading text-primary text-center mb-16">Nuestros Principios</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                    <div class="text-5xl text-blue-100 font-bold mb-4">01</div>
                    <h3 class="text-xl font-bold text-primary mb-3">Claridad antes que acción</h3>
                    <p class="text-text-secondary">Nunca inviertas en algo que no entiendes. La educación es el primer paso de cualquier estrategia rentable.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                     <div class="text-5xl text-blue-100 font-bold mb-4">02</div>
                    <h3 class="text-xl font-bold text-primary mb-3">Estrategia antes que emoción</h3>
                    <p class="text-text-secondary">Dejamos las emociones fuera de la ecuación. Las decisiones se basan en datos, lógica y planificación.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                     <div class="text-5xl text-blue-100 font-bold mb-4">03</div>
                    <h3 class="text-xl font-bold text-primary mb-3">Largo plazo sobre inmediatez</h3>
                    <p class="text-text-secondary">La verdadera riqueza se construye con paciencia y consistencia, no con trucos mágicos de la noche a la mañana.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Diferenciales -->
    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold font-heading text-primary mb-6">¿Qué nos hace diferentes?</h2>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-text-secondary font-medium">Información clara y 100% comprensible.</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-text-secondary font-medium">Transparencia total en procesos y riesgos.</span>
                        </li>
                        <li class="flex items-start">
                             <svg class="w-6 h-6 text-green-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-text-secondary font-medium">Sin promesas irreales. Solo realidad.</span>
                        </li>
                        <li class="flex items-start">
                             <svg class="w-6 h-6 text-green-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-text-secondary font-medium">Enfoque en tu crecimiento personal y financiero.</span>
                        </li>
                    </ul>
                    
                    <div class="mt-8">
                        <a href="{{ route('benefits') }}" class="inline-flex items-center text-secondary font-bold uppercase tracking-wide hover:text-primary transition-colors">
                            Ver todos los beneficios &rarr;
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <div class="bg-bg-dark rounded-2xl p-8 text-white relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-secondary rounded-full blur-3xl opacity-20 translate-x-1/2 -translate-y-1/2"></div>
                        <h3 class="text-2xl font-bold font-heading mb-4">La verdad importa</h3>
                        <p class="text-gray-300 leading-relaxed mb-6">
                            "En un mundo lleno de ruido, la claridad es el activo más valioso."
                        </p>
                        <div class="w-12 h-1 bg-accent rounded-full"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
