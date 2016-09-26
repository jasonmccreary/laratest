<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Server;
use Illuminate\Support\Facades\Auth;

class ApiServerController extends Controller
{
    public function active()
    {
        Auth::user();
    }
}
