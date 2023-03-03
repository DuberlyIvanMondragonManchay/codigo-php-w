<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BenefitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('benefits')->insert([
            ['icon' => 'fa-address-card', 'name' => 'Horario flexible'],
            ['icon' => 'fa-address-card', 'name' => 'Teléfono móvil'],
            ['icon' => 'fa-address-card', 'name' => 'Ayuda con la reubicación'],
            ['icon' => 'fa-address-card', 'name' => 'Vacaciones'],
            ['icon' => 'fa-address-card', 'name' => 'Accesible'],
            ['icon' => 'fa-address-card', 'name' => 'Buses de acercamiento'],
            ['icon' => 'fa-address-card', 'name' => 'Reparación de computadora'],
            ['icon' => 'fa-address-card', 'name' => 'Biblioteca digital'],
            ['icon' => 'fa-address-card', 'name' => 'Vestimenta informal'],
            ['icon' => 'fa-address-card', 'name' => 'Bonos de transporte'],
        ]);

        
        
        
        
        
        
        
        
        
         

    }
}
