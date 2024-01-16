<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            // "category_id" => "1" ,
            "product_type_id" => "1" ,
            "image" => 'storage/img/product/1.jpeg' ,
            "file" => 'path/' ,
            "order_by" => '1',
        ]);
        Product::create([
            // "category_id" => "1" ,
            "product_type_id" => "2" ,
            "image" => 'storage/img/product/2.jpeg' ,
            "file" => 'path/' ,
            "order_by" => '1',
        ]);
        Product::create([
            // "category_id" => "2" ,
            "product_type_id" => "3" ,
            "image" => 'storage/img/product/3.jpeg' ,
            "file" => 'path/' ,
            "order_by" => '1',
        ]);
        Product::create([
            // "category_id" => "2" ,
            "product_type_id" => "1" ,
            "image" => 'storage/img/product/4.jpeg' ,
            "file" => 'path/' ,
            "order_by" => '1',
        ]);

        Product::create([
            // "category_id" => "2" ,
            "product_type_id" => "1" ,
            "image" => 'storage/img/product/4.jpeg' ,
            "file" => 'path/' ,
            "order_by" => '1',
        ]);

        ProductTranslation::create([
            "locale" => 'en' ,
            "product_id" => "1" ,
            "name" => "Abecedin" ,
            "use" => "Decomb is indicated for use in corticosteroid responsive dermatoses complicated or threatened by secondary monilial and/or bacterial infections, such as:

                • Atopic dermatitis
                • Seborrheic dermatitis
                • Lichen simplex chronicus
                • Psoriasis (particularly of the face and body folds)
                • Allergic contact dermatitis

                Decomb cream permits use in moist intertrigenous areas.
                ",
            "how_to_use" => "The cream should be applied 2-3 times daily, with or without occlusive dressing."
        ]);
        ProductTranslation::create([
            "locale" => 'en' ,
            "product_id" => "2" ,
            "name" => "Fergole" ,
            "use" => '
            Decomb is indicated for use in corticosteroid responsive dermatoses complicated or threatened by secondary monilial and/or bacterial infections, such as:<br><br>
            <br>
            • Atopic dermatitis<br>
            <br>
            • Seborrheic dermatitis<br>
            <br>
            • Lichen simplex chronicus<br>
            <br>
            • Psoriasis (particularly of the face and body folds)<br>
            <br>
            • Allergic contact dermatitis<br><br>
            <br>

            Decomb cream permits use in moist intertrigenous areas'
            ,
            "how_to_use" => "The cream should be applied 2-3 times daily, with or without occlusive dressing."
        ]);
        ProductTranslation::create([
            "locale" => 'en' ,
            "product_id" => "3" ,
            "name" => "Decomb Cream",
            "use" => '
            Decomb is indicated for use in corticosteroid responsive dermatoses complicated or threatened by secondary monilial and/or bacterial infections, such as:<br><br>
            <br>
            • Atopic dermatitis<br>
            <br>
            • Seborrheic dermatitis<br>
            <br>
            • Lichen simplex chronicus<br>
            <br>
            • Psoriasis (particularly of the face and body folds)<br>
            <br>
            • Allergic contact dermatitis<br><br>
            <br>

            Decomb cream permits use in moist intertrigenous areas'
            ,
            "how_to_use" => "The cream should be applied 2-3 times daily, with or without occlusive dressing."

        ]);
        ProductTranslation::create([
            "locale" => 'en' ,
            "product_id" => "4" ,
            "name" => "Dilax Tab" ,
            "use" => '
            Decomb is indicated for use in corticosteroid responsive dermatoses complicated or threatened by secondary monilial and/or bacterial infections, such as:<br><br>
            <br>
            • Atopic dermatitis<br>
            <br>
            • Seborrheic dermatitis<br>
            <br>
            • Lichen simplex chronicus<br>
            <br>
            • Psoriasis (particularly of the face and body folds)<br>
            <br>
            • Allergic contact dermatitis<br><br>
            <br>

            Decomb cream permits use in moist intertrigenous areas'
            ,
            "how_to_use" => "The cream should be applied 2-3 times daily, with or without occlusive dressing."
        ]);
        ProductTranslation::create([
            "locale" => 'en' ,
            "product_id" => "5" ,
            "name" => "Dilax Tab" ,
            "use" => '
            Decomb is indicated for use in corticosteroid responsive dermatoses complicated or threatened by secondary monilial and/or bacterial infections, such as:<br><br>
            <br>
            • Atopic dermatitis<br>
            <br>
            • Seborrheic dermatitis<br>
            <br>
            • Lichen simplex chronicus<br>
            <br>
            • Psoriasis (particularly of the face and body folds)<br>
            <br>
            • Allergic contact dermatitis<br><br>
            <br>

            Decomb cream permits use in moist intertrigenous areas'
            ,
            "how_to_use" => "The cream should be applied 2-3 times daily, with or without occlusive dressing."
        ]);
    }
}
