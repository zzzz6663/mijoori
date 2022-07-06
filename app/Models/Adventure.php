<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Adventure extends Model
{
    use HasFactory;
    protected  $fillable=[
        'user_id',//سازنده ماجراجویی
        'cat',//دسته بندی
        'hardness',//میزان سختی
        'members',//تعداد شرکت کننده
        'city_id',//شهر مقصد
        'title',//عنوان
        'short',//خلاصه
        'action_include',//فعالیت هایی که در بردارد
        'action_not_include',//فعالیت هایی که در بر ندارد
        'location',//محل
        'period',//مدت زمان
        'type_period',// نوع مدت زمان  ساعت یا روز
        'time_period',// مقدار زمان
        'price',// قیمت
        'confirm',// تایید ادمین
        'facility',// امکانات
        'benefit',// برتری ها
        'info',// توضیحات بیشتر
        'more',// اطلاعات
        'return_mony',//نحوه برگشت پول
        'stage',//مرحله فرم که سه مرحله میباشد
        'place',//محل قرار
        'address',//آدرس
        'Latitude',//طول جغرافیایی
        'Longitude',//عرض جغرافیایی
        'plan',//برنامه سفر
        'stage',//مرحله
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
    public function image()
    {
        if($this->images()->first()){
            return asset('/media/adventure/'.$this->images()->first()->image);
        }
        return '';
    }
}

