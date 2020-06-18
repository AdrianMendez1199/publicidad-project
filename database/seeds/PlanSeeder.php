<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            [
                'plan' => 'outstanding',
                'price' => 40
            ], [
                'plan' => 'stander',
                'price' => 10
            ],
        ]);
    }
}
