<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipalitySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipalities')->delete();

        $rows = [
            [
                'name'        => 'Centro Habana',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Plaza',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Playa',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Arroyo Naranjo',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Boyeros',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Cerro',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Cotorro',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Diez de Octubre',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Guanabacoa',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Habana del Este',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Habana Vieja',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'La Lisa',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Marianao',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Regla',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'San Miguel del Padrón',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Pinar del Río',
                'province_id' => 2,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Consolación del Sur',
                'province_id' => 2,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Guane',
                'province_id' => 2,
                'created_at'  => now(),
            ],
            [
                'name'        => 'La Palma',
                'province_id' => 2,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Los Palacios',
                'province_id' => 2,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Mantua',
                'province_id' => 2,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Minas de Matahambre',
                'province_id' => 2,
                'created_at'  => now(),
            ],
            [
                'name'        => 'San Juan y Martínez',
                'province_id' => 2,
                'created_at'  => now(),
            ],
            [
                'name'        => 'San Luis',
                'province_id' => 2,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Sandino',
                'province_id' => 2,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Viñales',
                'province_id' => 2,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Artemisa',
                'province_id' => 3,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Alquízar',
                'province_id' => 3,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Bauta',
                'province_id' => 3,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Caimito',
                'province_id' => 3,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Guanajay',
                'province_id' => 3,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Güira de Melena',
                'province_id' => 3,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Mariel',
                'province_id' => 3,
                'created_at'  => now(),
            ],
            [
                'name'        => 'San Antonio de los Baños',
                'province_id' => 3,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Bahía Honda',
                'province_id' => 3,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Candelaria',
                'province_id' => 3,
                'created_at'  => now(),
            ],
            [
                'name'        => 'San Cristóbal',
                'province_id' => 3,
                'created_at'  => now(),
            ],
            [
                'name'        => 'San José de las Lajas',
                'province_id' => 4,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Batabanó',
                'province_id' => 4,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Bejucal',
                'province_id' => 4,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Güines',
                'province_id' => 4,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Jaruco',
                'province_id' => 4,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Madruga',
                'province_id' => 4,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Melena del Sur',
                'province_id' => 4,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Nueva Paz',
                'province_id' => 4,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Quivicán',
                'province_id' => 4,
                'created_at'  => now(),
            ],
            [
                'name'        => 'San Nicolás de Bari',
                'province_id' => 4,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Santa Cruz del Norte',
                'province_id' => 4,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Matanzas',
                'province_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Calimete',
                'province_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Cárdenas',
                'province_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Ciénaga de Zapata',
                'province_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Colón',
                'province_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Jagüey Grande',
                'province_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Jovellanos',
                'province_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Limonar',
                'province_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Los Arabos',
                'province_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Martí',
                'province_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Pedro Betancourt',
                'province_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Perico',
                'province_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Unión de Reyes',
                'province_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Cienfuegos',
                'province_id' => 6,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Abreus',
                'province_id' => 6,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Cienfuegos',
                'province_id' => 6,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Abreus',
                'province_id' => 6,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Aguada de Pasajeros',
                'province_id' => 6,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Cruces',
                'province_id' => 6,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Cumanayagua',
                'province_id' => 6,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Palmira',
                'province_id' => 6,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Rodas',
                'province_id' => 6,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Santa Isabel de las Lajas',
                'province_id' => 6,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Santa Clara',
                'province_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Caibarien',
                'province_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Camajuaní',
                'province_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Cifuentes',
                'province_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Corralillo',
                'province_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Encrucijada',
                'province_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Manicaragua',
                'province_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Placetas',
                'province_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Quemado de Güines',
                'province_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Ranchuelo',
                'province_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Remedios',
                'province_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Sagua la Grande',
                'province_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Santo Domingo',
                'province_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Sancti Spíritus',
                'province_id' => 8,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Cabaiguán',
                'province_id' => 8,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Fomento',
                'province_id' => 8,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Jatibonico',
                'province_id' => 8,
                'created_at'  => now(),
            ],
            [
                'name'        => 'La Sierpe',
                'province_id' => 8,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Taguasco',
                'province_id' => 8,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Trinidad',
                'province_id' => 8,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Yaguajay',
                'province_id' => 8,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Ciego de Ávila',
                'province_id' => 9,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Ciro Redondo',
                'province_id' => 9,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Baraguá',
                'province_id' => 9,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Bolivia',
                'province_id' => 9,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Chambas',
                'province_id' => 9,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Florencia',
                'province_id' => 9,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Majagua',
                'province_id' => 9,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Morón',
                'province_id' => 9,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Primero de Enero',
                'province_id' => 9,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Venezuela',
                'province_id' => 9,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Camagüey',
                'province_id' => 10,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Carlos Manuel de Céspedes',
                'province_id' => 10,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Esmeralda',
                'province_id' => 10,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Florida',
                'province_id' => 10,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Guaimaro',
                'province_id' => 10,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Jimagüayú',
                'province_id' => 10,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Minas',
                'province_id' => 10,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Najasa',
                'province_id' => 10,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Nuevitas',
                'province_id' => 10,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Santa Cruz del Sur',
                'province_id' => 10,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Sibanicú',
                'province_id' => 10,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Sierra de Cubitas',
                'province_id' => 10,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Vertientes',
                'province_id' => 10,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Las Tunas',
                'province_id' => 11,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Amancio Rodríguez',
                'province_id' => 11,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Colombia',
                'province_id' => 11,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Jesús Menéndez',
                'province_id' => 11,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Jobabo',
                'province_id' => 11,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Majibacoa',
                'province_id' => 11,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Manatí',
                'province_id' => 11,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Puerto Padre',
                'province_id' => 11,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Holguín',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Antilla',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Báguanos',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Banes',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Cacocum',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Calixto García',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Cueto',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Frank País',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Gibara',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Mayarí',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Moa',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Rafael Freyre',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Sagua de Tánamo',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Urbano Noris',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Bayamo',
                'province_id' => 13,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Bartolomé Masó',
                'province_id' => 13,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Buey Arriba',
                'province_id' => 13,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Campechuela',
                'province_id' => 13,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Cauto Cristo',
                'province_id' => 13,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Guisa',
                'province_id' => 13,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Jiguaní',
                'province_id' => 13,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Manzanillo',
                'province_id' => 13,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Media Luna',
                'province_id' => 13,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Niquero',
                'province_id' => 13,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Pilón',
                'province_id' => 13,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Río Cauto',
                'province_id' => 13,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Yara',
                'province_id' => 13,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Santiago de Cuba',
                'province_id' => 14,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Contramaestre',
                'province_id' => 14,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Guamá',
                'province_id' => 14,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Julio Antonio Mella',
                'province_id' => 14,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Palma Soriano',
                'province_id' => 14,
                'created_at'  => now(),
            ],
            [
                'name'        => 'San Luis',
                'province_id' => 14,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Segundo Frente',
                'province_id' => 14,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Songo la Maya',
                'province_id' => 14,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Tercer Frente',
                'province_id' => 14,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Guantánamo',
                'province_id' => 15,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Baracoa',
                'province_id' => 15,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Caimanera',
                'province_id' => 15,
                'created_at'  => now(),
            ],
            [
                'name'        => 'El Salvador',
                'province_id' => 15,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Imías',
                'province_id' => 15,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Maisí',
                'province_id' => 15,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Manuel Tames',
                'province_id' => 15,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Niceto Pérez',
                'province_id' => 15,
                'created_at'  => now(),
            ],
            [
                'name'        => 'San Antonio del Sur',
                'province_id' => 15,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Yateras',
                'province_id' => 15,
                'created_at'  => now(),
            ],
        ];

        foreach ($rows as $row) {
            DB::table('municipalities')->insert($row);
        }
    }
}
