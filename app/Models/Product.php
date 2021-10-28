<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $casts = ['price' => 'array'];

    public function getCategories() {
        return $this->hasMany('App\Models\Category','id','cat_ID')->first();
    }

}
