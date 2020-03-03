<?php

use Illuminate\Database\Seeder;

class GiftCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gift_cards')->insert([
            [
                'name'        => "Black Pink",
                'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.",
                'price'       => "500",
                'quantity'    => "100",
                'points'      => "2",
                'expiration'  => "2020-12-03 05:33:40",
                'status'      => "true",
                'created_at'  => "2020-03-03 05:33:42",
                'updated_at'  => "2020-03-03 11:51:04",
            ],
            [
                'name'        => 'Black White',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.',
                'price'       => '100',
                'quantity'    => '100',
                'points'      => '2',
                'expiration'  => '2020-12-03 05:33:40',
                'status'      => 'true',
                'created_at'  => '2020-03-03 05:33:42',
                'updated_at'  => '2020-03-03 13:59:24',
            ],
            [
                'name'        => 'Black Teal',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.',
                'price'       => '100',
                'quantity'    => '100',
                'points'      => '2',
                'expiration'  => '2020-12-03 05:33:40',
                'status'      => 'true',
                'created_at'  => '2020-03-03 05:33:42',
                'updated_at'  => '2020-03-03 13:55:59',
            ],
            [
                'name'        => 'Black Black',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.',
                'price'       => '100',
                'quantity'    => '100',
                'points'      => '2',
                'expiration'  => '2020-12-03 05:33:40',
                'status'      => 'true',
                'created_at'  => '2020-03-03 05:33:42',
                'updated_at'  => '2020-03-03 14:43:31',
            ]
        ]);
    }
}
