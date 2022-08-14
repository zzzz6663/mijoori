<?php

namespace App\Models;

use Carbon\Carbon;
use NumberFormatter;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable ,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'family',
        'email',
        'level',
        'password',
        'verify',
        'mobile',
        'complete_register',
        'province_id',
        'city_id',
        'gender',
        'avatar',
        'guid',//وضعیت راهنما که صفر یعنی راهنما نیست
        'code',//کدملی
        'address',//
        'shaba',//
        'b_date',//تاریخ تولد
        'melli_front',//عکس جلوی کارت ملی
        'melli_back',//عکس پشت کارت ملی
        'tourism',//عکس کارت گردشکری
        'p_avatar',//تصویر پرسنلی
        'active',//تایید راهنما
        'instagram',//
        'about',//
        'tell',//
        'give_sms',//
        'give_email',//

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function to_message(){
        return $this->HasMany(Chat::class,'to_id');
    }
    public function from_message(){
        return $this->HasMany(Chat::class,'from_id');
    }

    public function city(){
        return $this->belongsTo(City::class);
    }
    public function province(){
        return $this->belongsTo(Province::class);
    }
    public function host_travels(){
        return $this->hasMany(Travel::class,'host_id');
    }
    public function travels(){
        return $this->hasMany(Travel::class);
    }
    public function adventures(){
        return $this->hasMany(Adventure::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }


    public function avatar($type=null){
        if($this->avatar){
            return asset("/media/avatar/$type".$this->avatar);
        }
        return '';
    }



    public function melli_back(){
        if($this->melli_back){
            return asset('/media/melli_back/'.$this->melli_back);
        }
        return '';
    }
    public function melli_front(){
        if($this->melli_front){
            return asset('/media/melli_front/'.$this->melli_front);
        }
        return '';
    }
    public function tourism(){
        if($this->tourism){
            return asset('/media/tourism/'.$this->tourism);
        }
        return '';
    }


    public function gender(){
        if($this->gender){
            return $this->gender=='male'?'مرد':'زن';
        }
        return '';
    }
    public function fdate($date,$format=false){
        if($date && $format){
            return  \Morilog\Jalali\Jalalian::forge($date)->format($format);
        }
        if($date ){
            return  \Morilog\Jalali\Jalalian::forge($date);
        }
        return '';
    }











    public function related_travel(){
        if($this->guid && $this->active){
            $travels= Travel::where('city_id',$this->city->id)->whereConfirm('1')->whereGender($this->gender)->where('start','>=',Carbon::now())->latest()->get();
        //    $travels= Travel::where('city_id',$this->city_id)->whereDate('start', '<', Carbon::now())->get();
            return $travels;
        }
        return false;

    }

    public function comments_count(){
        return $this->host_travels()->where('comment','!=',null)->where('host_accept','1')->latest();
    }
    public function rates(){
        $travels = Travel::where('host_accept',1)->where('host_id',$this->id)->whereConfirm('1');
        if(  $travels ->count()){
            return $travels ->sum('rate')/$travels ->count();

        }
return 0;

    }
    public function convert_date( $from,$space='-'){

        $date=explode($space,$from);
        $fmt = numfmt_create('fa', NumberFormatter::DECIMAL);
        $year= numfmt_parse($fmt, $date[0])  ;
        $month= numfmt_parse($fmt, $date[1])  ;
        $day= numfmt_parse($fmt, $date[2])  ;
        $from=  \Morilog\Jalali\CalendarUtils::toGregorian($year, $month, $day);
        return   $from=$from[0].'-'.$from[1].'-'.$from[2].' 00:00:00';
    }
}
