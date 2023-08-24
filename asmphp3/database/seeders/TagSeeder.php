<?php

namespace Database\Seeders;
 use App\Models\tag;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        tag::factory(10000)->create();
    }
}
