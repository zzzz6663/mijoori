<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $fillable = [
        'from_id',
        'to_id',
        're_id',
        'type',
        'file',
        'seen',
        're_ichatd',
    ];
}
