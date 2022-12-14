<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class About extends Model
{
    use HasFactory;
    protected $guarded = ['id'];



      /**
     * Interact with the user's address.
     *
     * @return  \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function profileImg(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => '/images/about/' . $value,

        );
    }

    
    protected function serviceImg(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => '/images/service/' . $value,
        
        );
    }
}