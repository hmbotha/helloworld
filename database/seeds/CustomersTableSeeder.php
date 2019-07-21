<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'name' => 'Paul',
            'telephone' => '123456'
        ]);
        DB::table('customers')->insert([
            'name' => 'Frank',
            'telephone' => '15555456'
        ]);
    }
}
