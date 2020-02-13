<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rinfo extends Model
{
    protected $fillable=['rname', 'profession', 'nid', 'hno', 'hrent', 'advance', 'jdate', 'phone','comments', 'image', 'room_id', 'status'];

    public function room()
    {
        return $this->belongsTo(Hinfo::class);
    }
}


