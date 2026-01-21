<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Propiedades Disponibles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($properties as $property)
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-lg transition">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-primary mb-2">
                                {{ $property->name }}
                            </h3>
                            <p class="text-gray-600 mb-4">
                                {{ Str::limit($property->description, 100) }}
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold text-secondary">
                                    €{{ number_format($property->price_per_night, 2) }}
                                    <span class="text-sm text-gray-500">/noche</span>
                                </span>
                                <a href="{{ route('properties.show', $property) }}" 
                                   class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                                    Ver Detalles
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-12">
                        <p class="text-gray-500 text-lg">No hay propiedades disponibles en este momento.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
