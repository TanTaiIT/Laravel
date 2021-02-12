<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
class ImageController extends Controller
{
    public function ImageResize(){
    	return view('view');
    }
    public function uploadimage(Request $req){
    	$image=$req->file;
    	$filename=$image->getClientOriginalName();
    	$image_resize=Image::make($image->getRealPath());
    	$image_resize->resize(300,300);
    	$image_resize->save(public_path('image/'.$filename));
    	return "Image has been restore";

    }
}
