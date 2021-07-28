<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restrurent\Restrurent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RestrurentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('restrurents')->insert([
        //     'name' => Str::random(6),
        //     'phone' => '01' . Str::random(9),
        //     'address' => 'dhaka',
        //     'manager_id' => '1',
        // ]);
    }
}
