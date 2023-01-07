<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait ImageTrait {
    public function ImageUpload(Request $request,$filename)
    {
        $image=$request->file('logo')->getClientOriginalName();
        $path=$request->file('logo')->storeAs($filename,$image,'images');
    }
}