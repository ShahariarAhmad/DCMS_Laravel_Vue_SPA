<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Event extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function galleries()
    {
        return $this->belongsTo(Gallery::class);
    }
    protected function imgUrl(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => '/images/events/' . $value,
            // set: fn ($value) => 'asdasd'.$value,
        );
    }
}
