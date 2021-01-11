<?php

namespace Database\Seeders;

use App\Models\CommJobsBoard;
use Illuminate\Database\Seeder;

class CommJobsBoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CommJobsBoard::factory()->count(10)->create();

    }
}
