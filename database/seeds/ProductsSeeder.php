<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Sukuma Wiki',
                'imagePath'=> 'sukumawiki.png',
                'subcategory_id'=>1,
                'price'=> 50,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Spinach',
                'imagePath'=> 'spinach.png',
                'subcategory_id'=>1,
                'price'=> 50,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Broccoli',
                'imagePath'=> 'broccoli.jpg',
                'subcategory_id'=>1,
                'price'=> 70,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Potatoes (1kg)',
                'imagePath'=> 'potato.png',
                'subcategory_id'=>2,
                'price'=> 200,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Oranges(6 pack)',
                'imagePath'=> 'oranges.png',
                'subcategory_id'=>4,
                'price'=> 60,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Strawberries',
                'imagePath'=> 'strawberry.jpg',
                'subcategory_id'=>5,
                'price'=> 180,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Apples(6 pack)',
                'imagePath'=> 'apples.jpg',
                'subcategory_id'=>6,
                'price'=> 200,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Eggs(15 pack)',
                'imagePath'=> 'eggs.png',
                'subcategory_id'=>7,
                'price'=> 250,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'name' => 'Peas(1 kg)',
                'imagePath'=> 'peas.png',
                'subcategory_id'=>11,
                'price'=> 250,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],


        ]);
    }
}
