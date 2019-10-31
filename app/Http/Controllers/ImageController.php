<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller
{
    public function index(){
        return view("upload.main");
    }

    public function store(Request $request){
        $request->validate([
            'file_name'=>'image|mimes:jpg,jpeg,png,gif,bmp',
            'title'=>'required'
        ]);
        $image=new Image();
        $image->title=$request->title;
        $image->file_name=$this->uploadFile($request);
        $image->save();

        // return redirect('/')->with('message','Your image succesfully upload');
        return 'aa';
        
    }
    protected function uploadFile($request){
        if($request->hasFile('file_name'))
        {
            $image->$request->file('file_name');
            // $fileName=$image->getClientOriginalName();
            // $destination=storage_path('app/public');

            // if($image->move($destination,$fileName)){
            //     return $fileName;
            // }

            return $image->store('public');
        }
        return null;
    }

}
