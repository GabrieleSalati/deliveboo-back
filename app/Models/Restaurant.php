<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Restaurant extends Model
{
    use HasFactory;

 protected $fillable = [
        'user_id', 'p_iva', 'restaurant_name', 'restaurant_name','address','picture '];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function dishes() {
        return $this->hasMany(Dish::class);
    }

    public function getImageUri() {
        return $this->image ? url('storage/' . $this->image) : 'https://www.frosinonecalcio.com/wp-content/uploads/2021/09/default-placeholder.png';
    }

    
}