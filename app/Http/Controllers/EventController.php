<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

use App\Http\Requests;

class EventController extends Controller
{
    //

    public function list()
    {
        $event = DB::table('events')
                    ->join('kategori', 'events.kategori_id', '=', 'kategori.id')
                    ->select('kategori.*', 'kategori.kategori')
                    ->get();

        return view('event.list', ['event' => $event]);
    }
}
