<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'image',
    ];
    public function province(){
        return $this->belongsTo(Province::class);
    }
    public function users(){
        return $this->hasMany(User::class);
    }
    public function travel(){
        return $this->hasOne(Travel::class);
    }
    public function image(){
        if($this->image){
            return asset('/media/city/'.$this->image);
        }
        return false;
    }
}
