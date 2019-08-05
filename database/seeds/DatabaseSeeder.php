<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'first_name' => 'Mishu',
            'last_name' => 'Das',
        ]);
        DB::table('students')->insert([
            'first_name' => 'Andrew',
            'last_name' => 'Koushik',
        ]);
        DB::table('students')->insert([
            'first_name' => 'Sanjoy',
            'last_name' => 'Dhar',
        ]);
        DB::table('students')->insert([
            'first_name' => 'Tuhin',
            'last_name' => 'Debnath',
        ]);
        DB::table('students')->insert([
            'first_name' => 'Shoikat',
            'last_name' => 'Das',
        ]);
        DB::table('students')->insert([
            'first_name' => 'Dip',
            'last_name' => 'Podder',
        ]);
        DB::table('students')->insert([
            'first_name' => 'Chandra',
            'last_name' => 'Banik',
        ]);
        DB::table('students')->insert([
            'first_name' => 'Arpan',
            'last_name' => 'Gupta',
        ]);
        DB::table('students')->insert([
            'first_name' => 'Rahmat',
            'last_name' => 'Ullah',
        ]);
        DB::table('students')->insert([
            'first_name' => 'Mrityunjoy',
            'last_name' => 'Das',
        ]);
        DB::table('students')->insert([
            'first_name' => 'Ovi',
            'last_name' => 'Das',
        ]);
        DB::table('students')->insert([
            'first_name' => 'Srithy',
            'last_name' => 'Nath',
        ]);
        DB::table('students')->insert([
            'first_name' => 'Shubho',
            'last_name' => 'Banik',
        ]);
    }
}
