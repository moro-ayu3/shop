<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'score'
    ];

    public function user()
    {
        return $this->BelongsTo(User::class);
    }

    public function reserve()
    {
        return $this->BelongsTo(Reserve::class);
    }
}
