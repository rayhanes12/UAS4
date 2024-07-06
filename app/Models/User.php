<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
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

    public function kriterias()
    {
        return $this->hasMany(Kriteria::class);
    }

    public function sub_kriterias()
    {
        return $this->hasMany(SubKriteria::class);
    }

    public function subkriteria1s()
    {
        return $this->hasMany(SubKriteria1::class);
    }

    public function subkriteria2s()
    {
        return $this->hasMany(SubKriteria2::class);
    }

    public function subkriteria3s()
    {
        return $this->hasMany(SubKriteria3::class);
    }

    public function subkriteria4s()
    {
        return $this->hasMany(SubKriteria4::class);
    }

    public function subkriteria5s()
    {
        return $this->hasMany(SubKriteria5::class);
    }

    public function subkriteria6s()
    {
        return $this->hasMany(SubKriteria6::class);
    }

    public function alternatifs()
    {
        return $this->hasMany(Alternatif::class);
    }

    public function penilaians()
    {
        return $this->hasMany(Penilaian::class);
    }
}
