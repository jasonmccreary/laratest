<?php

namespace App\Http\Controllers;

use App\Server;
use Illuminate\Support\Facades\Auth;



class ApiServerController extends \Controller
{
    public function active()
    {
        Auth::user();
    }
}
