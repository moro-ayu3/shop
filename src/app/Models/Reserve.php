<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'test_id',
        'date',
        'time',
        'number'
    ];

    public function test()
    {
        return $this->hasMany(Test::class);
    }

    public function shop()
    {
        return $this->hasMany(Shop::class);
    }
}
