<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $this->validate($request,[
            "title"  => "required|string",
            "content" => "required|min:50",
            "image" => "required|image|mimes:jpg,png,jpeg,gif,svg",
        ]);
       // echo 'Valid Data';
        // $image = $request->file('image');
        // $filename = date('Y-m-d-H:i:s')."-".$image->getClientOriginalName();
        //echo $filename;
        $data  = $request->only(['title','content', 'image']);
        $title = "Blog Data";
        return view('index',compact('data','title'));
    }
}
?>
