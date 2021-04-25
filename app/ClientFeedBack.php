<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientFeedBack extends Model
{
    use SoftDeletes;

    protected $table = 'client_feedbacks';
    protected $fillable = [
        'content',
        'author_info',
        'image_name',
        'image_path',
        'status'
    ];
}
