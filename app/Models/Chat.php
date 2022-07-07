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
        'chat',
        'travel_id',
    ];
    public function from(){
        return $this->belongsTo(User::class,'from_id');
    }
    public function to(){
        return $this->belongsTo(User::class,'to_id');
    }
    public function customer(){
        return $this->belongsTo(User::class,'customer_id');
    }
    public function travel(){
        return $this->belongsTo(Travel::class);
    }
}
