@extends('layouts.public')

@section('title', 'Metodología')

@section('content')
    <x-hero-simple 
        title="Un proceso diseñado para tu éxito" 
        subtitle="Transformamos la incertidumbre financiera en un plan de acción estructurado, transparente y eficaz."
    />

    <!-- Timeline Section -->
    <section class="py-24 bg-bg-light relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-gray-200 to-transparent"></div>
        
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <h2 class="text-secondary font-bold tracking-widest uppercase text-sm mb-3">Nuestro Enfoque</h2>
                <h3 class="text-3xl md:text-4xl font-bold font-heading text-primary mb-6">Cinco pasos hacia tu libertad financiera</h3>
                <p class="text-text-secondary text-lg">
                    No improvisamos. Aplicamos una metodología probada que pone tus intereses en el centro de cada decisión.
                </p>
            </div>

            <div class="relative">
                <!-- Vertical Line (Desktop) -->
                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-gradient-to-b from-secondary/20 via-secondary to-secondary/20 rounded-full"></div>

                <div class="space-y-12 md:space-y-24 relative px-4 md:px-0">
                    
                    <!-- Step 1: Análisis -->
                    <div class="relative flex flex-col md:flex-row items-center group">
                        <!-- Content Left -->
                        <div class="md:w-1/2 md:pr-16 md:text-right order-2 md:order-1 mt-6 md:mt-0">
                            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 group-hover:shadow-lg group-hover:-translate-y-1 transition-all duration-300 relative overflow-hidden">
                                <div class="absolute top-0 right-0 w-20 h-20 bg-blue-50 rounded-bl-full -mr-10 -mt-10 opacity-50 group-hover:scale-110 transition-transform"></div>
                                <h3 class="text-2xl font-bold font-heading text-primary mb-3 relative z-10">1. Análisis Profundo</h3>
                                <p class="text-text-secondary leading-relaxed relative z-10">
                                    Comenzamos escuchando. Evaluamos tu situación actual, tus objetivos financieros, horizonte temporal y tolerancia al riesgo real. Porque no hay dos inversores iguales.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Center Node -->
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-14 h-14 bg-white border-4 border-secondary text-secondary rounded-full flex items-center justify-center z-10 shadow-lg group-hover:scale-110 group-hover:bg-secondary group-hover:text-white transition-all duration-300 order-1 md:order-2">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>

                        <!-- Empty Right -->
                        <div class="md:w-1/2 md:pl-16 order-3 hidden md:block"></div>
                    </div>

                    <!-- Step 2: Comprensión -->
                    <div class="relative flex flex-col md:flex-row items-center group">
                        <!-- Empty Left -->
                        <div class="md:w-1/2 md:pr-16 order-2 md:order-1 hidden md:block"></div>
                        
                        <!-- Center Node -->
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-14 h-14 bg-white border-4 border-gray-200 text-gray-400 group-hover:border-secondary group-hover:text-white rounded-full flex items-center justify-center z-10 shadow-md group-hover:shadow-lg group-hover:scale-110 group-hover:bg-secondary transition-all duration-300 order-1 md:order-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                        
                        <!-- Content Right -->
                        <div class="md:w-1/2 md:pl-16 md:text-left order-2 md:order-3 mt-6 md:mt-0">
                            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 group-hover:shadow-lg group-hover:-translate-y-1 transition-all duration-300 relative overflow-hidden">
                                <div class="absolute top-0 left-0 w-20 h-20 bg-blue-50 rounded-br-full -ml-10 -mt-10 opacity-50 group-hover:scale-110 transition-transform"></div>
                                <h3 class="text-2xl font-bold font-heading text-primary mb-3 relative z-10">2. Educación y Claridad</h3>
                                <p class="text-text-secondary leading-relaxed relative z-10">
                                    Desmitificamos las finanzas. Te explicamos el "por qué" y el "cómo" de cada recomendación. Nos aseguramos de que entiendas perfectamente tu estrategia antes de invertir un solo centavo.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3: Estrategia -->
                    <div class="relative flex flex-col md:flex-row items-center group">
                        <div class="md:w-1/2 md:pr-16 md:text-right order-2 md:order-1 mt-6 md:mt-0">
                            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 group-hover:shadow-lg group-hover:-translate-y-1 transition-all duration-300 relative overflow-hidden">
                                <div class="absolute top-0 right-0 w-20 h-20 bg-blue-50 rounded-bl-full -mr-10 -mt-10 opacity-50 group-hover:scale-110 transition-transform"></div>
                                <h3 class="text-2xl font-bold font-heading text-primary mb-3 relative z-10">3. Diseño de Estrategia</h3>
                                <p class="text-text-secondary leading-relaxed relative z-10">
                                    Creamos un portafolio a medida, enfocado en la preservación de capital y el crecimiento sostenible a largo plazo, seleccionando los mejores instrumentos para tu perfil.
                                </p>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-14 h-14 bg-white border-4 border-gray-200 text-gray-400 group-hover:border-secondary group-hover:text-white rounded-full flex items-center justify-center z-10 shadow-md group-hover:shadow-lg group-hover:scale-110 group-hover:bg-secondary transition-all duration-300 order-1 md:order-2">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <div class="md:w-1/2 md:pl-16 order-3 hidden md:block"></div>
                    </div>

                    <!-- Step 4: Seguimiento -->
                    <div class="relative flex flex-col md:flex-row items-center group">
                        <div class="md:w-1/2 md:pr-16 order-2 md:order-1 hidden md:block"></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-14 h-14 bg-white border-4 border-gray-200 text-gray-400 group-hover:border-secondary group-hover:text-white rounded-full flex items-center justify-center z-10 shadow-md group-hover:shadow-lg group-hover:scale-110 group-hover:bg-secondary transition-all duration-300 order-1 md:order-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <div class="md:w-1/2 md:pl-16 md:text-left order-2 md:order-3 mt-6 md:mt-0">
                            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 group-hover:shadow-lg group-hover:-translate-y-1 transition-all duration-300 relative overflow-hidden">
                                <div class="absolute top-0 left-0 w-20 h-20 bg-blue-50 rounded-br-full -ml-10 -mt-10 opacity-50 group-hover:scale-110 transition-transform"></div>
                                <h3 class="text-2xl font-bold font-heading text-primary mb-3 relative z-10">4. Monitoreo Activo</h3>
                                <p class="text-text-secondary leading-relaxed relative z-10">
                                    No te dejamos solo después de invertir. Monitoreamos continuamente el rendimiento y vigilamos las condiciones del mercado para asegurar que sigues en el camino correcto.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 5: Optimización -->
                    <div class="relative flex flex-col md:flex-row items-center group">
                        <div class="md:w-1/2 md:pr-16 md:text-right order-2 md:order-1 mt-6 md:mt-0">
                            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 group-hover:shadow-lg group-hover:-translate-y-1 transition-all duration-300 relative overflow-hidden">
                                <div class="absolute top-0 right-0 w-20 h-20 bg-blue-50 rounded-bl-full -mr-10 -mt-10 opacity-50 group-hover:scale-110 transition-transform"></div>
                                <h3 class="text-2xl font-bold font-heading text-primary mb-3 relative z-10">5. Optimización Continua</h3>
                                <p class="text-text-secondary leading-relaxed relative z-10">
                                    Tu vida cambia, y el mercado también. Realizamos ajustes periódicos para rebalancear tu cartera y aprovechar nuevas oportunidades o mitigar riesgos emergentes.
                                </p>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-14 h-14 bg-white border-4 border-gray-200 text-gray-400 group-hover:border-secondary group-hover:text-white rounded-full flex items-center justify-center z-10 shadow-md group-hover:shadow-lg group-hover:scale-110 group-hover:bg-secondary transition-all duration-300 order-1 md:order-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div class="md:w-1/2 md:pl-16 order-3 hidden md:block"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Why it Works Section (Updated) -->
    <section class="py-24 bg-primary text-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 30px 30px;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold font-heading mb-6">¿Por qué funciona este método?</h2>
                <p class="text-blue-100 text-lg max-w-2xl mx-auto">
                    Más que una estrategia, es una filosofía de inversión que prioriza la razón sobre la emoción.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Reason 1 -->
                <div class="bg-white/5 backdrop-blur-sm p-8 rounded-2xl border border-white/10 hover:bg-white/10 transition-colors">
                    <div class="w-12 h-12 bg-secondary/20 rounded-lg flex items-center justify-center text-secondary mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold font-heading mb-3">Sin Emociones</h3>
                    <p class="text-blue-100 leading-relaxed">
                        El mayor enemigo del inversor es su propia psicología. Eliminamos el miedo y la codicia de la ecuación para tomar decisiones racionales.
                    </p>
                </div>

                <!-- Reason 2 -->
                <div class="bg-white/5 backdrop-blur-sm p-8 rounded-2xl border border-white/10 hover:bg-white/10 transition-colors">
                    <div class="w-12 h-12 bg-secondary/20 rounded-lg flex items-center justify-center text-secondary mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold font-heading mb-3">Disciplina Estructurada</h3>
                    <p class="text-blue-100 leading-relaxed">
                        Seguimos un plan preestablecido. Esto nos permite actuar con confianza durante la volatilidad del mercado, en lugar de reaccionar.
                    </p>
                </div>

                <!-- Reason 3 -->
                <div class="bg-white/5 backdrop-blur-sm p-8 rounded-2xl border border-white/10 hover:bg-white/10 transition-colors">
                    <div class="w-12 h-12 bg-secondary/20 rounded-lg flex items-center justify-center text-secondary mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold font-heading mb-3">Visión a Largo Plazo</h3>
                    <p class="text-blue-100 leading-relaxed">
                        Ignoramos las modas pasajeras. Nos enfocamos en tendencias macroeconómicas y fundamentales sólidos que construyen riqueza real en el tiempo.
                    </p>
                </div>
            </div>
            
            <div class="text-center">
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-10 py-5 bg-accent text-primary font-bold rounded-lg uppercase tracking-wide shadow-lg hover:shadow-xl hover:bg-yellow-400 transition-all transform hover:-translate-y-1">
                    <span>Comenzar ahora</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
@endsection
