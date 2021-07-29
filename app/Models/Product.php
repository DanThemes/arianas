<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'quantity',
        'price',
        'description',
        'image',
        'status',
        'featured',
    ];
    
    public function orders() {
        $this->belongsToMany(Order::class);
    }
}
