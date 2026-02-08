<footer class="bg-bg-dark text-white pt-16 pb-8 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
            <!-- Brand -->
            <div class="space-y-4">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-secondary rounded-md flex items-center justify-center text-white font-bold font-heading">CN</div>
                    <span class="font-heading font-bold text-xl tracking-tight">Capital Next</span>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Claridad antes que acción. Educación antes que decisión. Tu socio en inteligencia financiera.
                </p>
            </div>

            <!-- Navigation -->
            <div>
                <h3 class="font-heading font-semibold text-lg mb-4 text-accent">Navegación</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors">Inicio</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white transition-colors">Qué es</a></li>
                    <li><a href="{{ route('benefits') }}" class="text-gray-400 hover:text-white transition-colors">Beneficios</a></li>
                    <li><a href="{{ route('methodology') }}" class="text-gray-400 hover:text-white transition-colors">Metodología</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white transition-colors">Contacto</a></li>
                </ul>
            </div>

            <!-- Legal -->
            <div>
                <h3 class="font-heading font-semibold text-lg mb-4 text-accent">Legal</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Aviso legal</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Política de privacidad</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Términos y condiciones</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h3 class="font-heading font-semibold text-lg mb-4 text-accent">Contacto</h3>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3 text-gray-400">
                        <svg class="w-5 h-5 mt-0.5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <a href="mailto:info@capitalnext.com" class="hover:text-white transition-colors">info@capitalnext.com</a>
                    </li>
                    <li class="text-gray-400 text-sm italic mt-4">
                        <a href="{{ route('contact') }}" class="hover:text-white transition-colors border-b border-secondary pb-0.5">Ir al formulario de contacto &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-800 pt-8 mt-8 text-center md:text-left flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-gray-500 text-xs">
                &copy; {{ date('Y') }} Capital Next. Todos los derechos reservados.
            </p>
            <p class="text-gray-500 text-xs max-w-lg text-center md:text-right">
                Este sitio tiene fines informativos y educativos. No se garantizan resultados ni se realizan promesas de rentabilidad.
            </p>
        </div>
    </div>
</footer>
