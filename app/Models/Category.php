<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function Food()
    {
      return $this->hasMany('App\Models\Food');
    }
    
    
    protected $fillable = [
        'name',
       
    ];
}
