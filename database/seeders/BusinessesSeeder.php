<?php

namespace Database\Seeders;

use App\Models\Business;
use Illuminate\Database\Seeder;

class BusinessesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $businesses = [
      [
          'OlyTeam',
          'olyteam.png',
          'mayo - 2020',
          'Presente'
      ],
        [
            'DWIT',
            'dwit2.jpg',
            'enero - 2022',
            'Presente'
        ],
        [
            'Impulsora MTP SAPI de SOFOM',
            'crediplus.png',
            'enero - 2021',
            'noviembre - 2021'
        ],
    ];
    public function run()
    {
        $businesses = $this->businesses;
        foreach($businesses as $business){
            Business::create([
               'name_es' => $business[0],
               'url_logo' => 'img/'. $business[1],
                'date_start' => $business[2],
                'date_end' => $business[3],

            ]);
        }
    }
}
