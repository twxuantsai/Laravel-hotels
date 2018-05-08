<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomListModel extends Model
{
    protected $table = 'room_list';

    protected $fillable = [
        'title', 'type', 'current', 'total', 'price'
    ];
}
