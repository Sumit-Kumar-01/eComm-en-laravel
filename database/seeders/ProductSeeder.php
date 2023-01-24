<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([

            [
                'name'=> 'Samsung Mobile',
                'price'=> '500',
                'description'=> 'A Smart Phone with 16 gb ram and nuch more features',
                'category'=> 'mobile',
                'gallery'=> 'https://opsg-img-cdn-gl.heytapimg.com/epb/202208/12/yaLTfAr8gBl8C8bm.png?x-amz-process=image/format,webp/quality,Q_80',
                
            ],
            [
                'name'=> 'LG Smart Tv',
                'price'=> '6000',
                'description'=> 'A Smart Tv with 4 gb ram and nuch more features',
                'category'=> 'tv',
                'gallery'=> 'https://opsg-img-cdn-gl.heytapimg.com/epb/202208/12/yaLTfAr8gBl8C8bm.png?x-amz-process=image/format,webp/quality,Q_80',
                
            ],
            [
                'name'=> 'Sony Tv',
                'price'=> '900',
                'description'=> 'A Smart tv with 4 gb ram and nuch more features',
                'category'=> 'tv',
                'gallery'=> 'https://cdn.shopify.com/s/files/1/0301/2263/9499/products/01-X95K-logo-final_1024x1024@2x.jpg?v=1659701347',
                
            ],
            [
                'name'=> 'LG fridge',
                'price'=> '1200',
                'description'=> 'A Smart fridge with  nuch more features',
                'category'=> 'fridge',
                'gallery'=> 'https://pngtree.com/freepng/realistic-modern-kitchen-refrigerators_7943132.html',
                
            ]
        ]);

    }
}
