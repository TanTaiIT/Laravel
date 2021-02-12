<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function uploadfile($local){
    	return view('upload');
    	
    }
    public function upload(Request $req){
    	$req->file->store('public');
    	return 'file has been store';
    }
}
