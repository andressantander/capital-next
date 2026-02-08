@extends('layouts.public')

@section('title', 'Contacto')

@section('content')
    <x-hero-simple 
        title="Da el primer paso con claridad" 
        subtitle="Estamos aquí para ayudarte a entender tus opciones y tomar control."
    />

    <!-- Contact Section -->
    <section class="py-24 bg-bg-light relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full bg-[url('/img/pattern.svg')] opacity-5 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                
                <!-- Info Side -->
                <div class="space-y-12">
                     <div>
                        <h2 class="text-3xl font-bold font-heading text-primary mb-6">Información, no presión</h2>
                        <div class="w-16 h-1 bg-accent rounded-full mb-6"></div>
                        <p class="text-lg text-text-secondary leading-relaxed mb-6">
                            Si quieres entender mejor tus decisiones financieras y avanzar con mayor seguridad, este es el momento.
                        </p>
                        <p class="text-text-secondary">
                            Nuestro equipo está listo para responder tus dudas sobre nuestra metodología y cómo podemos ayudarte a construir una estrategia sólida.
                        </p>
                    </div>

                    <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                        <h3 class="text-xl font-bold font-heading text-primary mb-6">Canales de contacto</h3>
                        
                        <ul class="space-y-6">
                            <li class="flex items-start group">
                                <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center text-secondary mr-4 group-hover:bg-secondary group-hover:text-white transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <div>
                                    <span class="block text-sm font-medium text-gray-500">Email</span>
                                    <a href="mailto:info@capitalnext.com" class="text-lg font-bold text-primary hover:text-secondary transition-colors">info@capitalnext.com</a>
                                </div>
                            </li>
                            <li class="flex items-start group">
                                <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center text-secondary mr-4 group-hover:bg-secondary group-hover:text-white transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </div>
                                <div>
                                    <span class="block text-sm font-medium text-gray-500">Ubicación</span>
                                    <span class="text-lg font-bold text-primary">Ciudad de México, México</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-blue-50 p-6 rounded-xl border border-blue-100">
                        <p class="text-sm text-text-secondary italic">
                            Nota: El contacto es informativo y educativo. No se ofrecen promesas de rentabilidad ni recomendaciones personalizadas automáticas.
                        </p>
                    </div>
                </div>

                <!-- Form Side -->
                <div class="lg:mt-0">
                    <livewire:contact-form />
                </div>
            </div>
        </div>
    </section>
@endsection
