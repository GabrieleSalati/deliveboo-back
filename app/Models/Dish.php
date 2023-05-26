<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Dish extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','price','restaurant_id','picture','visible'];
  

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
    
    public function getPictureUri() {
      if(!empty($this->picture)) {
        if(Str::startsWith($this->picture, 'http')) return $this->picture; 
        else return url('storage/' . $this->picture);
      }
      else return 'https://www.frosinonecalcio.com/wp-content/uploads/2021/09/default-placeholder.png';
    } 
}