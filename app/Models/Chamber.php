<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Chamber extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    protected function imgUrl(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => '/images/chambers/' . $value,
            // set: fn ($value) => 'asdasd'.$value,
        );
    }
}
