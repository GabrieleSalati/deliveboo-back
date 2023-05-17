<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Illuminate\Support\Str;
class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','p_iva', 'restaurant_name','address','picture', 'categories'];

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

    public function getPictureUri() {
      if(!empty($this->picture)) {
        if(Str::startsWith($this->picture, 'http')) return $this->picture; 

        else return url('storage/' . $this->picture);
      }

      else return 'https://www.frosinonecalcio.com/wp-content/uploads/2021/09/default-placeholder.png';
    } 
}