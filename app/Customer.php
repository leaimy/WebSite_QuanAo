<?php

namespace App;

use Illuminate\Foundation\Auth\User as Model;

class Customer extends Model
{
    protected $guarded = ['id'];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $table = 'customers';
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
        'phone_number',
        'street',
        'village',
        'district',
        'province',
    ];

    public function getFullName()
    {
        return $this->last_name . ' ' . $this->first_name;
    }

    public function getAdrress()
    {
        return $this->street . ', ' . $this->village . ', ' . $this->district . ', ' . $this->province;
    }

    public function getAuthPassword()
    {
        return $this->password;
    }
}
