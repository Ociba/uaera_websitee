<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Team;
use DB;
use News;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    /** 
     * This function counts the Teams Members
    */
    public function countMembers(){
        $count_all_team_members =DB::table('teams')->count();
        return $count_all_team_members;
    }
    /** 
     * This function counts the current news Number
    */
    public function countNews(){
        $count_news =DB::table('news')->count();
        return $count_news;
    }
    /** 
     * This function counts the number of Users
    */
    public function countUsers(){
        $count_users =DB::table('users')->count();
        return $count_users;
    }
    /** 
     * This function counts current Achievements
    */
    public function countAchievements(){
        $count_achievements =DB::table('achievements')->count();
        return $count_achievements;
    }
}
