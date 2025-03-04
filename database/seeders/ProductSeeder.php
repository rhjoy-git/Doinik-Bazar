<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                "name" => "Modern Leather Sofa",
                "image" => "resources/images/kitchen.png",
                "images" => json_encode([
                    "resources/images/living-room1.png",
                    "resources/images/living-room2.png",
                    "resources/images/sofa-side.png",
                    "resources/images/sofa-top.png"
                ]),
                "price" => 799.99,
                "discount_price" => 950.00,
                "rating" => 4.5,
                "review_count" => 245,
                "description" => "A luxurious leather sofa designed for modern interiors...",
                "availability" => "In Stock",
                "brand" => "FurniLux",
                "category" => "Sofa",
                "sku" => "MLSOFA123",
                "sizes" => json_encode(["M", "L"]),
                "colors" => json_encode(["#654321", "#C0C0C0", "#000000"]),
                "material" => "Genuine Leather",
                "weight" => "60 Kg"
            ],
            [
                "name" => "Ergonomic Office Chair",
                "image" => "resources/images/product-sofa.png",
                "images" => json_encode([
                    "resources/images/chair-back.png",
                    "resources/images/chair-side.png",
                    "resources/images/chair-armrest.png"
                ]),
                "price" => 249.99,
                "discount_price" => 299.99,
                "rating" => 4.2,
                "review_count" => 310,
                "description" => "Designed for comfort, this ergonomic chair is perfect for office spaces...",
                "availability" => "In Stock",
                "brand" => "ErgoSeating",
                "category" => "Chair",
                "sku" => "OFFCHAIR456",
                "sizes" => json_encode(["Standard", "Adjustable"]),
                "colors" => json_encode(["#000000", "#333333", "#888888"]),
                "material" => "Mesh & Steel",
                "weight" => "25 Kg"
            ],
            [
                "name" => "Minimalist Wooden Dining Table",
                "image" => "resources/images/product-chair.png",
                "images" => json_encode([
                    "resources/images/table-top.png",
                    "resources/images/table-leg.png"
                ]),
                "price" => 499.00,
                "discount_price" => 599.00,
                "rating" => 4.7,
                "review_count" => 180,
                "description" => "A stylish wooden dining table with a minimalist design...",
                "availability" => "Limited Stock",
                "brand" => "WoodCraft",
                "category" => "Table",
                "sku" => "WOODTABL789",
                "sizes" => json_encode(["Standard", "Large"]),
                "colors" => json_encode(["#8B4513", "#A0522D"]),
                "material" => "Solid Oak Wood",
                "weight" => "40 Kg"
            ],
            [
                "name" => "Luxury King Size Bed",
                "image" => "resources/images/product-bigsofa.png",
                "images" => json_encode([
                    "resources/images/bedside.png",
                    "resources/images/headboard.png",
                    "resources/images/mattress.png"
                ]),
                "price" => 1200.00,
                "discount_price" => 1350.00,
                "rating" => 4.8,
                "review_count" => 500,
                "description" => "A comfortable king-size bed with premium mattress...",
                "availability" => "Pre-order",
                "brand" => "SleepWell",
                "category" => "Bed",
                "sku" => "KINGBED101",
                "sizes" => json_encode(["King", "Queen"]),
                "colors" => json_encode(["#FFFFFF", "#B0C4DE"]),
                "material" => "Memory Foam & Wood",
                "weight" => "75 Kg"
            ],
            [
                "name" => "Glass Coffee Table",
                "image" => "resources/images/product-table.png",
                "images" => json_encode([
                    "resources/images/table-glass-top.png",
                    "resources/images/table-metal-legs.png"
                ]),
                "price" => 320.00,
                "discount_price" => 399.00,
                "rating" => 4.6,
                "review_count" => 210,
                "description" => "A stylish glass coffee table with metal legs...",
                "availability" => "In Stock",
                "brand" => "ElegantHome",
                "category" => "Table",
                "sku" => "GLSTABLE202",
                "sizes" => json_encode(["Small", "Medium"]),
                "colors" => json_encode(["#D3D3D3", "#808080"]),
                "material" => "Glass & Metal",
                "weight" => "30 Kg"
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}