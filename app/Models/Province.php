<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable=[
        'image'
    ];

    public function cities(){
        return $this->hasMany(City::class);
    }
    public function users(){
        return $this->hasMany(User::class);
    }
    public function travel(){
        return $this->hasOne(Travel::class);
    }
    public function adventure(){
        return $this->hasOne(Adventure::class);
    }
    public function image(){
        if($this->image){
            return asset('/media/province/'.$this->image);
        }
        return false;
    }
}
