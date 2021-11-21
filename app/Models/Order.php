<?php

namespace App\Models;
use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
     protected $fillable=['user_id','product_id','date_order','description'];
     public function products()
     {
         return $this->belongsTo(Product::class);
     }
     public function users()
     {
         return $this->belongsTo(User::class);
     }
}
