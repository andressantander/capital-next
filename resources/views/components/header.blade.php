<header x-data="{ 
    scrolled: false,
    mobileOpen: false, 
    atHome: {{ request()->routeIs('home') ? 'true' : 'false' }} 
}" 
@scroll.window="scrolled = (window.pageYOffset > 20)" 
class="fixed top-0 w-full z-50 transition-all duration-300"
:class="scrolled ? 'bg-white shadow-lg py-2' : 'bg-transparent py-4'">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center font-bold font-heading transition-all duration-300"
                         :class="scrolled ? 'bg-primary text-white' : 'bg-white/10 backdrop-blur-sm text-white border border-white/20'">
                        CN
                    </div>
                    <span class="font-heading font-bold text-2xl tracking-tight transition-colors duration-300"
                          :class="scrolled ? 'text-primary' : 'text-white'">
                        Capital Next
                    </span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <nav class="hidden md:flex items-center gap-8">
                <!-- Links -->
                <div class="flex items-center gap-6">
                     @foreach([
                        ['route' => 'home', 'label' => 'Inicio'],
                        ['route' => 'about', 'label' => 'Qué es'],
                        ['route' => 'benefits', 'label' => 'Beneficios'],
                        ['route' => 'methodology', 'label' => 'Metodología'],
                        ['route' => 'contact', 'label' => 'Contacto']
                     ] as $link)
                     <a href="{{ route($link['route']) }}" 
                        class="text-[15px] font-medium transition-colors duration-300"
                        :class="{
                            'text-secondary font-semibold': {{ request()->routeIs($link['route']) ? 'true' : 'false' }},
                            'text-primary hover:text-secondary': scrolled && !{{ request()->routeIs($link['route']) ? 'true' : 'false' }},
                            'text-white/90 hover:text-white': !scrolled && !{{ request()->routeIs($link['route']) ? 'true' : 'false' }} 
                        }">
                        {{ $link['label'] }}
                     </a>
                     @endforeach
                </div>

                <!-- Auth Buttons -->
                <div class="flex items-center gap-3 ml-4">
                    <!-- Login Button - Outlined Style -->
                    <a href="#" 
                       class="px-6 py-2.5 rounded-full font-semibold text-[13px] uppercase tracking-wide transition-all duration-300 border-2"
                       :class="scrolled 
                           ? 'border-primary text-primary hover:bg-primary hover:text-white' 
                           : 'border-white/60 text-white hover:bg-white hover:text-primary'">
                        Log in
                    </a>
                    <!-- Open Account Button - Solid Green Style -->
                    <a href="#" 
                       class="px-6 py-2.5 rounded-full font-bold uppercase text-[13px] tracking-wide transition-all duration-300 bg-secondary text-white hover:bg-[#1e7e3e] shadow-md hover:shadow-lg">
                        Abrir cuenta
                    </a>
                </div>
            </nav>

            <!-- Mobile Menu Button -->
            <div class="-mr-2 flex items-center md:hidden">
                <button @click="mobileOpen = !mobileOpen" 
                        class="inline-flex items-center justify-center p-2 rounded-md focus:outline-none transition-colors duration-300"
                        :class="scrolled ? 'text-primary hover:bg-gray-100' : 'text-white hover:bg-white/10'">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': mobileOpen, 'inline-flex': !mobileOpen }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': !mobileOpen, 'inline-flex': mobileOpen }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="md:hidden fixed inset-0 z-40 w-screen h-screen bg-white pt-24 overflow-y-auto">
         
         <div class="pt-2 pb-6 space-y-1 px-4">
            @foreach([
                ['route' => 'home', 'label' => 'Inicio'],
                ['route' => 'about', 'label' => 'Qué es'],
                ['route' => 'benefits', 'label' => 'Beneficios'],
                ['route' => 'methodology', 'label' => 'Metodología'],
                ['route' => 'contact', 'label' => 'Contacto']
             ] as $link)
            <a href="{{ route($link['route']) }}" class="block px-3 py-3 rounded-md text-base font-medium text-text-secondary hover:text-secondary hover:bg-green-50 transition-colors {{ request()->routeIs($link['route']) ? 'text-secondary bg-green-50 font-semibold' : '' }}">
                {{ $link['label'] }}
            </a>
            @endforeach
            
            <div class="mt-6 flex flex-col gap-3 px-3">
                 <a href="#" class="block w-full text-center border-2 border-primary text-primary hover:bg-primary hover:text-white px-5 py-3 rounded-full font-bold uppercase text-sm transition-all">
                    Log in
                </a>
                 <a href="#" class="block w-full text-center bg-secondary hover:bg-green-600 text-white px-5 py-3 rounded-full font-bold uppercase text-sm tracking-wide transition-all shadow-lg">
                    Abrir cuenta
                </a>
            </div>
        </div>
    </div>
</header>
