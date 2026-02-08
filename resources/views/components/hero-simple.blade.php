@props(['title', 'subtitle' => null])

<div class="relative bg-bg-dark py-20 md:py-28 overflow-hidden text-center px-4">
    <div class="absolute inset-0 bg-gradient-to-br from-primary to-bg-dark opacity-90"></div>
    <!-- Pattern -->
    <div class="absolute inset-0 bg-[url('/img/pattern.svg')] opacity-5"></div>
    
    <div class="relative z-10 max-w-4xl mx-auto space-y-4">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold font-heading text-white tracking-tight leading-tight animate-fade-in-up">
            {{ $title }}
        </h1>
        @if($subtitle)
            <p class="text-xl text-gray-300 max-w-2xl mx-auto animate-fade-in-up delay-100">
                {{ $subtitle }}
            </p>
        @endif
    </div>
</div>
