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
                    ->select('events.*', 'kategori.kategori')
                    ->paginate(6);
        return view('event.list', ['event' => $event]);
    }
    public function cari(Request $request)
    {
        $cari = $request->key;

        $event = DB::table('events')
                    ->join('kategori', 'events.kategori_id', '=', 'kategori.id')
                    ->select('events.*', 'kategori.kategori')
                    ->where('judul', 'like', "%".$cari."%")
                    ->paginate(6);
        return view('event.list', ['event' => $event]);
    }
    public function detail($id)
    {
        $event = DB::table('events')
                ->join('kategori', 'events.kategori_id', '=', 'kategori.id')
                ->select('events.*', 'kategori.kategori')
                ->where('events.id', $id)->first();

        // dd($event);

        return view('event.detail', ['event' => $event]);
    }
}
