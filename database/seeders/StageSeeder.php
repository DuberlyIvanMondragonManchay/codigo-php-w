<?php

namespace Database\Seeders;

use App\Models\Stage;
use Illuminate\Database\Seeder;

class StageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stage::create([
            'title' => 'Cvs'
        ]);
        Stage::create([
            'title' => 'Screening Telefónico'
        ]);
        Stage::create([
            'title' => 'Test Psicolaborales '
        ]);
        Stage::create([
            'title' => 'Entrevistas RRHH '
        ]);
        Stage::create([
            'title' => 'Referencias'
        ]);
        Stage::create([
            'title' => 'Finalistas'
        ]);
        Stage::create([
            'title' => 'Contratados'
        ]);
    }
}
