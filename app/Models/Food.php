<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
  public function Resarvation()
  {
    return $this->hasMany('App\Models\Resarvation');
  }
    public function Category()
    {
      return $this->belongsTo(Category::class, 'id_category');
    }
    use HasFactory;
    protected $fillable = [
      
       'name',
       'description',
       'price',
       'id_category',
       'image',
       'reduction',
    ];
}
