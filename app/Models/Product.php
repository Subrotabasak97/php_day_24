<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static function  getAllProduct()
    {
        return [
            0 => [
                'id' => '1',
                'name' => 'T-shirt',
                'price' => '200',
                'description' => 'good product',
                'image' => asset('/img/shirt.png'),
            ],
            1 => [
                'id' => '2',
                'name' => 'Pant',
                'price' => '400',
                'description' => 'good product',
                'image' => asset('/img/pant.png'),
            ],
            2 => [
                'id' => '3',
                'name' => 'hoddie',
                'price' => '500',
                'description' => 'good product',
                'image' => asset('/img/hoodie.png'),
            ],
        ];
    }

}
