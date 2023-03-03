<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Specialization;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Diseñador Web'
        ]);
        Category::create([
            'name' => 'Desarrollador Web'
        ]);
        Category::create([
            'name' => 'Community Manager'
        ]);
        Category::create([
            'name' => 'Social Media Manager'
        ]);

        Specialization::create([
            'name' => 'Diseño Visual',
            'category_id' => '1',
        ]);
        Specialization::create([
            'name' => 'Diseño UX',
            'category_id' => '2',
        ]);
        Specialization::create([
            'name' => 'Diseñador de Software',
            'category_id' => '3',
        ]);
        Specialization::create([
            'name' => 'Maquetador HTML',
            'category_id' => '2',
        ]);
        Specialization::create([
            'name' => 'JavaScript',
            'category_id' => '4',
        ]);
        Specialization::create([
            'name' => 'SEO, Markeing Digital y Redes Sociales',
            'category_id' => '1',
        ]);

    }
}
