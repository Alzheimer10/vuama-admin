<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Address;
use App\Models\Bank_account;
use App\Models\Project;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'ci',
        'name',
        'lastname',
        'phone',
        'additional_phone',
        'description',
        'dbirth',
        'avater',
        'status',
        'address_id',
        'gender'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function fullname()
    {
        return $this->name.' '. $this->lastname;
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }

    public function bank_accounts()
    {
        return $this->hasMany(bank_account::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
