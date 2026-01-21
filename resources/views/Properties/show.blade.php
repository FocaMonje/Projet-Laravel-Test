<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $property->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <!-- Información de la propiedad -->
                        <div>
                            <h3 class="text-2xl font-bold text-primary mb-4">
                                {{ $property->name }}
                            </h3>
                            <p class="text-gray-700 mb-6">
                                {{ $property->description }}
                            </p>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-3xl font-bold text-secondary">
                                    €{{ number_format($property->price_per_night, 2) }}
                                    <span class="text-lg text-gray-600">/noche</span>
                                </p>
                            </div>
                        </div>

                        <!-- Formulario de reservación con Livewire -->
                        <div>
                            @livewire('booking-manager', ['property' => $property])
                        </div>
                    </div>

                    <div class="mt-8">
                        <a href="{{ route('properties.index') }}" 
                           class="text-primary hover:text-blue-700 font-semibold">
                            ← Volver al listado
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
