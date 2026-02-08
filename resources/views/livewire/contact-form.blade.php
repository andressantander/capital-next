<div class="bg-white p-8 md:p-12 rounded-2xl shadow-lg border border-gray-100">
    @if ($success)
        <div class="bg-green-50 border border-green-200 text-green-800 rounded-lg p-6 text-center animate-fade-in-up">
            <svg class="w-16 h-16 mx-auto mb-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <h3 class="text-2xl font-bold mb-2">¡Mensaje enviado!</h3>
            <p class="mb-6">Gracias por contactarnos. Un asesor se pondrá en contacto contigo pronto.</p>
            <button wire:click="$set('success', false)" class="text-green-700 font-semibold hover:underline">Enviar otro mensaje</button>
        </div>
    @else
        <form wire:submit.prevent="submit" class="space-y-6">
            <div>
                <label for="name" class="block text-sm font-medium text-text-secondary mb-1">Nombre</label>
                <input wire:model="name" type="text" id="name" class="w-full px-4 py-3 rounded-lg border-gray-300 focus:border-secondary focus:ring focus:ring-secondary/20 transition-shadow" placeholder="Tu nombre completo">
                @error('name') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-text-secondary mb-1">Email</label>
                <input wire:model="email" type="email" id="email" class="w-full px-4 py-3 rounded-lg border-gray-300 focus:border-secondary focus:ring focus:ring-secondary/20 transition-shadow" placeholder="tucorreo@ejemplo.com">
                @error('email') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-text-secondary mb-1">Mensaje</label>
                <textarea wire:model="message" id="message" rows="4" class="w-full px-4 py-3 rounded-lg border-gray-300 focus:border-secondary focus:ring focus:ring-secondary/20 transition-shadow" placeholder="¿En qué podemos ayudarte?"></textarea>
                @error('message') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
            </div>

            <p class="text-xs text-text-secondary">
                Los datos se usan únicamente para contacto informativo.
            </p>

            <button type="submit" class="w-full bg-secondary hover:bg-blue-600 text-white font-bold py-4 rounded-lg uppercase tracking-wide transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1 flex justify-center items-center disabled:opacity-50 disabled:cursor-not-allowed">
                <span wire:loading.remove wire:target="submit">Enviar consulta</span>
                <span wire:loading wire:target="submit" class="flex items-center">
                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Enviando...
                </span>
            </button>
        </form>
    @endif
</div>
