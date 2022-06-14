<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 11; $i++)
            DB::table('products')->insert([
                'title'=>'product'.$i,
                'cost'=>rand(1,100),
                'instock'=>'products 1',
                'instockboolean'=>'1',
                'brand'=>'adidas',
                'condition'=>'new',

            ]);
    }
}
