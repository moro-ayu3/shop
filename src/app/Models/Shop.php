<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_name',
        'area_id',
        'genre_id'
    ];

    public function area()
    {
        return $this->BelongsTo(Area::class);
    }

    public function genre()
    {
        return $this->BelongsTo(Genre::class);
    }

    public function reserve()
    {
        return $this->BelongsTo(Reserve::class);
    }
    

    public function scopeAreaSearch($query, $area_id)
    {
       if (!empty($area_id)) {
       $query->where('area_id', $area_id);
       }
    }

    public function scopeGenreSearch($query, $genre_id)
    {
       if (!empty($genre_id)) {
       $query->where('genre_id', $genre_id);
       }
    }

    public function scopeKeywordSearch($query, $keyword)
    {
       if (!empty($keyword)) {
       $query->where('shop_name', 'like', '%' . $keyword . '%');
       }
    }
}
