<?php

namespace Database\Seeders;

use App\Models\TechCategory;
use App\Models\Technology;
use Illuminate\Database\Seeder;

class TechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public  $technologies = [
        [
            'PHP',
            'Programming languages',
            'php-logo2.png'
        ],
        [
            'SQL',
            'Programming languages',
            'sql-language.png'
        ],
        [
            'JavaScript',
            'Programming languages',
            'js.png'
        ],
        [
            'TypeScript',
            'Programming languages',
            'ts.png'
        ],
        [
            'Bootstrap',
            'Frameworks',
            'bootstrap-logo.png'
        ],
        [
            'Tailwind',
            'Frameworks',
            'Tailwind_CSS_Logo.svg.png'
        ],
        [
            'Laravel',
            'Frameworks',
            'laravel-logo.png'
        ],
        [
            'VueJS',
            'Frameworks',
            'vuejs-logo.png'
        ],
        [
            'AWS',
            'Tools',
            'aws.png'
        ],
        [
            'CPanel & WHM',
            'Tools',
            'whm-cpanel.png'
        ],
        [
            'Linux',
            'Tools',
            'linux.png'
        ],
        [
            'Git',
            'Tools',
            'git.png'
        ],
        [
            'Phpstorm',
            'Tools',
            'phpstorm.png'
        ],
        [
            'VSCode',
            'Tools',
            'vscode.png'
        ],
    ];
    public function run()
    {
        $technologies = $this->technologies;
        foreach($technologies as $technology){
            $id = TechCategory::where('name_en',$technology[1])->select('id')->first();
            Technology::create([
               'name_es' => $technology[0],
               'name_en' => $technology[0],
                'techcategory_id' => $id->id ?? 1,
                'url_logo' => 'img/'.$technology[2]

            ]);
        }
    }
}
