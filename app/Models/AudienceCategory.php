<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AudienceCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'minimum_age_limit',
        'icon'
    ];
}
