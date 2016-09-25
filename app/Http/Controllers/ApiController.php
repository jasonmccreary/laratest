<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Server;



class ApiServerController extends \BaseController
{
    public function active()
    {
        Auth::user();
    }
}
