<?php

namespace Database\Seeders;

use App\Models\ProductImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductImage::create([
            "product_id" =>  '1' ,
            "image_sm" =>  "storage/img/product/explore_sm_1.jpeg",
            "image_lg" =>  "storage/img/product/explore_lg_1.jpeg",
            "order_by" => "1"
        ]);
        ProductImage::create([
            "product_id" =>  '1' ,
            "image_sm" =>  "storage/img/product/explore_sm_2.jpeg",
            "image_lg" =>  "storage/img/product/explore_lg_2.jpeg",
            "order_by" => "2"
        ]);
        ProductImage::create([
            "product_id" =>  '1' ,
            "image_sm" =>  "storage/img/product/explore_sm_3.jpeg",
            "image_lg" =>  "storage/img/product/explore_lg_3.jpeg",
            "order_by" => "3"
        ]);

        ProductImage::create([
            "product_id" =>  '2' ,
            "image_sm" =>  "storage/img/product/explore_sm_3.jpeg",
            "image_lg" =>  "storage/img/product/explore_lg_3.jpeg",
            "order_by" => "3"
        ]);
        ProductImage::create([
            "product_id" =>  '2' ,
            "image_sm" =>  "storage/img/product/explore_sm_3.jpeg",
            "image_lg" =>  "storage/img/product/explore_lg_3.jpeg",
            "order_by" => "3"
        ]);
    }
}
