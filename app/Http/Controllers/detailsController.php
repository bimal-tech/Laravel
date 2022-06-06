<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class detailsController extends Controller
{
    public function homepage(){
        $datashere = DB::table('roles')
            ->select(DB::raw('name'))
            ->get();
            return view('homepage',['data'=>$datashere]);
            // echo "Here";
    }
}
