<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    protected $table = "cars";

    protected $fillable = [
        'name',
        'description',
        'plate'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'datetime:Y:m:d'
    ];
}
