<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderNote extends Model
{
    protected $table = 'order_notes';

    protected $fillable = [
        'order_id',
        'user_id',
        'order_status',
        'note'
    ];
}
