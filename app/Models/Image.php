<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'imageable_id',
        'imageable_type',
        'image',
    ];

    public function imageable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }



    public function image()
    {
        $folder='';
        if($this->image){
            switch($this->imageable_type){
                case 'App\Models\Adventure':
                    $folder='adventure';
                    break;
            }
            return asset("/media/$folder/".$this->image);
        }
        return '';
    }
}
