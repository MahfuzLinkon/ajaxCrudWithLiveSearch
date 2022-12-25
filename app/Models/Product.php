<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
    ];

    public static function productUpdateOrCreate($request, $id =null){
        Product::updateOrCreate(['id'=> $id],[
            'name' => $request->name,
            'price' => $request->price,
        ]);
    }


}
