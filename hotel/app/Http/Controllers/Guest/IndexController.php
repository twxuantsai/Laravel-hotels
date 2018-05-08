<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RoomListModel;

class IndexController extends Controller
{
    public function show() {
        $rooms = RoomListModel::whereColumn('total', '>', 'current')->get();
        return view('index', [
            'rooms' => $rooms
        ]);
    }
}
