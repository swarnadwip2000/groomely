<?php
  
namespace App\Models;
  
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Fortify\TwoFactorAuthenticatable;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    use SoftDeletes;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guard_name = 'web';

    protected $fillable = [
        'name',
        'email',
        'social_type',
        'login_status',
        'google_id',
        'facebook_id',
        'password',
        'profile_picture',
    ];
  
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
  
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function appointmentsCount($id)
    {
        $count = Appointment::where('seller_id',$id)->where('status', 'completed')->count();
        return $count;
    }

    public function service()
    {
        return $this->hasMany(Service::class);
    }

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }


    public static function appointmentsSum($id)
    {
        $sum = Appointment::where('seller_id',$id)->where('status', 'completed')->sum('amount');

        return $sum;
    }

    public static function appontmentDetails($id)
    {
        $detail = Appointment::where('seller_id',$id)->where('status', 'completed')->get();
        return $detail;
    }

    public static function totalAmount($id)
    {
        $amount = Appointment::where('seller_id',$id)->where('status', 'completed')->sum('amount');
        return $amount;
    }
    public static function totalAmountByMonth($id, $sdate, $ldate)
    {
        // dd($years);
        $amount = Appointment::where('seller_id',$id)->where('status', 'completed')->whereBetween('updated_at', [$sdate, $ldate])->sum('amount');
        
        return $amount;
    }

    
}