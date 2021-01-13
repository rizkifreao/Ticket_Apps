<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationModel extends Model
{
    protected $table = "reservation";
    protected $fillable = [
        'name', 'address', 'notelp', 'email', 'date', 'is_checkin'
    ];
}
