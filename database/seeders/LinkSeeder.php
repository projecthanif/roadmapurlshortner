<?php

namespace Database\Seeders;

use App\Models\Link;
use Database\Factories\LinkFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Link::factory(10)->create();
    }
}
