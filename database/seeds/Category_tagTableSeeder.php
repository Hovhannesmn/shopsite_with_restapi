<?php

use Illuminate\Database\Seeder;

class Category_tagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for ($i = 1; $i <= 19; $i++) {
            \DB::table('product_tag')->insert([

                'tag_id' => rand(1, 4),
                'product_id' => $i,

            ]);

        }
    }
}
