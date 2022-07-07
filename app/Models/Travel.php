<?php

namespace App\Models;

use App\Models\Chat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Travel extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',//سازنده سفر
        'host_id',//میزبان انتخاب شده
        'city_id',//شهر مقصد
        'province_id',//  استان مقصد
        'start',//تاریخ شروع سفر
        'end',//تاریخ پایان  سفر
        'gender',// جنسیت همراهان
        'count',// تعداد همراهان
        'active',// فعال
        'confirm',// تایید توسط ادمین
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function province(){
        return $this->belongsTo(Province::class);
    }
    public function host(){
        return $this->belongsTo(User::class ,'host_id');
    }
    public function chats(){
        return $this->hasMany(Chat::class);
    }
}
