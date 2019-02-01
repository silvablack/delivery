<?php

use Illuminate\Database\Seeder;
use App\Foods;
class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncate table foods
        Foods::truncate();

        // insert data in foods table
        Foods::create([
            'name' => 'BurguerBig GG',
            'materials' => '3x Blend 120g, Pão brioche, alface, cebola caramelizada, 2x bacon e 2x ovos',
            'price' => 22.00,
            'type' => 'main'
        ]);
    }
}
