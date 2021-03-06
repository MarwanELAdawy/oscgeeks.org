<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'contact_no',
        'year',
        'homepage_select_first',
        'homepage_select_second',
        'day',
        'time',
        'ip',
    ];
}
