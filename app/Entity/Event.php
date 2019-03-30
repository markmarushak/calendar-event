<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $fillable = [
      'name', 'dateStart', 'timeStart'
    ];

    protected $attributes = [
        'dateEnd' => null,
        'timeLength' => null
    ];

    public $timestamps = false;
}
