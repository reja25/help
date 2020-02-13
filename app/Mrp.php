<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mrp extends Model
{
    protected $fillable = ['renter_id', 'room_id', 'renter_payment','due_payment','jdate', 'month', 'year'];

    public function renter()
    {
        return $this->belongsTo(Rinfo::class);
    }

    public function room()
    {
        return $this->belongsTo(Hinfo::class);
    }
}


