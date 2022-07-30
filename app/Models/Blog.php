<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function user()
    {
        return $this->belongsTo(User::class);
    }

    function categories()
    {
        return $this->hasMany(blog_category::class);
    }

    /**
     * Interact with the user's address.
     *
     * @return  \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function imgUrl(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => env('APP_URL') . '/images/articles/' . $value,
            // set: fn ($value) => 'asdasd'.$value,
        );
    }
}
