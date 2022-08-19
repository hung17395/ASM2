<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Category;

class Detail extends Model
{
    use HasFactory;
    protected $fillable = ['title','price','description','image','id','updated_at', 'created_at'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    protected $table = 'products';

    protected $primaryKey = 'id';
}
