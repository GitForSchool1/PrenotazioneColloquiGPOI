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
    
    public function getId(){ return $this->attributes['id'];}
    public function getName(){ return $this->attributes['name']; }
    public function getEmail(){ return $this->attributes['email']; }
    public function getEmailVerifiedAt(){ return $this->attributes['email_verified_at']; }
    public function getPassword(){ return $this->attributes['password']; }
    public function getRememberToken(){ return $this->attributes['remeber_token']; }
    public function getCreatedAt(){ return $this->attributes['createdAt']; }
    public function getRole(){ return $this->attributes['role']; }
    public function getBalance(){ return $this->attributes['balance']; }

    public function setId($id){ $this->attributes['id'] = $id;}
    public function setName($name){ $this->attributes['name'] = $name;}
    public function setEmail($email){ $this->attributes['email'] = $email;}
    public function setEmailVerifiedAt($emailVerifiedAt){ $this->attributes['email_verified_at'] = $emailVerifiedAt;}
    public function setPassword($password){ $this->attributes['password'] = $password;}
    public function setRememberToken($rememberToken){ $this->attributes['remember_token'] = $rememberToken;}
    public function setCreatedAt($createdAt){ $this->attributes['created_at'] = $createdAt;}
    public function setRole($role){ $this->attributes['role'] = $role;}
    public function setBalance($balance){ $this->attributes['balance'] = $balance;}
}
