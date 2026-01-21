<div class="bg-white p-6 rounded-lg border-2 border-gray-200">
    <h4 class="text-xl font-bold text-gray-800 mb-4">Hacer una Reservación</h4>

    @if($message)
        <div class="mb-4 p-4 rounded-lg {{ $messageType === 'success' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
            {{ $message }}
        </div>
    @endif

    <form wire:submit.prevent="createBooking" class="space-y-4">
        <div>
            <label for="start_date" class="block text-sm font-medium text-gray-700 mb-2">
                Fecha de Inicio
            </label>
            <input 
                type="date" 
                id="start_date"
                wire:model="start_date"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                required
            >
            @error('start_date') 
                <span class="text-red-500 text-sm">{{ $message }}</span> 
            @enderror
        </div>

        <div>
            <label for="end_date" class="block text-sm font-medium text-gray-700 mb-2">
                Fecha de Fin
            </label>
            <input 
                type="date" 
                id="end_date"
                wire:model="end_date"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                required
            >
            @error('end_date') 
                <span class="text-red-500 text-sm">{{ $message }}</span> 
            @enderror
        </div>

        <button 
            type="submit"
            class="w-full bg-secondary text-white font-bold py-3 px-4 rounded-lg hover:bg-purple-700 transition duration-200"
        >
            Confirmar Reservación
        </button>
    </form>

    @guest
        <p class="mt-4 text-sm text-gray-600 text-center">
            <a href="{{ route('login') }}" class="text-primary hover:underline">Inicia sesión</a> 
            para hacer una reservación
        </p>
    @endguest
</div>
