<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $fillable = ['question', 'desc_image1', 'image1_path', 'desc_image2', 'image2_path'];
}
