<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Banner extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function galleries()
    {
        return $this->belongsTo(Gallery::class);
    }


    protected function bgImage(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => env('APP_URL') . '/images/banner/home/' . $value,
        
        );
    }
}
