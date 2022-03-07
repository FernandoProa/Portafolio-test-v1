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
          'olyteam.png'
      ],
        [
            'DWIT',
            'dwit2.jpg'
        ],
        [
            'Impulsora MTP SAPI de SOFOM',
            'crediplus.png'
        ],
    ];
    public function run()
    {
        $businesses = $this->businesses;
        foreach($businesses as $business){
            Business::create([
               'name_es' => $business[0],
               'url_logo' => 'img/'. $business[1],

            ]);
        }
    }
}
