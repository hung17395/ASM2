<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;

class Category extends Model
{
    public $table ="categories";
    public $primaryKey = 'id';
    public $fillable = ['name'];
    public $timestamps = false;

    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }

}