<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Onlyhome extends Model
{
    protected $fillable = [
        'user_id', 'start_time', 'end_time','task', 'multitaask','cost', 'reason_cost','copartner',
    ];
}