<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $primaryKey = 'user_id';      // primary key spesify cheyyaan

    protected $dates = ['date_of_birth'];

    public function scopeActive($query){
        return $query->where('status',1);
    }

    public function getDateOfBirthFormatedAttribute(){    // date_of_birth_formated
        return date('d-m-Y',strtotime($this->date_of_birth));
    }

    public function getStatusTextAttribute(){
        if($this->status == 1) return 'Active';
        else return 'Inactive';
    }

    protected $appends = ['date-of_birth_formated','status_text'];

    protected $fillable = [
        'name',
        'email',
        'password',
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
}
