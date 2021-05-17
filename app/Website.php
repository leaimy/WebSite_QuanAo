<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    protected $table = 'websiteconfigs';
    protected $fillable = [
        'config_key',
        'config_value'
    ];
}
