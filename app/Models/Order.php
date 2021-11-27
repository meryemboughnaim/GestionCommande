<?php

namespace App\Models;
use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
     protected $fillable=['description','date_order','product_id','user_id'];
     public function products()
     {
         return $this->belongsTo(Product::class);
     }
     public function users()
     {
         return $this->belongsTo(User::class);
     }
}
