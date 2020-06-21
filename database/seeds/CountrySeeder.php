<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            [
                'country' => 'Argentina',
            ], [
                'plan' => 'Brasil',
            ],
            [
                'plan' => 'Paraguay',
            ],
            [
                'plan' => 'Peru',
            ],
            [
                'plan' => 'Bolivia',
            ],
            [
                'plan' => 'Uruguay',
            ],
            [
                'plan' => 'Chile',
            ], 
            [
                'plan' => 'Colombia',
            ],
            [
                'plan' => 'Ecuador',
            ],
            [
                'plan' => 'Mexico',
            ],
            [
                'plan' => 'España',
            ],

        ]);
    }
}
