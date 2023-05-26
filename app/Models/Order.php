<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $fillable = ["guest_name", "email", "address", "telephone", "total_bill", "bill_no_shipping"];

    public function dishes()
    {
        return $this->belongsToMany(Dish::class)->withPivot('quantity');
    }
}