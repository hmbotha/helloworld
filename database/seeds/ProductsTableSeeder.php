<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'WidgetA',
            'price' => 5,
            'customer_id' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'WidgetB',
            'price' => 1,
            'customer_id' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'WidgetA',
            'price' => 5,
            'customer_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'WidgetB',
            'price' => 1,
            'customer_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'WidgetC',
            'price' => 1,
            'customer_id' => 2
        ]);
    }
}
