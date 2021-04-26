<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use SoftDeletes;

    protected $table = 'sliders';
    protected $fillable = [
        'title',
        'content',
        'image_name',
        'image_path',
        'status'
    ];

    public function setStatusVisible()
    {
        $this->update([
            'status' => 1
        ]);
    }

    public function setStatusHidden()
    {
        $this->update([
            'status' => 0
        ]);
    }
}
