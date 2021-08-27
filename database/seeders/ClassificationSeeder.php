<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classifications')->insert([
            [
                'name' => 'Job Order',
            ],
            [
                'name' => 'Casual',
            ],
            [
                'name' => 'Honorarium',
            ],
            [
                'name' => 'Regular',
            ],
            [
                'name' => 'Elective',
            ],
            [
                'name' => 'Co-Terminus',
            ],
        ]);
    }
}
