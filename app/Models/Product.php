<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

class Product extends Model
{
    // use HasFactory;
<<<<<<< HEAD
    protected $fillable = ['title','price','description','image','id','updated_at', 'created_at'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    protected $table = 'products';

    protected $primaryKey = 'id';
=======
    protected $fillable = ['title','price','description','image','category_id','updated_at', 'created_at'];
    // public function category(){
    //     return $this->belongsTo(Category::class);
    // }
    protected $table = 'product';
>>>>>>> 2f58b2851c556e39b7f119904f5b370085fb5203

    protected $primaryKey = 'id';

    public function category()
    {
        return $this->belongsTo('App\Models\Category','id');
    }
}