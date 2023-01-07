<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait ImageTrait {

    public function ImageUpload(Request $request,$filename)
    {
        $image=$request->file('favicon')->getClientOriginalName();
        $path=$request->file('favicon')->storeAs($filename,$image,'images');
    }


}