<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert([
            'name' => 'Admin',
            'description' => 'Admin will have all rights.',
            'order' => 1
        ]);

        DB::table('user_types')->insert([
            'name' => 'Employee',
            'description' => 'Admin will have limited rights.',
            'order' => 2
        ]);

        DB::table('user_types')->insert([
            'name' => 'Guest',
            'description' => 'Welcome rights.',
            'order' => 3
        ]);
    }
}
