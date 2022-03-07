<?php

namespace Database\Seeders;

use App\Models\TechCategory;
use Illuminate\Database\Seeder;

class TechCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'Lenguajes de programación',
                'Programming languages',
            ],
            [
                'Frameworks',
                'Frameworks',

            ],
            [
                'Herramientas',
                'Tools',
            ],

        ];
        foreach ($categories as $category) {
            TechCategory::create([
                'name_es' => $category[0],
                'name_en' => $category[1] ?? '',
            ]);
        }
    }
}
