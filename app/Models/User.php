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

    // Mass assignable attributes
    protected $fillable = [
        'name',
        'email',
        'password',
        'telephone',
        'grade',
        'gender',
        'role',         // student | admin
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relationships
    public function classes()
    {
        return $this->belongsToMany(DanceClass::class, 'class_user')
                    ->withTimestamps();
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }

    // Accessor: check if user is admin
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    // Accessor: check if user is student
    public function isStudent()
    {
        return $this->role === 'student';
    }
}
