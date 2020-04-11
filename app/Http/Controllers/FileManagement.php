<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileManagement extends Controller
{
    public function upload(Request $request){
        dd($request);
    }
    public static function store($file,$path,$name = "",$ext = "" ,$disk = "uploads"){
        Storage::disk($disk)->put($path,file_get_contents($file));
    }
}
