<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class NewEvent extends Model
{
    protected $table = 'new_events';

    protected $fillable = [
        'name','start_year','start_month','start_day',
        'start_hour','start_minute'
    ];

    protected $attributes = [
        'end_year' => null,
        'end_month' => null,
        'end_day' => null,
        'end_hour' => null,
        'end_minute' => null
    ];

    public $timestamps = false;
}
