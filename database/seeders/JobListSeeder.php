<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobList;

class JobListSeeder extends Seeder
{
    public function run(): void
    {
        JobList::factory()->count(25)->create();
    }
}
