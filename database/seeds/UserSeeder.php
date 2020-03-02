<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'       => "Admin",
                'email'      => "admin@email.com",
                'password'   => '$2y$10$ZAc4myMLUXfWj3swSzTYi.By4mh9tuVQnd1iLzcWChzt2JYoliW3S', // password
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
