<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class CreateEventsController extends Controller
{
    //
    function index(){
        return view('pages.create_events.create_events');
    }

    function store(Request $request){
        request()->validate([
            "title"=>"required",
            "description"=>"required",
            "date_start"=>"required",
            "date_end"=>"required",
            "location"=>"required",
            "price"=>"required",
            "image"=>"required",
        ]);

        $image = $request->file("image");
        $imageName = time() . "_" . $image->getClientOriginalName();
        $image->storeAs("public/img", $imageName);
        $userId = auth()->user()->id ;
        // dd($request);
        Events::create([
            "title"=>$request->title,
            "organizer_id"=>$userId,
            "description"=>$request->description,
            "date_start"=>$request->date_start,
            "date_end"=>$request->date_end,
            "location"=>$request->location,
            "price"=>$request->price,
            "image" => $imageName
        ]);
        return back();
    }

}
