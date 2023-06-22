<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\category;
use App\Models\game;
use App\Models\room;

class ApiController extends Controller
{
    //
    public function call_percent(){

        $room = room::where('room_status', 1)->get();
        if(isset($room)){
            foreach($room as $u){

                // $per = rand(75,100);

                room::where('id', $u->id)
                ->update([
                    'percent' => rand(75,100)
                    ]);

            }
        }
        

        return response()->json([
            'data' => [
              'msg' => 'success'
            ]
          ]);


    }
}
