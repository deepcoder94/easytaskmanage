<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\ApiResponseClass;

class PagesController extends Controller
{
    public function dashboard(){
        dd('jj');
        // return view('dashboard',compact(ApiResponseClass::sendResponse([],'','Dashboard')));
    }
}
