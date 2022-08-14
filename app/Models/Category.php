<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;

class Category extends Model
{
<<<<<<< HEAD
    public $table ="categories";
    public $primaryKey = 'id';
    public $fillable = ['name'];
=======
    public $table ="category";
    public $primaryKey = 'category_id';
    public $fillable = ['category_name'];
>>>>>>> 2f58b2851c556e39b7f119904f5b370085fb5203
    public $timestamps = false;

    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }

}