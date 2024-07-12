<?php

namespace Database\Seeders;

use App\Models\DiplomaCollege;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiplomaColleges extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = DiplomaCollege::insert(
        [
            [
                'name' => 'SRGP, Chakiya, Chandauli'
            ],
            [
                'name' => 'MP Polytechnic, Gorakhpur',
            ],
            [
                'name' => 'Lucknow Polytechnic, Lucknow',
            ]
        ]);

        return $data;
    }
}
