<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    use HasFactory; 
    protected $fillable = [ 'num1', 'num2' , 'num3' , 'num4' , 'num5' , 'num6' , 'num7' , 'price' , 'seller' , 'prefix' , 'operator' , 'contact' , 'excel'];
    protected $table = 'bn_numbers';

    // public function scopeSearch($query , $prefix , $num1 , $num2 , $num3 , $num4 , $num5 , $num6 , $num7)
    // { 
    //     return $query->where('prefix', $prefix)
    //     ->orWhere('num1' , $num1)
    //     ->orWhere('num2' , $num2)
    //     ->orWhere('num3' , $num3)
    //     ->orWhere('num4' , $num4)
    //     ->orWhere('num5' , $num5)
    //     ->orWhere('num6' , $num6)
    //     ->orWhere('num7' , $num7);
    // }
    
}
