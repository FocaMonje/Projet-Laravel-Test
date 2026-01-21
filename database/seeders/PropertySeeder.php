<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    public function run(): void
    {
        $properties = [
            [
                'name' => 'Villa Mediterránea',
                'description' => 'Hermosa villa con vistas al mar, 4 habitaciones, piscina privada y jardín. Ideal para familias o grupos que buscan tranquilidad y lujo en la costa.',
                'price_per_night' => 250.00,
            ],
            [
                'name' => 'Apartamento Centro Ciudad',
                'description' => 'Moderno apartamento en el corazón de la ciudad, cerca de restaurantes, tiendas y transporte público. 2 habitaciones, totalmente equipado.',
                'price_per_night' => 120.00,
            ],
            [
                'name' => 'Cabaña en la Montaña',
                'description' => 'Acogedora cabaña de madera rodeada de naturaleza, perfecta para escapadas románticas o retiros de fin de semana. Chimenea y terraza con vistas.',
                'price_per_night' => 180.00,
            ],
            [
                'name' => 'Casa Rural Tradicional',
                'description' => 'Casa de piedra renovada en pueblo pintoresco, conservando su encanto original. 3 habitaciones, patio interior y bodega.',
                'price_per_night' => 150.00,
            ],
            [
                'name' => 'Loft Industrial',
                'description' => 'Espacioso loft con techos altos y diseño contemporáneo. Ubicado en zona artística, cerca de galerías y cafés. Perfecto para estancias largas.',
                'price_per_night' => 95.00,
            ],
            [
                'name' => 'Casa Playa Primera Línea',
                'description' => 'Casa frente al mar con acceso directo a la playa. 5 habitaciones, cocina completa, barbacoa y hamacas en el jardín. Vistas espectaculares.',
                'price_per_night' => 320.00,
            ],
        ];

        foreach ($properties as $property) {
            Property::create($property);
        }
    }
}
