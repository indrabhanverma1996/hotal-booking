<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Qrcodecontroller extends Controller
{
    public function(Request $request){
        {!! QrCode::size(300)->border('10px solid')->generate('https://techvblogs.com/blog/generate-qr-code-laravel-8') !!}
    }
}
