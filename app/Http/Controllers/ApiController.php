<?php

namespace App\Http\Controllers;

use App\Server;
use Illuminate\Support\Facades\Auth;



class ApiServerController extends \BaseController
{
    public function active()
    {
        Auth::user();
    }
}
