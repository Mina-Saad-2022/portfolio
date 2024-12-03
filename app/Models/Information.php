<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'email',
        'phone',
        'address',
        'github',
        'facebook',
        'whatsapp',
        'instagram',
        'pdf',
    ];
}