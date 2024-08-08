<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'phone',
        'image',
        'profile_background',
        'country_id',
        'state',
        'service_city',
        'address',
        'post_code',
        'user_type',
        'user_status',
        'terms_condition',
        'email_verified',
        'email_verify_token',
        'change_password_date',
        'speciality',
        'studies',
        'professional_id',
        'ine',
        'rfc',
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'user_type' => 'integer',
            'email_verified' => 'integer',
            'password' => 'hashed',
        ];
    }
}