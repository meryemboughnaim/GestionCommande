<?php

namespace App\Models;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['labe','photo','description','price'];
    public function orderProduct()
    {
        return $this->hasMany(Order::class);
    }
}
