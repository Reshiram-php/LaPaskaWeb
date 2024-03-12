<?php

namespace Database\Seeders;

use App\Models\Estados;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Estados::create(['estado'=>'en refugio']);
       Estados::create(['estado'=>'adoptado']);
       Estados::create(['estado'=>'fallecido']);
    }
}
