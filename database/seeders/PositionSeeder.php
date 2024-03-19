<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = array(
            array(
                'name' => 'Board of Directors',
                'limit' => 3,
            ),
            array(
                'name' => 'Election Committee',
                'limit' => 3,
            ),
            array(
                'name' => 'Audit Committee',
                'limit' => 3,
            ),
        );
        DB::table('tbl_positions')->insert($users);
    }
}
