<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = [
        'amount',
        'food_id',
        'created_at',
    ];

    public function food()
    {
        return $this->belongsTo(Food::class, 'food_id');
    }
}
