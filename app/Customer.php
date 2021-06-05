<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
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
}
