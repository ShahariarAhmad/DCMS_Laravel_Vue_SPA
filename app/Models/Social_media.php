<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social_media extends Model
{
    use HasFactory;
    protected $fillable = ['f_link','y_link','l_link'];

}
