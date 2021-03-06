<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<5; $i++){
            DB::table('products')->insert([
                "title"=>$faker->name,
                "category_id"=>$faker->numberBetween(1,2),
                "image"=>"images/demo.png",
                "old_price"=>400000,
                "new_price"=>200000,
                "description"=>$faker->name,

            ]);
            }
            for($i=0; $i<5; $i++){
                DB::table('products')->insert([
                    "title"=>$faker->name,
                    "category_id"=>$faker->numberBetween(1,2),
                    "image"=>"images/demo.png",
                    "old_price"=>500000,
                    "new_price"=>299000,
                    "description"=>$faker->name,
    
                ]);
                }
    }
}
