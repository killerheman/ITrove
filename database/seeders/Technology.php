<?php

namespace Database\Seeders;

use App\Models\Technology as ModelsTechnology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Technology extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ModelsTechnology::insert([[
            'name' => 'C'
        ],
        [
            'name' => 'PHP',
        ],
        [
            'name' => 'PHP with Laravel',
        ],
        [
            'name' => '.NET Technology',
        ],
        [
            'name' => 'Java',
        ]]);

        return $data;
    }
}
