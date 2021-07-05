<?php

namespace Database\Seeders;

use App\Models\Todo;
use Carbon\Factory;
use Illuminate\Database\Seeder;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Todo::factory(7)->create();
    }
}
